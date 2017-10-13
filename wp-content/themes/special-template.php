<?php /* Template Name: Foobar */ ?>
<?php
get_header(); ?>
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article class="page">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content() ?>
                </article>
                <?php
            endwhile;

        else:
            echo 'brak postów do wyswietlenia';

        endif;
        ?>
    </div>
<?php get_footer(); ?>