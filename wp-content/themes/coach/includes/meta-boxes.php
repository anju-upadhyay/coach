<?php
/*
 * Custom metaboxes
 * Initialize the meta boxes. 
 */

add_action('admin_init', 'custom_meta_boxes');

function custom_meta_boxes() {

    $page_hero_unit = array(
        'id' => 'page_hero_unit',
        'title' => 'Page Hero Unit',
        'desc' => '',
        'pages' => array('page'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'id' => 'hero_title',
                'label' => 'Header Title',
                'desc' => '',
                'std' => '',
                'type' => 'textarea',
                'rows' => '2',
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'hero_background',
                'label' => 'Background',
                'desc' => '',
                'std' => '',
                'type' => 'background',
                'class' => '',
                'choices' => array()
            )
        )
    );

    $services_field = array(
        'id' => 'services_other_fields',
        'title' => 'Services Custom fields',
        'desc' => '',
        'pages' => array('services'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'id' => 'sub_title',
                'label' => 'header Subtitle',
                'desc' => '',
                'std' => '',
                'type' => 'text',
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'other_option_title_1',
                'label' => ' Process Title',
                'desc' => '',
                'std' => '',
                'type' => 'text',
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'other_option_description_1',
                'label' => 'Process Description',
                'desc' => '',
                'std' => '',
                'type' => 'textarea',
                'rows' => 4,
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'other_option_title_2',
                'label' => 'Let us help you Title',
                'desc' => '',
                'std' => '',
                'type' => 'text',
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'other_option_description_2',
                'label' => 'Let us help you Description',
                'desc' => '',
                'std' => '',
                'type' => 'textarea',
                'rows' => 4,
                'class' => '',
                'choices' => array()
            )
        )
    );

    $contact_us_meta_box = array(
        'id' => 'contact_us_location_fields',
        'title' => 'Contact Us Location Fields',
        'desc' => '',
        'pages' => array('page'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'id' => 'location_heading',
                'label' => 'Location Heading',
                'desc' => '',
                'std' => '',
                'type' => 'text',
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'location_description',
                'label' => 'Location Description',
                'desc' => '',
                'std' => '',
                'type' => 'textarea',
                'rows' => 4,
                'class' => '',
                'choices' => array()
            ),
            array(
                'id' => 'location_map',
                'label' => 'Location Map',
                'desc' => '',
                'std' => '',
                'type' => 'textarea',
                'rows' => 4,
                'class' => '',
                'choices' => array()
            )
        )
    );

    ot_register_meta_box($page_hero_unit);
    ot_register_meta_box($services_field);
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

    if ($template_file == 'page-contact.php') {
        ot_register_meta_box($contact_us_meta_box);
    }
}
