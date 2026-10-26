#!/usr/bin/env bash
# Start or stop a background port-forward to the local Service. Usage:
#   port-forward.sh [start|stop]
# The Service forward attaches to one Pod, so restart it after each deploy.
set -euo pipefail

CONTEXT=${CMACC_CONTEXT:-orbstack}
PORT=${CMACC_PORT:-8080}
SERVICE=${CMACC_SERVICE:-cmacc-legacy}
# In-progress files live in the repo's git-ignored workspace, never $TMPDIR or /tmp.
WORK=${CMACC_WORK:-$(cd "$(dirname "$0")/../.." && pwd)/.agent-work/tmp}
mkdir -p "$WORK/port-forward"
STATE=$WORK/port-forward/$SERVICE
PIDFILE=$STATE.pid
LOG=$STATE.log

# Stop only a kubectl port-forward this script started.
stop() {
  [ -f "$PIDFILE" ] || return 0
  pid=$(cat "$PIDFILE")
  if ps -p "$pid" -o command= 2>/dev/null | grep -q 'kubectl.*port-forward'; then
    kill "$pid"
    while kill -0 "$pid" 2>/dev/null; do sleep 0.1; done
    echo "Stopped port-forward (pid $pid)"
  fi
  rm -f "$PIDFILE"
}

case ${1:-start} in
  stop) stop; exit 0 ;;
  start) ;;
  *) echo "usage: $0 [start|stop]" >&2; exit 2 ;;
esac

stop
if owner=$(lsof -nP -iTCP:"$PORT" -sTCP:LISTEN 2>/dev/null | awk 'NR==2 {print $1 " (pid " $2 ")"}') \
    && [ -n "$owner" ]; then
  echo "Port $PORT is already in use by $owner. Stop it or set CMACC_PORT." >&2
  exit 1
fi

nohup kubectl --context "$CONTEXT" -n cmacc-local port-forward \
  --address 127.0.0.1 "service/$SERVICE" "$PORT:80" >"$LOG" 2>&1 &
echo $! >"$PIDFILE"

for _ in $(seq 50); do
  if curl -s -o /dev/null --max-time 2 "http://127.0.0.1:$PORT/"; then
    echo "Forwarding http://127.0.0.1:$PORT/ (pid $(cat "$PIDFILE"), log $LOG). Stop with 'task port-forward:stop'."
    exit 0
  fi
  kill -0 "$(cat "$PIDFILE")" 2>/dev/null || break
  sleep 0.2
done

echo "Port-forward did not come up:" >&2
cat "$LOG" >&2
stop
exit 1
