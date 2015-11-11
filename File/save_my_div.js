window.onload = function() {
 var a = document.getElementById("exportxt");
 a.onclick = function() {
    function downloadInnerHtml(filename, elId, mimeType) {
 var elHtml = document.getElementById(elId).innerHTML;
        var link = document.createElement('a');
        mimeType = mimeType || 'text/html';
        link.setAttribute('download', filename);
        link.setAttribute('href', 'data:' + mimeType  +  ';charset=utf-8,' + encodeURIComponent(elHtml));
        link.click(); 
    }
    var fileName =  'myexportedhtml.html'; 
    downloadInnerHtml(fileName, 'editor','text/html');

                return true;
              }
            }



