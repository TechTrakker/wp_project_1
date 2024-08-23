<?php
/* Template Name: Feedback Form */
get_header();
?>
 <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $linkedin = isset($_POST['linkedin']) ? sanitize_text_field($_POST['linkedin']) : '';
    $feedback = isset($_POST['feedback']) ? sanitize_textarea_field($_POST['feedback']) : '';

    // Validate input
    if (!empty($name) && !empty($email) && !empty($linkedin) && !empty($feedback)) {
        // Process the form (e.g., send an email or save to the database)
        echo 'Thank you for your feedback!';
    } else {
        echo 'Please fill in all fields.';
    }
    exit; // Ensure no additional content is sent
}
?>

<?php get_footer();?>