<?php

/**
 * PSR-4 Autoloader
 *
 *
 * @var $called_class string
 */
spl_autoload_register( function ( $called_class ) {

    $project_name = 'HEF';
    $prefix = "{$project_name}\\";

    $base_dir = __DIR__ . DIRECTORY_SEPARATOR . 'src\\';

    $str_len = strlen( $prefix );
    $class = substr( $called_class , $str_len );

    $class_file = str_replace( '\\' , '/' , "{$base_dir}{$class}.php" );

    if ( file_exists( $class_file ) ) {
        require_once $class_file;
    }


} );