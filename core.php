<?php
require_once 'inc/SHT_Theme.php';

class WP_SyntaxHighlighter_Theme_Core
{

static function init()
{
    if (class_exists('SyntaxHighlighter')) {
        SHT_Theme::instance();
    } else {
        add_action('admin_notices', array(__CLASS__, 'notice'));
    }
}

    public function notice()
    {
        $notice = sprintf('SyntaxHighlighter Evolved Themes requires %sSyntaxHighlighter Evolved%s.', '<a href="https://wordpress.org/plugins/syntaxhighlighter/">', '</a>');
        echo '<div class="error"><p>' . $notice . '</p></div>';
    }
}