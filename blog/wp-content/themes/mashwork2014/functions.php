<?php
/**
 * @package Mashwork
 * @subpackage Mashwork
 */

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div id="sidebarItem">',
        'after_widget' => '</div><div id="sidebarDivBox"></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
		
 ?>
