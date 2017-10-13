<?php
get_header();
?>
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article>

                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p class="post-date"><?php the_time("j M Y, G:i ", $before, $after); ?> | <a
                            href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                        |
                        Kategoria: <?php
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = '';

                        if ($categories) {
                            foreach ($categories as $category) {
                                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                            }
                            echo trim($output, $separator);
                        }
                        ?>
                        </a></p>
                    <?php the_post_thumbnail('banner-image'); ?>
                    <?php the_content() ?>
                    <small><?php $post_tags = get_the_tags();

                        if ( $post_tags ) {
                            foreach( $post_tags as $tag ) {
                                echo '<a href="'.get_tag_link($tag->term_id).'">' .$tag->name.' '.'</a>';
                            }
                        }?></small>
                </article>
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