jQuery(document).ready(function($) {
    $('#join-form').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            type: 'POST',
            url: my_ajax_obj.ajax_url, // Ensure this URL is correct
            data: $(this).serialize() + '&action=save_form_submission',
            success: function(response) {
                $('#flash-msg').html(response); // Display the server response
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error); // Log errors for debugging
                $('#flash-msg').html('There was an error submitting your form.');
            }
        });
    });
});
