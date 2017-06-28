<?php
/**
 * Template Name: Homepage
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

				<?php
					/* define field value variables */
					$intro_text = types_render_field("intro-text", array("output"=>"html"));
					$homepage_intro = types_render_field("homepage-intro", array("output"=>"html"));
					$subtitle_1 = types_render_field("subtitle-1", array("output"=>"html"));
					$about_deneemotion = types_render_field("about-deneemotion", array("output"=>"html"));
					$subtitle_2 = types_render_field("subtitle-2", array("output"=>"html"));
					$featured_images = types_render_field("featured", array("output"=>"html"));
					$latest_videos = types_render_field("latest-videos", array("output"=>"html"));
				?>

				<?php putRevSlider("homepage-fullscreen-video") ?>

				<div class="row body video">
					<div class="cell">
						<h1><?php print($intro_text); ?></h1>
						<div class="title-border"></div>
						<?php print($homepage_intro); ?>
						<?php print($latest_videos);?>
						<div>
							<a class="simple-button" href="wedding-videography-in-dubai">— More films —</a>
						</div>
					</div>
				</div>
				
				<div class="row black about">
					<div class="cell">
						<div class="content">
							<?php print($subtitle_1);?>
							<div class="title-border"></div>
							<div class="wpcf-field-about-deneemotion">
								<?php the_content(); ?>
							</div>
						</div>
						<div>
							<a class="simple-button" href="creative-wedding-dubai-photographers">— Read more —</a>
						</div>
					</div>
				</div>

				<div class="row body fetured">
					<div class="cell">
						<div class="content">
							<?php print($subtitle_2); ?>
							<div class="title-border"></div>
							<div class="homepage-fetured-images-block">
								<?php print($featured_images); ?>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
