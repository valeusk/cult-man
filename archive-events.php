<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cult-man
 */

get_header(); ?>

	<div id="primary" class="content-area">
	    <div class="container">
	    <div class="col-lg-8 col-md-8">
	    <div class="row">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="page-title">Афиша</div>

				<?php
					/*the_archive_title( '<h1 class="page-title">', '</h1>' );*/
					/*the_archive_description( '<div class="archive-description">', '</div>' )*/;
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-events', get_post_format() );

			endwhile;

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-events', 'none' );

		endif; ?>

		</main><!-- #main -->
		 </div><!-- row -->
		</div> <!-- col-lg-8 col-md-8 -->
		<?php
            //get_sidebar();
            ?>
       <div class="col-lg-4 col-md-4">
                  <div class="row">
                   <?php if ( is_active_sidebar( 'events-page' ) ) : ?>
                    <div class="sidebar widget-area">
                        <?php dynamic_sidebar( 'events-page' ); ?>
                    </div>
                <?php endif; ?>
                </div> <!-- row -->
            </div> <!-- col-lg-4 col-md-4 -->
		</div> <!-- container -->
		<div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <!--<div class="pagination-line">
                        <?php  the_posts_pagination() /*my_pagenavi()*/; ?>
                    </div>-->
                    <!-- pagination-line -->
                </div>
                <!-- row -->
            </div>
            <!-- col-lg-12 -->
        </div>
        <!-- container -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
