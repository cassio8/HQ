<?php

// ATUALIZAÇÕES
define('DISALLOW_FILE_MODS', true);

// DATABASE
define('DB_HOST',         'localhost');
define('DB_NAME',         'db_hq');
define('DB_USER',         'root');
define('DB_PASSWORD',     '');
define('DB_TABLE_PREFIX', 'wp_vex_');

// DOMÍNIO & URL
define('PROTOCOL',        'http://');
define('DOMAIN_NAME',     'localhost');
define('PATH_TO_WP',      '/hq');





/*  ------------------------ CHAVES ÚNICAS E SALTS  --------------------- */

define('AUTH_KEY',         'put something here');
define('SECURE_AUTH_KEY',  'put something here');
define('LOGGED_IN_KEY',    'put something here');
define('NONCE_KEY',        'put something here');
define('AUTH_SALT',        'put something here');
define('SECURE_AUTH_SALT', 'put something here');
define('LOGGED_IN_SALT',   'put something here');
define('NONCE_SALT',       'put something here');





/*  ------------------------ OUTRAS CONSTANTES  --------------------- */

define('WP_SITEURL',                 PROTOCOL . DOMAIN_NAME . PATH_TO_WP);
define('WP_HOME',                    WP_SITEURL);
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS',          false );
define('FS_METHOD',                  'direct');
define('WPLANG',                     'pt_BR');
define('DB_CHARSET',                 'utf8');
define('DB_COLLATE',                 '');
define('WPCF7_AUTOP',                false);

// SSL
if (PROTOCOL === 'https://'){
    define( 'FORCE_SSL_LOGIN', true );
    define( 'FORCE_SSL_ADMIN', true );
}





/*  -------------------------- ISTO É TUDO, PODE PARAR DE EDITAR  --------------------- */
$table_prefix = DB_TABLE_PREFIX;
setlocale(LC_ALL, WPLANG);
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');





/*  -------------------------- WP_HEAD CLEAN UP  --------------------- */
add_filter('the_generator',      '__return_false');
add_filter('show_admin_bar',     '__return_false');

remove_action('wp_head',         'wlwmanifest_link');
remove_action('wp_head',         'rsd_link');
remove_action('wp_head',         'wp_shortlink_wp_head');
remove_action('wp_head',         'index_rel_link');
remove_action('wp_head',         'start_post_rel_link', 10, 0);
remove_action('wp_head',         'parent_post_rel_link', 10, 0);
remove_action('wp_head',         'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head',         'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head',         'feed_links', 2);
remove_action('wp_head',         'feed_links_extra', 3);
remove_action('wp_head',         'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );