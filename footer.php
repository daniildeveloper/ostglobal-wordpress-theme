<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package daniildeveloper-ostglobal
 */

?>	
</div>		
</div>
		</main>
	</div><!-- #content -->

	
<div class="site-back-top">
    <i aria-hidden="true" class="fa fa-arrow-circle-up fa-2x">
    </i>
</div>
<footer id="site-footer-wrapper">
    <div class="top-footer-sidebars">
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="top-footer-sidebar-left">
                    <div>
                        <div class="textwidget custom-html-widget">
                            <div class="ost_footer_contact_info">
                                <p>
                                    <span>
                                        <strong>
                                            OST, Inc.
                                        </strong>
                                    </span>
                                    <span>
                                        <?php echo get_theme_mod('address'); ?>
                                    </span>
                                    <span class="e_phone_number">
                                        <a href="tel:<?php echo get_theme_mod('phone'); ?>">
                                            <i aria-hidden="true" class="fa fa-phone">
                                            </i>
                                            <?php echo get_theme_mod('phone'); ?>
                                        </a>
                                    </span>
                                    <span>
                                        <a aria-hidden="true" href="<?php echo get_theme_mod('linkedin') ?>" target="_blank">
                                            <i aria-hidden="true" class="fa fa-linkedin">
                                            </i>
                                            <span style="display: none;">
                                                Optimal Solutions and Technologies LinkedIn
                                            </span>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top footer sidebar left end -->
                <div class="col-md-6" id="top-footer-sidebar-right">
                    <div>
                        <div class="textwidget custom-html-widget">
                            <div class="ost_footer_logos">
                                <img alt="508 Compliant" height="36" src="<?php echo get_template_directory_uri() . '/img/' ?>508-compliant-w.png" width="45"/>
                                <img alt="CMMIDEV 5" height="31" src="<?php echo get_template_directory_uri() . '/img/' ?>cmmi-w.png" width="192"/>
                                <img alt="ISO-9001" height="24" src="<?php echo get_template_directory_uri() . '/img/' ?>ISO-9001-w.png" width="41"/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top footer sidebar right end -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- top footer sidebars end -->
    <!-- top footer sidebars end -->
    <div class="bottom-footer-sidebars">
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="bottom-footer-left-sidebar">
                    <div>
                        <div class="textwidget">
                            <p>
                                © <?php date('Y') ?> <?php echo get_bloginfo( 'name' ) ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer left sidebar end -->
                <div class="col-md-6" id="bottom-footer-right-sidebar">
                    <div>
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'footer-menu',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu-footer-menu-container',
                            'container_id'    => 'menu-footer-menu-container',
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
                <!-- bottom footer right sidebar end -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- bottom footer end -->
    <!-- bottom footer sidebars end -->
</footer>
<!-- #site-wrapper-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
