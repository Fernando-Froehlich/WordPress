<?php

/*

Template Name: General Template

*/

?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="" />
    
    <div class="content-area">
        <main>
            <section class="midle-area">
                <div class="container">
                    <div class="general-template">
                        <?php
                            //se houver algum post
                            if( have_posts()):
                                //enquanto houver algum post, mostre-os pra gente
                                while( have_posts()) : the_post()
                            ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </article>
                            
                            <?php
                                endwhile;
                            else:
                            ?>
                            <p><?php _e('There&rsquo;s nothing to be displayed...', 'wpcurso'); ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>