<?php
/**
 * daniildeveloper-ostglobal Theme Customizer
 *
 * @package daniildeveloper-ostglobal
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function daniildeveloper_ostglobal_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    $wp_customize->add_section(
        'contacts',
        array(
            'title'       => 'Контакты',
            'description' => 'Это секция настроек контактов',
            'priority'    => 35,
        )
    );

    $wp_customize->add_setting(
        'phone',
        array(
            'sanitize_callback' => 'example_sanitize_integer',
        )
    );

    $wp_customize->add_control('phone', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'contacts',
        'label'       => 'Телефон',
        'description' => '',
    ));

    $wp_customize->add_setting(
        'address',
        array(
            'sanitize_callback' => 'example_sanitize_integer',
        )
    );

    $wp_customize->add_control('address', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'contacts',
        'label'       => 'Адрес',
        'description' => '',
    ));

    $wp_customize->add_setting(
        'linkedin',
        array(
            'sanitize_callback' => 'example_sanitize_integer',
        )
    );

    $wp_customize->add_control('linkedin', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'contacts',
        'label'       => 'linkedin',
        'description' => '',
    ));

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'daniildeveloper_ostglobal_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'daniildeveloper_ostglobal_customize_partial_blogdescription',
        ));
    }
}
add_action('customize_register', 'daniildeveloper_ostglobal_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function daniildeveloper_ostglobal_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function daniildeveloper_ostglobal_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function daniildeveloper_ostglobal_customize_preview_js()
{
    wp_enqueue_script('daniildeveloper-ostglobal-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'daniildeveloper_ostglobal_customize_preview_js');
