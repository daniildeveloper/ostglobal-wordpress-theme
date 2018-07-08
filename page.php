<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daniildeveloper-ostglobal
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="wrapper" id="page-wrapper">
    <div id="content">
        <main class="site-main" id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article class="post-219 page type-page status-publish hentry" id="post-219">
                            <div class="entry-content">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1512020393255">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>
                                                                Army (IEW&S) Better Buying Support Services (B2S2)
                                                            </li>
                                                            <li>
                                                                Commonwealth of Pennsylvania IT Staff Augmentation
                                                            </li>
                                                            <li>
                                                                DHS EAGLE II FC1 (Innovative Solutions Joint Venture)
                                                            </li>
                                                            <li>
                                                                FAA eFAST
                                                            </li>
                                                            <li>
                                                                <a href="http://www.ostglobal.com/who-we-serve/contract-vehicles/gsaschedule70/">
                                                                    GSA IT Schedule 70
                                                                </a>
                                                            </li>
                                                            <li>
                                                                Commonwealth of Pennsylvania Master ITQ
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul>
                                                            <li>
                                                                IRS TIPSS-4
                                                            </li>
                                                            <li>
                                                                Montgomery County CATS II
                                                            </li>
                                                            <li>
                                                                Navy Seaport- e
                                                            </li>
                                                            <li>
                                                                <a href="http://www.ostglobal.com/who-we-serve/contract-vehicles/cio-sp3/">
                                                                    NIH CIO-SP3 (OTSB)
                                                                </a>
                                                            </li>
                                                            <li>
                                                                State of Maryland CATS Plus
                                                            </li>
                                                            <li>
                                                                <a href="http://www.ostglobal.com/who-we-serve/contract-vehicles/gsa-pss/">
                                                                    GSA Professional Services Schedule (PSS)
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                    </div>
                    <!-- .col -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </main>
        <!-- #main -->
    </div>
    <!-- #content -->
</div>
<!-- #page-wrapper -->

<?php
get_sidebar();
get_footer();
