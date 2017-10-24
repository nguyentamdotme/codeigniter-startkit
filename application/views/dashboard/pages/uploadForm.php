<form id="fileupload" action="" method="POST" enctype="multipart/form-data">
  <div class="row fileupload-buttonbar">
    <div class="col-lg-7">
      <span class="btn btn-success fileinput-button">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Add files...</span>
          <input type="file" name="files[]" multiple>
      </span>

    </div>
    <!-- The global progress state -->
    <div class="col-lg-5 fileupload-progress fade" style="opacity: 1">
      <!-- The global progress bar -->
      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
      </div>
      <div class="progress-extended">&nbsp;</div>
      <div id="files"></div>
    </div>
  </div>
  <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
</form>
