<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Deneemotion UAE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row body page-top-section">
					<div class="cell">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">— ', ' —</h1>' ); ?>
							<div class="title-border"></div>
						</header><!-- .entry-header -->
					</div>
				</div>

				<div id="googleMap" style="width:100%; height:400px;"></div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
