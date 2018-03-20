<?php

// Includes -------------------------------------------------------------------
include_once "functions-modules.php";
include_once "functions-cpt.php";


// Limita os caracteres do the_excerpt() --------------------------------------
function excerpt($texto, $limite, $quebra = true) {
    $texto   = strip_tags($texto);
    $tamanho = strlen($texto);
    if($tamanho <= $limite) :
        $novo_texto = $texto;
    else :
        if($quebra == true) :
            $novo_texto = trim(substr($texto, 0, $limite))."...";
        else :
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " ");
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."...";
        endif;
    endif;
    return $novo_texto;
}



// Funcao que checa a se o link da pagina esta ativo --------------------------
function is_active($pag) {
    $slug = get_page_class();

    if ( is_array($pag) ) :

        foreach ($pag as $p) :

            if ( $slug == $p ) return "ativo";

        endforeach;

    else :

        if ( $slug == $pag ) return "ativo";

    endif;

}



// Funcao para retornar slug ou tipo de post ----------------------------------
function get_page_class()
{

    global $wp_query;
    $query = $wp_query->query;
    $slug  = get_post( $post )->post_name;

    if (is_singular('post')):
        $return = 'single';
    else :
        if ( ! empty( $query['post_type'] ) ) :
            $return = $query['post_type'];
        else:
            $return = $slug;
        endif;
    endif;

    return $return;

}
