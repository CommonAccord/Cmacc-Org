/* CommonAccord: CSS counters ignore start="N", so carry it into the nested numbering
   (see Doc.css / Print.css) for <ol start="N"> and <ol type="1" start="N">. */
(function () {
  function run() {
    var lists = document.querySelectorAll('ol[start]:not([type]), ol[type="1"][start]');
    for (var i = 0; i < lists.length; i++) {
      var n = parseInt(lists[i].getAttribute('start'), 10);
      if (!isNaN(n)) lists[i].style.counterReset = 'cmn ' + (n - 1);
    }
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', run); else run();
})();
