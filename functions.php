<?php
// Linkage of Files
function my_theme_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
    wp_enqueue_style('join-style', get_template_directory_uri() . '/css/join.css');
    wp_enqueue_style('updates-style', get_template_directory_uri() . '/css/updates.css');
    wp_enqueue_style('alumni-style', get_template_directory_uri() . '/css/alumni.css');
    wp_enqueue_style('benefits-style', get_template_directory_uri() . '/css/benefits.css');

    // Enqueue JavaScript files from the CSS folder
    wp_enqueue_script('carousel-script', get_template_directory_uri() . '/javascript/carousel.js');
    wp_enqueue_script('feedback-form', get_template_directory_uri() . '/javascript/feedback-form.js', array('jquery'), null, true);
    wp_enqueue_script('join-forms', get_template_directory_uri() . '/javascript/join-forms.js', array('jquery'), null, true);

    // Localize scripts to pass AJAX URL to JavaScript
    wp_localize_script('feedback-form', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
    wp_localize_script('join-forms', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// Handle feedback form submission
function handle_feedback_form() {
    if (isset($_POST['name'], $_POST['email'], $_POST['linkedin'], $_POST['feedback'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $linkedin = sanitize_text_field($_POST['linkedin']);
        $feedback = sanitize_textarea_field($_POST['feedback']);

        if (!empty($name) && !empty($email) && !empty($linkedin) && !empty($feedback)) {
            echo 'Thank you for your feedback!';
        } else {
            echo 'Please fill in all fields.';
        }
    } else {
        echo 'Required fields are missing.';
    }

    wp_die(); // End AJAX request properly
}

add_action('wp_ajax_submit_feedback', 'handle_feedback_form');
add_action('wp_ajax_nopriv_submit_feedback', 'handle_feedback_form');

// Handle join form submission
function save_form_submission() {
    global $wpdb;

    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['university'], $_POST['linkedin'])) {
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $university = sanitize_text_field($_POST['university']);
        $linkedin = sanitize_text_field($_POST['linkedin']);

        $table_name = $wpdb->prefix . 'form_submissions';

        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'university' => $university,
            'linkedin' => $linkedin
        );

        $wpdb->insert($table_name, $data);

        if ($wpdb->last_error) {
            echo 'Error saving submission: ' . $wpdb->last_error;
        } else {
            echo 'Your Information Submitted Successfully. Thank You!';
        }
    } else {
        echo 'Required fields are missing.';
    }

    wp_die(); // End AJAX request
}

add_action('wp_ajax_save_form_submission', 'save_form_submission');
add_action('wp_ajax_nopriv_save_form_submission', 'save_form_submission');

// Menu registration
function register_my_menus() {
    register_nav_menus(
        array(
        'primary-menu' => 'Top Menu'
        )
    );
}
add_action('init', 'register_my_menus');

function my_theme_setup() {
    add_theme_support('page-templates');
}
add_action('after_setup_theme', 'my_theme_setup');

// Function to create the form submissions table
function create_form_submissions_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'form_submissions';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(255) NOT NULL,
        university VARCHAR(255) NOT NULL,
        linkedin VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_switch_theme', 'create_form_submissions_table');
add_action('admin_init', 'create_form_submissions_table');
?>
