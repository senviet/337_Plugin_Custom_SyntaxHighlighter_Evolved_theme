<?php
/*
Plugin Name: WP SyntaxHighlighter Evolved theme
Version: 1.0.0
Description: Custom theme for SyntaxHighlighter plugin
Author: Vô Minh
Plugin URI: http://laptrinh.senviet.org
*/

include dirname( __FILE__ ) . '/scb/load.php';

function _wp_sh_theme_init() {
	require_once dirname( __FILE__ ) . '/core.php';
    WP_SyntaxHighlighter_Theme_Core::init();
}
scb_init( '_wp_sh_theme_init' );

