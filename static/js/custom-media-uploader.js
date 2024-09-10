jQuery(document).ready(function($) {
    var mediaUploader;

    $('#load_media_button').click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media({
            title: 'Choose File',
            button: {
                text: 'Choose this file'
            },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#file_url_banner').val(attachment.url);
            $('#file_preview').attr('href', attachment.url).text(attachment.url).show();
        });

        mediaUploader.open();
    });
});
