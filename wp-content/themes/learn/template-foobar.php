<?php /* Template Name: lol */ ?>
<?php
get_header(); ?>
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article class="row page">
                    <div class="col-md-8">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="col-md-4">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="col-md-8">
                        <?php the_content() ?>
                    </div>
                </article>
                <?php
            endwhile;

        else:
            echo 'brak postów do wyswietlenia';

        endif;
        ?>
    </div>
<?php get_footer(); ?>