<?php
/**
 * The template for displaying archive-talk pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uri-tedx-2018
 */

get_header(); ?>

<div class="marginator">

	<?php get_template_part( 'template-parts/pre-content' ); ?>

		<?php
		if ( have_posts() ) : ?>

			<section class="headline">
				<h1>Browse Talks</h1>
			</section><!-- .page-header -->
			
			<div class="cl-tiles fourths">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

                /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'talk' );

			endwhile;
            
            ?>
			</div>
            <?php
    
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	<?php get_template_part( 'template-parts/post-content' ); ?>
    
    <section id="licensing">
        <p>This independent TEDx event is operated under license from TED.</p>
    </section>

</div>
<?php
get_footer();
