<?php
/**
 * Template Name: About
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
					$header_image = types_render_field("header-image", array("raw"=>"true","separator"=>";"));
					$name_1 = types_render_field("name-1", array("output"=>"html"));
					$position_1 = types_render_field("position-1", array("output"=>"html"));
					$image_1 = types_render_field("image-1", array("output"=>"html"));
					$name_2 = types_render_field("name-2", array("output"=>"html"));
					$position_2 = types_render_field("position-2", array("output"=>"html"));
					$image_2 = types_render_field("image-2", array("output"=>"html"));
					$team_photo = types_render_field("team-photo", array("output"=>"html"));
					$about_footer = types_render_field("about-footer", array("output"=>"html"));
				?>

				<div class="row body page-top-section">
					<div class="cell">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">— ', ' —</h1>' ); ?>
							<div class="title-border"></div>
						</header><!-- .entry-header -->
					</div>
				</div>

				<div class="row row--about" style="background-image: url(<?php print($header_image); ?>);"></div>

				<div class="row">
					<div class="cell">
						<div class="entry-content">
							<div class="title-border"></div>
							<div class="about-text"><?php the_content(); ?></div>
							<div class="team-title">— Our team —</div>
							<div class="team-border"></div>
							<div class="team-photo-container"><?php echo do_shortcode("[wpv-view name='Team members view']"); ?></div>
							<div class="about-footer"><?php print($about_footer); ?></div>
						</div><!-- .entry-content -->
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
