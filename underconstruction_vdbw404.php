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
define( 'PLUGIN_DIR', dirname(__FILE__).'/' );  

function set_maintenance_template() {
    if( !current_user_can('administrator') ){
        $file = 'maintenance.php';
        require_once $file;
        exit;
    }

}
