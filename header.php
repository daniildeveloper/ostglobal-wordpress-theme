<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package daniildeveloper-ostglobal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="site-header-wrapper">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="header-sidebar">
                    <div>
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'header-top-line-menu',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu-secondary-menu-container',
                            'container_id'    => 'menu-secondary-menu-container',
                            'menu_class'      => 'menu',
                            'menu_id'         => 'menu-footer-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => new Top_Header_Manu_Walker,
                        ) ); ?>
                        
                    </div>
                </div>
                <!-- header sidebar end -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .header-top -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 col-md-2">
                <div class="header-logo">
                    <a aria-hidden="true" href="<?php echo get_site_url() ?>">
                        <span style="display: none;">
                            <?php echo get_bloginfo('name'); ?>
                        </span>
                        <?php the_custom_logo(); ?>
                    </a>
                </div>
            </div>
            <div class="col-4 col-md-10">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'header-main-menu',
                        'menu'            => '',
                        'container'       => 'nav',
                        'container_class' => 'main-menu-wrapper',
                        'container_id'    => '',
                        'menu_class'      => 'main-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => new Top_Header_Manu_Walker,
                    ) );
                 ?>
                <!-- Main menu wrapper -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</header>
<!-- #site-header-wrapper -->
<!-- Site Page Header -->
<div class="site-page-header o-has-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( ) )  ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    <?php the_title() ?>
                    
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="page-wrapper">

    <div id="content">

        <main class="site-main" id="main">
            
            <div class="container">