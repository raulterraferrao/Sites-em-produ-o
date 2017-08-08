<?php get_header(); ?>

    <?php
        if(have_posts()):
            
            while(have_posts()): the_post();
   
                echo(get_post_format());
                get_template_part( 'content', get_post_format() );
    
            endwhile;

        endif;
    ?>
<?php get_footer(); ?>