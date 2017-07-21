<?php
/**
 * xEdit file, using xEditable for better UI
 * User: QuynhND
 */

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;
if (strlen($htmlHead) > 5) {

    echo $htmlHead;
} else {
    echo "<!DOCTYPE html><head><title>$dir</title><link  href='Doc/Z/CSS/Doc.css' rel='stylesheet' />";
}
?>
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
      rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<style type="text/css">
    .missing, .param, .editable {
        cursor: pointer;
        text-decoration: none;
        border-bottom: dashed 1px #08c !important;
    }

    .editable-unsaved {
        font-weight: inherit;
    }

    .missing.editable-disabled {
        color: red !important;;
    }

    .param.editable-disabled {
        color: green !important;
    }

    #floating_alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 5000;
    }

    /* The whole thing */
    .custom-menu {
        display: none;
        z-index: 1000;
        position: absolute;
        overflow: hidden;
        border: 1px solid #CCC;
        white-space: nowrap;
        font-family: sans-serif;
        background: #FFF;
        color: #333;
        border-radius: 5px;
        padding: 0;
    }

    /* Each of the items in the list */
    .custom-menu li {
        padding: 8px 12px;
        cursor: pointer;
        list-style-type: none;
        transition: all .3s ease;
    }

    .custom-menu li:hover {
        background-color: #DEF;
    }
</style></head>
<body style="margin:20px;padding:0">
<?php

include("$lib_path/view-tabs.php");

$basePath = (dirname($dir) == ".") ? "" : dirname($dir) . "/";
$currentFileName = basename($dir);
$currentFolder = $path . "/" . $basePath;
$textNewDoc = ($currentFileName  == '0.md') ? 'New Document' : 'Copy Document';
echo " &emsp;  &emsp;  &emsp;  &emsp;  ";
echo "<button type=\"button\" id='newDocument' class=\"btn btn-info\">$textNewDoc</button>&emsp;";

echo "Documents: <select id='relatedDocument' class=\"\" style=\"height: 34px;\">" ;
foreach (glob($currentFolder . '*.md') as $filename) {
    $baseFileName = basename($filename);
    $isCurrentFile = ($currentFileName == $baseFileName) ? "selected='selected'" : "";
    echo "<option value='$basePath$baseFileName' $isCurrentFile>$baseFileName</option>";
}
echo "</select>&emsp;";

echo "<button type=\"button\" id='addAttributes' class=\"btn btn-primary\">Add more attribute/object</button>";

echo "<hr>";

$lib_path = LIB_PATH;

