<?php
/*
Plugin Name: Review My Post
Description: @TODO
Author: R. Mohamed Asfer
Version: 1.0.0
*/
if (!defined('RMP_PLUGIN_URI')) {
    define('RMP_PLUGIN_URI', plugin_dir_url(__FILE__));
}

if (!defined('RMP_PLUGIN_DIR_URI')) {
    define('RMP_PLUGIN_DIR_URI', plugin_dir_path(__FILE__));
}

class rmp
{
    public function __construct()
    {
        add_action('init', array($this, 'init'));
    }

    public function init()
    {
        require_once RMP_PLUGIN_DIR_URI . 'src/core/controller/class-base-controller.php';
        require_once RMP_PLUGIN_DIR_URI . 'src/core/controller/rmp-post-meta.php';
    }
}

new rmp();