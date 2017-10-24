$(document).ready(function() {
  $('#fileupload').fileupload({
    url: 'http://cms.com/index.php/dashboard/uploadimg',
    previewMaxWidth: 100,
    previewMaxHeight: 100,
    previewCrop: true
  })
  .on('fileuploaddone', function (e, data) {
    setTimeout(function() {
      $('.progress-bar-success').css({
        'transition-property': 'width',
        'transition-duration': '2s',
        'transition-timing-function': 'linear',
        'width': '0%'
      });
      $('.progress-extended').html('');
    },2000);
  });

  $('#fileupload').addClass('fileupload-processing');
  $.ajax({
      // Uncomment the following to send cross-domain cookies:
      //xhrFields: {withCredentials: true},
      url: $('#fileupload').fileupload('option', 'url'),
      dataType: 'json',
      context: $('#fileupload')[0]
  }).always(function () {
      $(this).removeClass('fileupload-processing');
  }).done(function (result) {
      $(this).fileupload('option', 'done')
          .call(this, $.Event('done'), {result: result});
  });
});

