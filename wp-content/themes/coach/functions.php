<?php

/**
 * Activates Theme Mode
 */
add_filter('ot_theme_mode', '__return_true');


/**
 * Loads OptionTree
 */
require( trailingslashit(get_template_directory()) . 'option-tree/ot-loader.php' );

/**
 * Loads Theme Options
 */
require( trailingslashit(get_template_directory()) . 'includes/theme-options.php' );
/**
 * Meta Boxes
 */
require( trailingslashit(get_template_directory()) . 'includes/meta-boxes.php' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
        array(
            'menu-1' => __('Primary', 'coach'),
            'footer' => __('Footer Menu', 'coach'),
            'social' => __('Social Links Menu', 'coach'),
        )
);

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
        'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
        )
);

/**
 * Add support for core custom logo.
 */
add_theme_support(
        'custom-logo', array(
    'height' => 190,
    'width' => 190,
    'flex-width' => false,
    'flex-height' => false,
        )
);

// Add theme support for selective refresh for widgets.
add_theme_support('customize-selective-refresh-widgets');

// Add support for Block Styles.
add_theme_support('wp-block-styles');

// Add support for full and wide align images.
add_theme_support('align-wide');

// Add support for editor styles.
add_theme_support('editor-styles');

// Enqueue editor styles.
add_editor_style('style-editor.css');

// Remove print script & stype
if (!is_admin()):

    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);  // Remove wp_oembed
    remove_action('wp_head', 'rest_output_link_wp_head', 10);   // Disable REST API link tag
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);   // Disable REST API link in HTTP headers

    remove_action('wp_head', 'print_emoji_detection_script', 7);    // Remove emoji script
    remove_action('wp_print_styles', 'print_emoji_styles');     // Remove emoji style
endif;

/*
 * Enqueue style & script
 */

function add_theme_style_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1.1, 'all');

    wp_enqueue_script('jquery', get_site_url() . '/wp-includes/js/jquery/jquery.js', array('jquery'), 1.12, true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('validator-js', get_template_directory_uri() . '/assets/js/validator.js', array('jquery'), 1.0, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'add_theme_style_scripts');


/*
 * Services Custom Post Type
 * Hook into the 'init' action so that the function
 */
add_action('init', 'services_post_type', 0);

function services_post_type() {

    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'edit_item' => 'Edit Service',
            'not_found' => 'Nothing Found',
            'not_found_in_trash' => 'Nothing found in the Trash',
            'parent_item_colon' => ''
        ),
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
        'rewrite' => true,
        'rewrite' => array('slug' => 'services'),
    ));
}


/*
 * Handle Contact form
 */

add_action('wp_ajax_nopriv_contact_form', 'contact_form');
add_action('wp_ajax_contact_form', 'contact_form');

function contact_form() {
    try {
        // Get form fields
        $user_name = filter_input(INPUT_POST, 'user_name');
        $user_email = filter_input(INPUT_POST, 'user_email');
        $user_message = filter_input(INPUT_POST, 'user_message');

        if (isset($user_name) && isset($user_email) && isset($user_message)) :

            $mail_to = 'uanju.upadhyay25@gmail.com';
            $subject = "Contact query from website Coach";
            $headers = "From: Coach <uanju.upadhyay25@gmail.com>" . "\r\n";
            $message = "<table>"
                    . "<tr><td>Name : </td>   <td>$user_name</td></tr>"
                    . "<tr><td>Email : </td>  <td>$user_email</td></tr>"
                    . "<tr><td>Message : </td><td>$user_message</td></tr>"
                    . "</table>";

            // If email has been process for sending, display a success message
            if (wp_mail($mail_to, $subject, $message, $headers)):
                $response = '<div class="">Your inquiry has been received thank you</div>';
            else:
                $response = '<div class="alert alert-danger">Unable to send email, please try again</div>';
            endif;
        else:
            $response = '<div class="alert alert-danger">Required fields are missing</div>';
        endif;
    } catch (\Exception $ex) {
        $response = '<div class="alert alert-danger">We are facing som technical issue, please try after some time: ' . $ex->getMessage() . '</div>';
    }

    echo $response;
    wp_die();
}

/*
 * Handle Newsletter subscription
 */

add_action('wp_ajax_nopriv_newsletter_subscription', 'newsletter_subscription');
add_action('wp_ajax_newsletter_subscription', 'newsletter_subscription');

function newsletter_subscription() {
    try {
        // Get form fields
        $user_email = filter_input(INPUT_POST, 'subscribe_email');
        $get_nonce = filter_input(INPUT_POST, '_wpnonce');

        // Security check
        if (!wp_verify_nonce($get_nonce, 'subscribeCoach@%52nonce')):
            die('Security check');
        endif;

        if (!empty($user_email)) :
            $mail_to = 'uanju.upadhyay25@gmail.com';
            $subject = "Newsletter subscription from website Coach";
            $headers = "From: Coach <uanju.upadhyay25@gmail.com>" . "\r\n";
            $message = "<table>"
                    . "<tr><td>Email : </td>  <td>$user_email</td></tr>"
                    . "</table>";

            // If email has been process for sending, display a success message
            if (wp_mail($mail_to, $subject, $message, $headers)):
                $response = '<div class="">You have been successfully subscribed to our newsletter</div>';
            else:
                $response = '<div class="alert-danger">Unable to subscribe you, please try again</div>';
            endif;
        else:
            $response = '<div class="alert-danger">Required field is missing</div>';
        endif;
    } catch (\Exception $ex) {
        $response = '<div class="alert-danger">We are facing som technical issue, please try after some time: ' . $ex->getMessage() . '</div>';
    }

    echo $response;
    wp_die();
}
