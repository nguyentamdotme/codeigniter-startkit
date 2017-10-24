      </div>
      <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right"></span> © 2017 Copyright.
        </div>
      </footer>
    <div>
      <!-- The template to display files available for upload -->
  <script id="template-upload" type="text/x-tmpl">
  {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-upload fade">
          <td>
              <span class="preview"></span>
          </td>
          <td>
              <p class="name">{%=file.name%}</p>
              <strong class="error text-danger"></strong>
          </td>
          <td>
              <p class="size">Processing...</p>
              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
          </td>
          <td>
              {% if (!i && !o.options.autoUpload) { %}
                  <button class="btn btn-primary start" disabled>
                      <i class="glyphicon glyphicon-upload"></i>
                      <span>Start</span>
                  </button>
              {% } %}
              {% if (!i) { %}
                  <button class="btn btn-warning cancel">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                      <span>Cancel</span>
                  </button>
              {% } %}
          </td>
      </tr>
  {% } %}
  </script>


  <script id="template-download" type="text/x-tmpl">
  {% for (var i=0, file; file=o.files[i]; i++) { %}
      <tr class="template-download fade">
          <td>
              <span class="preview">
                  {% if (file.thumbnailUrl) { %}
                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                  {% } %}
              </span>
          </td>
          <td>
              <p class="name">
                  {% if (file.url) { %}
                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                  {% } else { %}
                      <span>{%=file.name%}</span>
                  {% } %}
              </p>
              {% if (file.error) { %}
                  <div><span class="label label-danger">Error</span> {%=file.error%}</div>
              {% } %}
          </td>
          <td>
              <span class="size">{%=o.formatFileSize(file.size)%}</span>
          </td>
          <td>
              {% if (file.deleteUrl) { %}
                  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                      <i class="glyphicon glyphicon-trash"></i>
                      <span>Delete</span>
                  </button>
                  <input type="checkbox" name="delete" value="1" class="toggle">
              {% } else { %}
                  <button class="btn btn-warning cancel">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                      <span>Cancel</span>
                  </button>
              {% } %}
          </td>
      </tr>
  {% } %}
  </script>
    <!-- Javascript Libs -->
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/Chart.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="/assets/flatAdmin/lib/js/ace/theme-github.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="/assets/flatAdmin/js/app.js"></script>
    <!-- <script type="text/javascript" src="/assets/flatAdmin/js/index.js"></script> -->
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap.min.js"></script>

    <!-- Jquery Image Upload -->
    <script src="<?= site_url('assets/fileUpload/js/vendor/jquery.ui.widget.js'); ?>"></script>

  <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
  <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
  <!-- <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script> -->
  <script src="<?= site_url('assets/fileUpload/js/tmpl.min.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.iframe-transport.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-process.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-image.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-audio.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-video.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-validate.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/jquery.fileupload-ui.js'); ?>"></script>
  <script src="<?= site_url('assets/fileUpload/js/main.js'); ?>"></script>
  </body>

</html>
