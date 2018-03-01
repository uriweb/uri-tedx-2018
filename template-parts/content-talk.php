<?php
/**
 * Template part for displaying talks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uri-tedx-2018
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        
        <?php if(get_field('ytid')) { ?>
        <div class="theatre breakout">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php the_field('ytid'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <?php } ?>
        
        <section>
            <div class="talk-info">
                <?php if(get_field('name')) { ?>
                <h1 class="talk-speaker">
                    <?php
                    the_field('name');        
                    if(get_field('event')) { ?>
                    <span class="talk-event">at <?php the_field('event'); ?></span>
                    <?php } ?>
                </h1>
                <?php } ?>
                <?php if(get_field('title')) { ?>
                <h2 class="talk-title"><?php the_field('title'); ?></h2>
                <?php } ?>
                <?php if(get_field('description')) { ?>
                <p class="talk-description"><?php the_field('description'); ?></p>
                <?php } ?>
            </div>
        </section>
                
        <section>
            <div class="about-this-speaker">
                <?php if(get_the_post_thumbnail()) { ?>
                <div class="headshot">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <?php } ?>
                <div class="bio">
                    <?php if(get_field('name')) { ?>
                    <h1 class="bio-name"><?php the_field('name'); ?></h1>
                    <?php } ?>
                    <?php if(get_field('profession')) { ?>
                    <h2 class="bio-profession"><?php the_field('profession'); ?></h2>
                    <?php } ?>
                    <?php if(get_field('bio')) { ?>
                    <p class="bio-content"><?php the_field('bio'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section>
        <?php if(get_field('transcript')) { ?>
            <div class="transcript">
                <h1>Transcript</h1>
                <?php the_field('transcript'); ?>
            </div>
        <?php } ?>
        </section>
        
        <section id="licensing" style="border-top: 1px solid #ddd;">
            <p>This independent TEDx event is operated under license from TED.</p>
        </section>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'uri-tedx-2018' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->


