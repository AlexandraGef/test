<?php
get_header();
?>
    <div class="container">
        <?php
        if (have_posts()) :
            ?>
            <h2><?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                   the_post();
                   echo 'Autor: ' .get_the_author();
                   rewind_posts();
                } elseif (is_day()) {
                    echo 'Posty z dnia ' . get_the_date();
                } elseif (is_month()) {
                    echo 'Posty z miesiąca: ' . get_the_date('F Y');
                } elseif (is_year()) {
                    echo 'Posty z ' . get_the_date('Y') .' roku';
                } else {
                    echo 'Archiwa: ';
                }


                ?></h2>
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="search-page">
                <?php get_template_part('content',get_post_format())?>
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