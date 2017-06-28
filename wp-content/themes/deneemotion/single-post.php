<?php
/**
 * Single video page
 *
 * @package Deneemotion UAE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row white page-top-section">
					<div class="cell">
						<header class="entry-header">
							<h1>— Blog —</h1>
							<div class="title-border"></div>
						</header><!-- .entry-header -->
					</div>
				</div>
				
				<div class="row light-grey">
					<div class="cell page-content-cell">
						<div class="entry-content">
							<div class="post-date">
								<?php the_time('F j, Y') ?> 
							</div>						
							<?php the_title( '<div class="blog-title">', '</div>' ); ?>	
							<div class="title-border"></div>
							<?php the_content(); ?>							

							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'deneemotion' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<div>
							<a class="simple-button" href="blog">— Other posts —</a>
						</div>

					</div>
				</div>
				
			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
