<?php

// Defino onde vou exibir este campo
$location = setLocation(array(
    'post_type' => 'post',
    'page' => 2,
));


// THATS IT! ------------------------------------------------------------------
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_galeria-de-fotos',
        'title' => 'Galeria de fotos',
        'fields' => array (
            array (
                'key' => 'field_5936c57392230',
                'label' => 'Fotos',
                'name' => 'fotos',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5936c57d92231',
                        'label' => 'Foto',
                        'name' => 'foto',
                        'type' => 'image',
                        'required' => 1,
                        'column_width' => '',
                        'save_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'uploadedTo',
                    ),
                    array (
                        'key' => 'field_5936c57d92232',
                        'label' => 'Legenda',
                        'name' => 'legenda',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
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
            ),
        ),
        'menu_order' => 5,
    ));
}
