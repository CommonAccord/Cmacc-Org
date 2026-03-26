<?php

$cssdoc = 'Doc/G/Z/CSS/Doc.css';

$cssspecial = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($cssspecial) > 5){
  $cssdoc = $cssspecial ;
  }

echo "<!DOCTYPE html><head><title>$dir</title><link  href='$cssdoc' rel='stylesheet' /> <link rel='icon' href='vendor/png/CmA-Square.png'></head><body>";

include("$lib_path/view-tabs.php");

echo "<hr>";

$lib_path = LIB_PATH;


$document = `perl $lib_path/parser.pl $path/$dir $keyName $wrapName`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){

$document=str_replace("{Render.Metadata}", "(" . $dir . "#" . $keyName . " on " . date('Y-m-d') . ")" ,$document);

$document=str_replace("{","<span class='missing'>{",$document);

$document=str_replace("}","}</span>",$document);

// --- CommonAccord span show/hide ---
// Output depth-control bar and JS directly (not through $document) so that
// str_replace('{'/'}') above never corrupts the script.
echo <<<'CMACC_UI'
<div class="cmacc-depth-control" style="position:sticky;top:0;background:#f5f5f5;border-bottom:1px solid #ccc;padding:5px 12px;z-index:1000;font-family:sans-serif;font-size:12px;display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
  <span style="font-weight:bold;white-space:nowrap;">Show depth:</span>
  <span id="cmacc-depth-btns"></span>
</div>

<script>
(function () {

  var docMaxDepth = 0;

  /* Style helpers for depth buttons */
  var BTN_BASE = 'display:inline-block;width:22px;height:22px;line-height:20px;padding:0;'
               + 'text-align:center;font-size:11px;cursor:pointer;border-radius:3px;'
               + 'font-family:sans-serif;margin:1px;box-sizing:border-box;vertical-align:middle;';
  var BTN_ALL_BASE = 'display:inline-block;height:22px;line-height:20px;padding:0 6px;'
                   + 'text-align:center;font-size:11px;cursor:pointer;border-radius:3px;'
                   + 'font-family:sans-serif;margin:1px;box-sizing:border-box;vertical-align:middle;';

  function setActive(btn, on, wide) {
    btn.style.cssText = (wide ? BTN_ALL_BASE : BTN_BASE)
      + (on ? 'background:#2a7a2a;color:#fff;border:1px solid #2a7a2a;'
             : 'background:#fff;color:#333;border:1px solid #bbb;');
  }

  /* Build numbered depth buttons 1..docMaxDepth plus an "All" button */
  function buildDepthButtons() {
    var container = document.getElementById('cmacc-depth-btns');
    if (!container) return;
    container.innerHTML = '';

    for (var i = 1; i <= docMaxDepth; i++) {
      (function (depth) {
        var btn = document.createElement('button');
        btn.id    = 'cmacc-btn-' + depth;
        btn.title = 'Show depth ' + depth;
        btn.textContent = String(depth);
        setActive(btn, false, false);
        btn.onclick = function () { window.cmaccSetDepth(depth); };
        container.appendChild(btn);
      }(i));
    }

    var allBtn = document.createElement('button');
    allBtn.id    = 'cmacc-btn-all';
    allBtn.title = 'Expand all';
    allBtn.textContent = 'All';
    setActive(allBtn, true, true);   /* "All" is active on load */
    allBtn.onclick = function () { window.cmaccSetDepth(docMaxDepth + 99); };
    container.appendChild(allBtn);
  }

  /* Highlight the button matching the current depth */
  function highlightDepthButton(maxDepth) {
    for (var i = 1; i <= docMaxDepth; i++) {
      var btn = document.getElementById('cmacc-btn-' + i);
      if (btn) setActive(btn, i === maxDepth, false);
    }
    var allBtn = document.getElementById('cmacc-btn-all');
    if (allBtn) setActive(allBtn, maxDepth > docMaxDepth, true);
  }

  /* Calibrate max depth from the actual document, then build buttons */
  function calibrate() {
    document.querySelectorAll('.cmacc-span').forEach(function (s) {
      var d = parseInt(s.getAttribute('data-depth') || '0', 10);
      if (d > docMaxDepth) docMaxDepth = d;
    });
    buildDepthButtons();
  }

  /* Set scroll-padding-top so anchor links land below the sticky bar */
  function updateScrollPadding() {
    var bar = document.querySelector('.cmacc-depth-control');
    if (bar) {
      document.documentElement.style.scrollPaddingTop = (bar.offsetHeight + 4) + 'px';
    }
  }

  function init() {
    calibrate();
    updateScrollPadding();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  /* Collapse or expand a single span.
     Both the hiding and the placeholder label are done entirely in JS with
     inline styles so they work regardless of whether Doc.css is loaded. */
  function collapseSpan(span) {
    if (span.classList.contains('cmacc-collapsed')) return;
    var content = span.querySelector(':scope > .cmacc-content');
    span.classList.add('cmacc-collapsed');
    if (content) content.style.display = 'none';
    /* Insert a clickable label showing the field path */
    var label = document.createElement('span');
    label.className = 'cmacc-placeholder';
    label.textContent = '(' + (span.getAttribute('data-cmacc-title') || '…') + ')';
    label.style.cssText = 'color:#2a7a2a;font-style:italic;font-weight:bold;font-size:0.85em;cursor:pointer;';
    span.appendChild(label);
  }
  function expandSpan(span) {
    if (!span.classList.contains('cmacc-collapsed')) return;
    var content = span.querySelector(':scope > .cmacc-content');
    span.classList.remove('cmacc-collapsed');
    if (content) content.style.display = '';
    /* Remove all placeholder labels */
    span.querySelectorAll(':scope > .cmacc-placeholder').forEach(function (p) {
      p.parentNode.removeChild(p);
    });
  }
  function toggleSpan(span) {
    if (span.classList.contains('cmacc-collapsed')) {
      expandSpan(span);
    } else {
      collapseSpan(span);
    }
  }

  /* Click handler.
     Use closest() so clicking anywhere inside a span (on its text, on a
     nested child span, etc.) finds the nearest .cmacc-span ancestor and
     toggles it.  Clicks on <a> links are left alone so navigation works. */
  document.addEventListener('click', function (e) {
    if (e.target.closest('a')) return;          /* let links navigate normally */
    var span = e.target.closest('.cmacc-span');
    if (span) {
      toggleSpan(span);
      e.stopPropagation();                      /* don't also toggle a parent span */
    }
  });

  /* Global depth control */
  window.cmaccSetDepth = function (maxDepth) {
    maxDepth = parseInt(maxDepth, 10);
    highlightDepthButton(maxDepth);

    document.querySelectorAll('.cmacc-span').forEach(function (span) {
      var d = parseInt(span.getAttribute('data-depth') || '0', 10);
      if (d > maxDepth) {
        collapseSpan(span);
      } else {
        expandSpan(span);
      }
    });
  };

}());
</script>
CMACC_UI;

  echo $document;
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; }
else {
   echo "Nothing to Show";

}
?>
