<?php
get_header();
?>
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();?>
    <div class="index-page">
               <?php get_template_part('content',get_post_format());?>
    </div>
    <?php
            endwhile;
        else:
            echo 'brak postów do wyswietlenia';

        endif;
        ?>

    </div>
<?php
get_footer();
?>