<article id="post-<?php the_ID(); ?>" <?php post_class();?>>

    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php _e('Posted in', 'wpcurso') ?> <?php echo get_the_date(); ?> <?php _e('by', 'wpcurso'); ?> <?php the_author_posts_link(); ?></p>
            <p><?php _e('Categories: ', 'wpcurso'); ?> <span><?php the_category( ' ' ); ?></span></p>
            <p><?php the_tags( __( 'Tags: ', 'wpcurso'), ', ' ); ?></p>
        </div>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>

</article>