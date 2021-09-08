<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(275, 275) ); ?></a>
    <p><?php _e('Published in ', 'cbhbois'); ?><?php echo get_the_date(); ?> <?php _e('by', 'cbhbois'); ?> <?php the_author_posts_link(); ?></p>
    <p><?php _e('Categories: ', 'cbhbois'); ?><?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    <?php the_excerpt(); ?>
</article>