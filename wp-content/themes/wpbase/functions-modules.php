<?php

// Carrego os modulo ----------------------------------------------------------
_require_all('modules', 2);



/**
 * Helper function that scan a path, recursively including all PHP files
 * @param  string  $dir       Path that will be scan
 * @param  integer $max_depth Maximum sub folder that will be scan
 * @param  integer $depth     Current depth
 * @return null
 */
function _require_all($dir, $max_depth = 1, $depth = 1) {
    if ($depth > $max_depth) {
        return;
    }

    // require all php files
    $theme_dir = get_template_directory();
    $scan      = glob("$theme_dir/$dir/*");

    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            require_once $path;
        } elseif (is_dir($path)) {
            _require_all($path, $max_depth, $depth + 1);
        }
    }
}


function setLocation($arr)
{
    $location = array();
    foreach ($arr as $param => $value) {
        $location[][] = array (
            'param'    => $param,
            'operator' => '==',
            'value'    => $value,
            'order_no' => 0,
            'group_no' => 0,
        );
    }


    return $location;
};