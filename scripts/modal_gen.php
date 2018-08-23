<?php
$modal_titles = array("HTML - Van Helden", "PHP - Van Helden","JQuery - Van Helden","C# - Van Helden","Javascript - Van Helden");
$database_functions = array("getHtmlOpdrachtenVanHelden()","getPhpOpdrachtenVanHelden()","getJqueryOpdrachtenVanHelden()","getCsharpOpdrachtenVanHelden()","getJavascriptpOpdrachtenVanHelden()");
function(){
  for ($index=0; count($modal_titles) < ; $i++) {
    echo "<div class='modal fade' id='modalJavascript' role='dialog'>";
    echo "<div class='modal-dialog'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<h5 class='modal-title'><b>". $modal_titles[$i] ."</b></h5>";
    echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
    echo "<span aria-hidden='true'>&times;</span>";
    echo "</button>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<div class='list-group'>";
    echo $database_functions[$i];
    echo "</div>";
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

  }
}


<div class="modal fade" id="modalJavascript" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Javascript - Van Helden</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
          <?php getJavascriptpOpdrachtenVanHelden();?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
