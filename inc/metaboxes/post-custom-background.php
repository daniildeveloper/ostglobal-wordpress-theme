<?php

add_action('add_meta_boxex', 'add_custom_background_meta_box');

function add_custom_background_meta_box()
{
    add_meta_box('post-custom-background', __('Background'), 'post_custom_background', $screen = array('post', 'page'));
}

function post_custom_background()
{
    $screens = $meta['args'];

    // Используем nonce для верификации
    wp_nonce_field(plugin_basename(__FILE__), 'myplugin_noncename');

    // Поля формы для введения данных
    echo '<label for="myplugin_new_field">' . __("Description for this field", 'myplugin_textdomain') . '</label> ';
    echo '<input type="text" id= "myplugin_new_field" name="myplugin_new_field" value="whatever" size="25" />';
}
