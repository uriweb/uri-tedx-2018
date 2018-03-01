<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package uri-2017
 */

get_header(); ?>
<div class="marginator">

	<?php get_template_part( 'template-parts/pre-content' ); ?>

		<?php
		while ( have_posts() ) : the_post();
    
            $post_format = get_post_format();
            if ( get_post_type() === 'talk' ) {
                $post_format = 'talk';
            }

			get_template_part( 'template-parts/content', $post_format );

			if( get_post_meta( $post->ID, 'uri-2017-display-post-navigation', true ) ) {
				the_post_navigation();
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	<?php get_template_part( 'template-parts/post-content' ); ?>
</div>
<?php
get_footer();
