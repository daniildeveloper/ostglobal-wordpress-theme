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
                            'menu_id'         => 'menu-secondary-menu',
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
                <nav class="main-menu-wrapper">
                    <ul class="main-menu" id="menu-main-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-158" id="menu-item-158">
                            <a href="http://www.ostglobal.com/who-we-are/">
                                Who We Are
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159" id="menu-item-159">
                                    <a href="http://www.ostglobal.com/who-we-are/mission-vision-values-culture/">
                                        Mission, Vision, Values, & Culture
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286" id="menu-item-286">
                                    <a href="http://www.ostglobal.com/who-we-are/our-leadership-team/">
                                        Our Leadership Team
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-465" id="menu-item-465">
                                    <a href="http://www.ostglobal.com/who-we-are#certifications">
                                        Certifications
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287" id="menu-item-287">
                                    <a href="http://www.ostglobal.com/contact-us/">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-160" id="menu-item-160">
                            <a href="http://www.ostglobal.com/what-we-do/">
                                What We Do
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265" id="menu-item-265">
                                    <a href="http://www.ostglobal.com/what-we-do/management-consulting-strategic-innovation/">
                                        Management Consulting & Strategic Innovation
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263" id="menu-item-263">
                                    <a href="http://www.ostglobal.com/what-we-do/information-technology-c4isr-cyber/">
                                        Information Technology, C4ISR, Cyber
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266" id="menu-item-266">
                                    <a href="http://www.ostglobal.com/what-we-do/research-development-and-engineering/">
                                        Research & Development and Engineering
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268" id="menu-item-268">
                                    <a href="http://www.ostglobal.com/what-we-do/smart-initiatives-public-private-partnerships-p3/">
                                        SMART Initiatives & P3
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-161" id="menu-item-161">
                                    <a href="http://www.ostglobal.com/what-we-do/managed-services/">
                                        Managed Services
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264" id="menu-item-264">
                                    <a href="http://www.ostglobal.com/what-we-do/logistics/">
                                        Logistics
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1241" id="menu-item-1241">
                                    <a href="http://www.ostglobal.com/what-we-do/specialized-capabilities/">
                                        Specialized Capabilities
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1894" id="menu-item-1894">
                                    <a href="http://www.ostglobal.com/what-we-do/vpat/">
                                        VPAT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-157" id="menu-item-157">
                            <a href="http://www.ostglobal.com/who-we-serve/">
                                Who We Serve
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-219 current_page_item menu-item-281" id="menu-item-281">
                                    <a href="index.html">
                                        Contract Vehicles
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282" id="menu-item-282">
                                    <a href="http://www.ostglobal.com/who-we-serve/customers/">
                                        Customers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-156" id="menu-item-156">
                            <a href="http://www.ostglobal.com/what-weve-done/">
                                What We’ve Done
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277" id="menu-item-277">
                                    <a href="http://www.ostglobal.com/what-weve-done/project-profiles/">
                                        Project Profiles
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275" id="menu-item-275">
                                    <a href="http://www.ostglobal.com/what-weve-done/blog/">
                                        Blog
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276" id="menu-item-276">
                                    <a href="http://www.ostglobal.com/what-weve-done/news/">
                                        News
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279" id="menu-item-279">
                                    <a href="http://www.ostglobal.com/what-weve-done/white-papers/">
                                        White Papers
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-hide-desktop menu-item menu-item-type-post_type menu-item-object-page menu-item-1867" id="menu-item-1867">
                            <a href="http://www.ostglobal.com/contact-us/">
                                Contact Us
                            </a>
                        </li>
                        <li class="menu-hide-desktop menu-item menu-item-type-post_type menu-item-object-page menu-item-1868" id="menu-item-1868">
                            <a href="http://www.ostglobal.com/careers/">
                                Careers
                            </a>
                        </li>
                    </ul>
                    <!-- Search -->
                    <div class="site-search-icon">
                        <i aria-hidden="true" class="fa fa-search">
                        </i>
                    </div>
                    <!-- Mobile Menu Hamburger -->
                    <div class="site-mobile-menu-hamburger">
                        <i aria-hidden="true" class="fa fa-bars">
                        </i>
                    </div>
                </nav>
                <!-- Main menu wrapper -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</header>
<!-- #site-header-wrapper -->
<!-- Site Page Header -->
<div class="site-page-header o-has-img" style="background-image: url(../../wp-content/uploads/2017/09/H-Contract-Vehicles.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Contract Vehicles
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="page-wrapper">

    <div id="content">

        <main class="site-main" id="main">
            
            <div class="container">