<?php
/**
 * @package Deneemotion UAE
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="row light-grey">
			<div class="cell">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'deneemotion' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php deneemotion_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
