<?php

/**
 *
 * Layout: Media
 *
 * @author Michael W. Delaney
 * @since 1.0
 * 
 * A simple media block optional Call to Action button
 */

$layouts_array[] =
    array ( 'order' => '60', 
    'layout' => array (
        'key' => '5739d9a42c504',
        'name' => 'media',
        'label' => 'Media',
        'display' => 'block',
        'sub_fields' => array (
            array (
                'key' => 'field_5739d9f32c505',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_5739da082c506',
                'label' => 'Navigation Title',
                'name' => 'navigation_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_573b35ee4f53d',
                'label' => 'Media',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5739da1b2c505',
                'label' => 'Type of Media',
                'name' => 'type_of_media',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array (
                    'none' => 'None',
                    'image' => 'Image',
                    'video' => 'Video',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
            ),
            array (
                'key' => 'field_573b3550c57d8',
                'label' => 'Media Placeholder',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5739da1b2c505',
                            'operator' => '==',
                            'value' => 'none',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'message' => 'No media will be displayed.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array (
                'key' => 'field_573b3241fc83d',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5739da1b2c505',
                            'operator' => '==',
                            'value' => 'image',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'large',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_573b3272fc83e',
                'label' => 'Video',
                'name' => 'video',
                'type' => 'oembed',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5739da1b2c505',
                            'operator' => '==',
                            'value' => 'video',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'width' => '',
                'height' => '',
            ),
            array (
                'key' => 'field_573b36154f53f',
                'label' => 'Background',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_573b362a4f540',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'large',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_573b36444f541',
                'label' => 'Background Color',
                'name' => 'background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array (
                'key' => 'field_573b36004f53e',
                'label' => '',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 1,
            ),
            array (
                'key' => 'field_573b3576c57d9',
                'label' => 'Display Call to Action?',
                'name' => 'display_call_to_action',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_573b3593c57da',
                'label' => 'Text',
                'name' => 'call_to_action_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_573b35a5c57db',
                'label' => 'Link',
                'name' => 'call_to_action_link',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_573b35bbc57dc',
                'label' => 'Type',
                'name' => 'call_to_action_type',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'choices' => array (
                    'primary' => 'Primary',
                    'default' => 'Default',
                    'success' => 'Success',
                    'info' => 'Info',
                    'warning' => 'Warning',
                    'danger' => 'Danger',
                    'link' => 'Link Only',
                ),
                'default_value' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
                'disabled' => 0,
                'readonly' => 0,
            ),
        )
    )
);