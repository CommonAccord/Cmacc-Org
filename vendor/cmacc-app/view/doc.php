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
// CSS lives in Doc.css. Output only the depth-control bar and JS here,
// directly (not through $document) so str_replace('{'/'}') never corrupts them.
echo <<<'CMACC_UI'
<div class="cmacc-depth-control" style="position:sticky;top:0;background:#f5f5f5;border-bottom:1px solid #ccc;padding:5px 12px;z-index:1000;font-family:sans-serif;font-size:12px;display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
  <label>Show depth:</label>
  <input type="range" id="cmacc-depth-slider" min="1" max="20" value="20"
         oninput="cmaccSetDepth(this.value)">
  <span id="cmacc-depth-label" style="min-width:2em;font-weight:bold">All</span>
  <button onclick="cmaccSetDepth(20)">Expand All</button>
  <button onclick="cmaccSetDepth(1)">Collapse All</button>
</div>

<script>
(function () {

  /* Calibrate slider max to the actual deepest span in this document */
  function calibrate() {
    var spans = document.querySelectorAll('.cmacc-span');
    var maxD = 0;
    spans.forEach(function (s) {
      var d = parseInt(s.getAttribute('data-depth') || '0', 10);
      if (d > maxD) maxD = d;
    });
    var slider = document.getElementById('cmacc-depth-slider');
    if (slider && maxD > 0) {
      slider.max   = maxD;
      slider.value = maxD;
    }
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
    label.textContent = span.getAttribute('data-cmacc-title') || '…';
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
    var slider = document.getElementById('cmacc-depth-slider');
    var label  = document.getElementById('cmacc-depth-label');
    if (slider) slider.value = maxDepth;
    if (label)  label.textContent =
      (maxDepth >= parseInt((slider && slider.max) || '20', 10)) ? 'All' : String(maxDepth);

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
