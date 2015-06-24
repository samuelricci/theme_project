jQuery( document ).ready( function($) {
    var custom_uploader;
    
    $('.upload_image_button').click(function(e) {
        
        e.preventDefault();
        
        var input_id = $(this).attr('upload-id');
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#' + input_id).val(attachment.url);
            $('#' + input_id + '_id').val(attachment.id);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
    
    $('.reset').on( 'click', function() {
        
        var id = $(this).attr( 'reset-id' );
        $( '#' + id + ', #' + id + '_id' ).val('');
        
    });
    
    $( '#admin_base_theme_submit' ).on( 'click', function(e) {
        e.preventDefault();
        var data = { action: 'admin_base_theme_handler'};
        $( '.admin_input, input[type="hidden"], .admin_layout' ).each( function() {
            var value = $( this ).val();
            var name = $( this ).attr( 'name' );
            data[ name ] = value;
        });
        $.post( ajaxurl, data, function(response){
            $('#response').html( response );
        });
    }); 
    
    
});


