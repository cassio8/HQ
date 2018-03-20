<?php


// Defino onde vou exibir este campo
$location = setLocation(array(
    'page' => 20,
));


// THATS IT! ------------------------------------------------------------------
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_contato',
        'title' => 'Contato',
        'fields' => array (
            array (
                'key' => 'field_598239cf06fc6',
                'label' => 'Telefones',
                'name' => 'telefones',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5936c57d92232',
                        'label' => 'Telefone',
                        'name' => 'telefone',
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
            array (
                'key' => 'field_598239dc06fc7',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_598239cf06fc9',
                'label' => 'Redes sociais',
                'name' => 'redes_sociais',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_5936c57d92230',
                        'label' => 'Nome',
                        'name' => 'nome',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5936c57d92231',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'text',
                        'required' => 1,
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
            array (
                'key' => 'field_598239bf06fc8',
                'label' => 'Endereço',
                'name' => 'endereco',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_59836ba024fe5',
                'label' => 'mapa',
                'name' => 'mapa',
                'type' => 'google_map',
                'center_lat' => '',
                'center_lng' => '',
                'zoom' => '',
                'height' => '',
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

