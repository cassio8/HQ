<?php

/***********************************************************************************************************************
*
* $LABELS ARRAY
*
* 'name', 'singular_name', 'add_new', 'add_new_item', 'edit_item', 'new_item', 'view_item', 'search_items',
* 'not_found', 'not_found_in_trash', 'parent_item_colon', 'menu_name', 'all_items'
*
***********************************************************************************************************************/

/***********************************************************************************************************************
*
* $ARGS ARRAY
*
* 'labels'               -> Array             -> se vazio, usa o padrão do Wordpress
* 'public'               -> Boolean           -> false
* 'exclude_from_search'  -> Boolean           -> valor oposto do argumento 'public'
* 'publicly_queryable'   -> Boolean           -> valor do argumento 'public'
* 'show_ui'              -> Boolean           -> valor do argumento 'public'
* 'show_in_admin_bar'    -> Boolean           -> valor do argumeneto 'show_in_menu'
* 'menu_position'        -> Integer           -> null
* 'menu_icon'            -> String            -> null
* 'hierarchical'         -> Boolean           -> false
* 'supports'             -> Array             -> title e editor
* 'has_archive'          -> Boolean ou string -> false
* 'rewrite'              -> Boolean ou array  -> true
* 'taxonomies'           -> Array ('category', 'post_tag')
*
***********************************************************************************************************************/

/***********************************************************************************************************************
*
* $ARGS - SUPORTS ARRAY
*
* 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments',
* 'revisions', 'page-attributes', 'post-formats'
*
***********************************************************************************************************************/

// *********************************************************************************************************************
// Custom post type - Produtos
// *********************************************************************************************************************
// add_action( 'init', 'register_tax_produtos', 0 );

// function register_tax_produtos() {
//     register_taxonomy(
//         'cat_produtos',
//         'produtos',
//         array(
//             'labels' => array(
//                 'name'          => 'Categorias',
//                 'add_new_item'  => 'Adicionar Categoria'
//             ),
//             'show_ui'           => true,
//             'show_tagcloud'     => false,
//             'hierarchical'      => true,
//             'show_admin_column' => true,
//             'query_var'         => false,
//             'rewrite'           => array( 'slug' => 'categorias' )
//         )
//     );
// }

add_action( 'init', 'register_cpt_hqs' );

function register_cpt_hqs() {

    $labels = array(
        'name'                  => _x( 'HQs',                 'hqs' ),
        'singular_name'         => _x( 'HQ',                  'hqs' ),
        'add_new'               => _x( 'Adicionar hq',        'hqs' ),
        'add_new_item'          => _x( 'Adicionar nova hq',   'hqs' ),
        'menu_name'             => _x( 'HQs',                 'hqs' ),
    );

    $args = array(
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'public'                => true,
        'show_ui'               => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'hqs'),
		   'taxonomies'            => array('cat_hqs')
    );

    register_post_type( 'hqs', $args );
}

