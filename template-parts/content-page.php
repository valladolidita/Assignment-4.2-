<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pressedsqueezed
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	<header class="entry-header">
		<?php 

			the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header> .entry-header -->

	<div class="entry-content">
		<?php
			
			the_post_thumbnail();

			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			the_field( 'job_title' );

			/*echo '<h2 class="job_title">' . get_field( 'job_title' ) . '</h2>'; */

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pressedsqueezed' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'pressedsqueezed' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
