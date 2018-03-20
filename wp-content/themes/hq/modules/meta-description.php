<?php


// Defino onde vou exibir este campo
$location = setLocation(array(
    'post_type' => 'post',
    'post_type' => 'page',
));


// THATS IT! ------------------------------------------------------------------
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_meta-tags',
        'title' => 'Meta description',
        'fields' => array (
            array (
                'key' => 'field_58daf08c01707',
                'label' => '',
                'name' => 'meta_description',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 156,
                'rows' => 2,
                'formatting' => 'none',
            ),
        ),

        'location' => $location,
        
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 1,
    ));
}
