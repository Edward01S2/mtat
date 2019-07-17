<?php

namespace App;

class Ajax
{
    public function __construct()
    {
        add_action('wp_ajax_get_modal', [$this, 'myMethod']);
        add_action('wp_ajax_nopriv_get_modal', [$this, 'myMethod']);
    }

    public function myMethod()
    {
      $popup_type = "POPUP";
        echo 'AJAX response here';
        wp_die();
    }
}

new Ajax();