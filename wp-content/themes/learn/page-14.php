<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-md-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="page">
                        <?php the_content() ?>
                    </article>
                    <?php
                endwhile;

            else:
                echo 'brak postów do wyswietlenia';

            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>