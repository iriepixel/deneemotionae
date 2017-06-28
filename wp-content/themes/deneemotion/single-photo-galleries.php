<?php
/**
 * Single photo gallery page
 *
 * @package Deneemotion UAE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row body page-top-section">
					<div class="cell">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">— ', ' —</h1>' ); ?>	
							<div class="title-border"></div>
						</header><!-- .entry-header -->
					</div>
				</div>
				
				<div class="row light-grey">
					<div class="cell">
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'deneemotion' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<div>
							<a class="simple-button" href="/dubai-wedding-photography">— Other stills —</a>
						</div>

					</div>
				</div>
				
			</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
