<?php
/**
* Plugin Name: Underconstruction - Vedbew404
* Plugin URI: http://vedbew404.com
* Description: Este plugin coloca el sitio en modo en construcciòn o mantenimiento.
* Version: 1.0.0
* Author: benfran21
* Author URI: https://github.com/benfran21
* Requires at least: 4.0
* Tested up to: 5.7
*
* Text Domain: Underconstruction-vdbw404
* Domain path: /languages/
*/
defined( 'ABSPATH' ) or die( '¡sin trampas!' );

add_action('template_redirect', 'set_maintenance_template');

function set_maintenance_template() {
    $file =  plugin_dir_url( __FILE__ ).'/wp-content/plugins/um_vdbw404/maintenance.php';
    if( ini_get('allow_url_fopen') ) {
        if( !current_user_can('administrator') ){
            require $file;
            exit;
        }
    } else {
        die('
            Allow_url_fopen is disable. file_get_contents should work well <br>
            Please edit php.ini and <br>
            allow_url_fopen = 1 //0 for Off and 1 for On Flag <br>
            allow_url_include = 1 //0 for Off and 1 for On Flag
        ');

        curl_get_file_contents($file);
    }
}

function curl_get_file_contents($URL)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $URL);
    $contents = curl_exec($c);
    curl_close($c);

    if ($contents) return $contents;
    else return FALSE;
}