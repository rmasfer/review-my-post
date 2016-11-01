<?php


class rmp_post_meta extends rmp_base_controller
{
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'init_meta_boxes'));
    }

    public function include_styles()
    {
        // TODO: Implement include_styles() method.
    }

    public function include_script()
    {
        // TODO: Implement include_script() method.
    }

    public function init_meta_boxes()
    {
        add_meta_box('rmv-post-meta', 'Review My Post', array($this, 'rmv_post_meta_content'), null, 'side', 'high');
    }

    public function rmv_post_meta_content()
    {
        echo 'hello';
    }
}

new rmp_post_meta();