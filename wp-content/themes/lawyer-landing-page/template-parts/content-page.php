<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lawyer_Landing_Page
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php 
    /**
     * Before Page entry content
     * 
     * @hooked lawyer_landing_page_page_content_image 
    */
    do_action( 'lawyer_landing_page_before_page_entry_content' );    
    ?>
    
	<div class="entry-content" itemprop="text">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lawyer-landing-page' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lawyer_landing_page_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
