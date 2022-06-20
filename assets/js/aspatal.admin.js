jQuery(document).ready(function ($) {
  var mediaUploader;

  $("#upload-logo").on("click", function (e) {
    e.preventDefault();

    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: "Choose a Site Logo",
      button: {
        text: "Choose Picture",
      },
      multiple: false,
    });

    mediaUploader.on("select", function () {
      attachment = mediaUploader.state().get("selection").first().toJSON();
      $("#logo").val(attachment.url);
    });

    mediaUploader.open();
  });
});
