<?php
/**
 * Template Name: Browser update
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Deneemotion UAE
 */

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row white page-top-section">
					<div class="cell">
						<?php get_template_part( 'content', 'page' ); ?>
					</div>
				</div>

				<div class="row light-grey films">
					<div class="cell">
						<?php
							$latest_videos = types_render_field("latest-videos", array("output"=>"html"));
							print($latest_videos);
						?>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