$document = `perl $lib_path/xEdit_parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength) {

    $document = str_replace("{", "<span class='missing' data-value=\" \">{", $document);

    $document = str_replace("}", "}</span>", $document);

    echo $document;
} else {
    echo "Nothing to Show";

}

?>

<!-- Modal -->
<div id="fileConfirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">No file selected</h4>
            </div>
            <div class="modal-body text-center">
                <p>Where do you want store your changes?<br/>
                    <?= ($currentFileName  == '0.md') ? '' : '<small class="text-danger">Leave blank will store in current file</small>' ?>
                </p>
                <div class="container-fluid">
                    <div class="row">
                        <label class="col-md-offset-3 col-md-6"><?= $basePath?></label>
                        <input type="text" id="fileNameText" autofocus onfocus="this.value = this.value;" value="<?= ($currentFileName  == '0.md') ? '' : $currentFileName ?>"
                                            class="col-md-offset-3 col-md-6"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="fileNameSubmit">Submit</button>
            </div>
        </div>

    </div>
</div>
<div id="attributeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add more attributes/objects</h4>
            </div>
            <div class="modal-body text-center">
                <p>What attributes/objects do you want to add into document? </p>
                <div class="container-fluid">
                    <div class="row"><textarea id="attributesText" autofocus rows="15"
                                               class="col-md-offset-2 col-md-8"></textarea></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="attributesSubmit">Submit</button>
            </div>
        </div>

    </div>
</div>
<ul class='custom-menu'>
    <li data-action="reload">Reload page</li>
</ul>

</body>
<script type="application/javascript">
    // DEFINE
    //    $.fn.editable.defaults.mode = 'inline';
    var normalTexts = {}, redTexts = {}, greenTexts = {}, pinkTexts = {};
    var fileName = ("<?= $currentFileName ?>" === "0.md") ? '' : "<?= $dir; ?>";
    var rootFileName = "<?= $dir; ?>";

    $(document).ready(function () {
        // Trigger action when the contexmenu is about to be shown
        $(document).bind("contextmenu", function (event) {
            // Avoid the real one
            event.preventDefault();
        });

        $(document).mousedown(function (e) {
            // If the clicked element is not the menu
            if (!$(e.target).parents(".custom-menu").length > 0) {
                // Hide it
                $(".custom-menu").hide(100);
            }

            var $target;
            if (e.button === 2) {
                $('.param').editable('disable');
                $target = $(e.target);
                if ($target.is('.missing, .param, .editable')) {
                    $target.editable('enable');
                    $target.editable('show');
                } else {
                    // Show contextmenu
                    $(".custom-menu").finish().toggle(100).

                    // In the right position (the mouse)
                    css({
                        top: event.pageY + "px",
                        left: event.pageX + "px"
                    });
                }
                return false;
            }
            return true;
        });

        // If the menu element is clicked
        $(".custom-menu li").click(function(){
            switch($(this).attr("data-action")) {
                case "reload": window.location.reload(true); break;
            }
            $(".custom-menu").hide(100);
        });

        //COUNT RED TEXT
        // READ TEXT ON CURRENT FILES
//        $("span.missing").each(function (i, o) {
//            var title = getCleanText($(o));
//            if (!redTexts.hasOwnProperty(title)) {
//                redTexts[title] = "";
//            }
//        });
//        //COUNT GREEN TEXT
//        $(".param").each(function (i, o) {
//            var title = getCleanText($(o));
//            if (!greenTexts.hasOwnProperty(title)) {
//                greenTexts[title] = "";
//            }
//        });

        //PINK TEXT
        $("font[color=magenta]").each(function (i, o) {
            setupPinkDropdown(i, o);
        });

        function setupPinkDropdown(i, o) {
                var $spanTitle = $(o).find("span").first();
                var coreRelateTitle = $spanTitle.attr('title').replace(/.Alt0|.sec/gi, '');
                var title = coreRelateTitle + ".sec";
                var source = [];
                for (var altNo = 1; altNo <= $(o).find("ol:first > li").length; altNo++) {
                    source.push({value : '{' + coreRelateTitle + ".Alt" + altNo + ".sec}", text: "Selected option " + altNo});
                }
                $spanTitle.attr('title', title).attr('data-type', 'select').html("Please select 1 option");
                $spanTitle.on('init', function (e, editable) {
                    editable.options.title = title;
                }).on('save', function (e, params) {
                    var value = params.newValue;
                    saveNormalText(title, value);
                    for (var i = 0; i < source.length; i++) {
                        if (source[i].value === value) {
                            var $currentTarget = $(e.target);
                            var html = $currentTarget.nextAll("span").eq(0).addClass('hide').find("ol:first > li").eq(i).html();
                            $currentTarget.nextAll("span").eq(1).html(html).find("font[color=magenta]").each(function (i, o) {
                                setupPinkDropdown(i, o);
                            });
                            break;
                        }
                    }
                }).editable({
                    source: source
                });
                $(o).append("<span class=\"tempSelected\"></span>");
        }

        // GREEN TEXT
        $('.param').on('init', function (e, editable) {
            editable.options.title = $(this).parent().attr('title');
        }).on('save', function (e, params) {
            var value = params.newValue;
            var $currentTarget = $(e.target);
            var currentAttribute = $(this).parent().attr('title');
            if (value.length === 0) {
                // Back to Missing
                if ($currentTarget.hasClass('missing')) {

                } else {

                }
            } else {
                $('span[title="' + currentAttribute + '"]')
                    .find('a').removeClass('editable-unsaved').html(value);
            }
            saveNormalText(currentAttribute, $currentTarget
                .removeAttr('data-original-title title aria-describedby')
                .prop('outerHTML')
                .replace(/ editable-click| editable-open| editable-unsaved| editable/gi, '')
            );
        }).on('click', function (e) {
            $('.param').editable('disable');
        });


        // NORMAL TEXT
        function saveNormalText(title, value) {
            // Clear local store
            normalTexts = {};
            normalTexts[title] = value;
            saveToFile();
        }

        // RED TEXT
        $('span.missing').on('init', function (e, editable) {
            editable.options.title = getCleanText($(this));
        }).on('shown', function (e, editable) {
            var text = $(this).text();
            editable.input.$input.val((text.length > 0 && !text.match(/[{}]/g)) ? text : '');
        }).on('save', function (e, params) {
            var value = params.newValue;
            var $currentTarget = $(e.target);
            var currentAttribute = '';
            if (value.length === 0) {
                // Back to Missing
                if ($currentTarget.hasClass('missing')) {

                } else {

                }
            } else {
                if ($currentTarget.hasClass('missing')) {
                    currentAttribute = getCleanText($currentTarget);
                    $currentTarget.removeClass('missing editable-unsaved')
                        .attr('title', currentAttribute);
                    $('span.missing:contains("' + currentAttribute + '")').removeClass('missing editable-unsaved')
                        .addClass('editable')
                        .attr('title', currentAttribute)
                        .html(value);
                } else {
                    currentAttribute = $currentTarget.attr('title');
                    if (currentAttribute.length === 0) {
                        currentAttribute = $currentTarget.attr('data-original-title');
                    }
                    $currentTarget.removeClass('editable-unsaved');
                    $('span[title="' + currentAttribute + '"], span[data-original-title="' + currentAttribute + '"]')
                        .removeClass('missing editable-unsaved')
                        .html(value);
                }
                saveNormalText(currentAttribute, value);
            }
        }).editable();

        function getCleanText($element) {
            return $element.html().replace(/[{}]/g, '');
        }

        // SAVE FILES:
        function saveToFile() {
            if (fileName.length === 0) {
                $('#fileConfirmModal').modal('show');
            } else {
                $.ajax({
                    method: "POST",
                    data: {
                        action: 'xEditSaveFile',
//                        redTexts: redTexts,
//                        greenTexts: greenTexts,
                        pinkTexts: pinkTexts,
                        normalTexts: normalTexts,
                        fileName: fileName,
                        rootFileName: rootFileName
                    }
                }).done(function (text) {
//                    alert(text);
                });
            }
        }

        // SUBMIT FILE NAME
        $("#fileNameText").keyup(function (event) {
            if (event.keyCode === 13) {
                $("#fileNameSubmit").click();
            }
        });
        $("#fileNameSubmit").on('click', function () {
            var name = $.trim($("#fileNameText").val());
            if (name.length === 0 || (name.lastIndexOf('/') + 1) === name.length) {
                fileName = "<?= $dir; ?>";
            } else {
                if (name.substring(name.lastIndexOf('.')) !== ".md") {
                    fileName = "<?=$basePath?>"+name + ".md";
                } else {
                    fileName = "<?=$basePath?>"+name;
                }
                // Append to dropdowns:
                $("#relatedDocument").append("<option value='"+fileName+"' >"+fileName.substr(fileName.lastIndexOf('/') + 1)+"</option>")
                    .val(fileName);
            }
            // SHOW FLOAT TOP
            $('body').append('<div id="floating_alert" class="alert alert-success alert-dismissible fade in">'
                + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                + 'You are working in file: <strong>' + fileName + '</strong>'
                + '</div>')
            saveToFile();
        });

        //add more attributes
        $("#addAttributes").on('click', function () {
            if (fileName.length === 0) {
                $('#fileConfirmModal').modal('toggle');
            }else {
                $('#attributeModal').modal('toggle');
            }
        });
        $("#attributesSubmit").on('click', function () {
            var text = $.trim($("#attributesText").val());
            if (text.length > 0) {
                $.ajax({
                    method: "POST",
                    data: {
                        action: 'xEditUpdateFile',
                        fileName: fileName,
                        data : text
                    },
                    success: function (text) {
                        window.location.href = "/index.php?action=xEdit&file=" + fileName;
                    }
                });
            }
        });
        //add new document
        $("#newDocument").on('click', function () {
            $('#fileConfirmModal').modal('toggle');
        });

        // Redirect to related documents
        $("#relatedDocument").on('change', function () {
            var file = $(this).val();
            if (file !== "<?= $dir;?>") {
                window.location.href = "/index.php?action=xEdit&file=" + file;
            }
        })

    });
</script>
