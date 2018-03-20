<?php


// Defino onde vou exibir este campo
$location = setLocation(array(
    'page' => 2,
));


// THATS IT! ------------------------------------------------------------------
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_home-banners',
        'title' => 'Banners',
        'fields' => array (
            array (
                'key' => 'field_58db02b6362e7',
                'label' => '',
                'name' => 'banners',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_58db02d6362e8',
                        'label' => 'Imagem',
                        'name' => 'imagem',
                        'type' => 'image',
                        'required' => 1,
                        'column_width' => '',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'uploadedTo',
                    ),
                    array (
                        'key' => 'field_58db02f0362e9',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => 'http://',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Adicionar',
            ),
        ),

        'location' => $location,

        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));
}
