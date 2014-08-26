<?php

/**
 * Project : 337_Plugin_Custom_SyntaxHighlighter_Evolved_theme
 * User: thuytien
 * Date: 8/26/2014
 * Time: 8:23 AM
 */

class SHT_Theme
{
    private $themes;
    private static $instance;

    public static function instance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
        $this->themes = array(
            'senviet'  => array('name' => 'Sen Việt', 'slug'=>'senviet', 'filename'=>'shThemeSenViet.css')
        );
        add_action( 'wp_enqueue_scripts', array( $this, 'sht_syntaxhighlighter_register_theme_styles' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'sht_syntaxhighlighter_register_theme_styles' ) );
        add_filter('syntaxhighlighter_themes', array($this, 'sht_syntaxhighlighter_add_themes'), 10, 1);
    }

    public function sht_syntaxhighlighter_add_themes($themes)
    {
        foreach ($this->themes as $id => $theme) {
            $themes[$theme['slug']] = $theme['name'];
        }

        return $themes;
    }

    public function sht_syntaxhighlighter_register_theme_styles()
    {
        foreach ($this->themes as $slug => $theme) {
            wp_register_style( 'syntaxhighlighter-theme-' . $theme["slug"], plugins_url( 'themes/' . $theme["filename"], dirname(__FILE__) ), array( 'syntaxhighlighter-core' ), '20140330', 'all' );
        }}
} 