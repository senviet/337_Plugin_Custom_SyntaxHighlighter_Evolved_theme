<?php
/*
Plugin Name: WP SyntaxHighlighter Evolved theme
Version: 5.1.0
Description: plugin hỗ trợ flance
Author: Vô Minh
Plugin URI: http://muatocroi.com
*/

include dirname( __FILE__ ) . '/scb/load.php';

function _wp_sh_theme_init() {
	require_once dirname( __FILE__ ) . '/core.php';
    WP_SyntaxHighlighter_Theme_Core::init();
}
scb_init( '_wp_sh_theme_init' );

