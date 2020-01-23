<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My-Theme
 */


?>


<div class="gallery" style="
    margin-left:150px;
    
">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	
		<?php
	
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta" >
				<?php
				my_theme_posted_on();
				my_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php my_theme_post_thumbnail(); ?>




	<div class="entry-content" style="float:left;padding:20px;">
	
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'my-theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</div>
	<footer class="entry-footer">
		<?php my_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
