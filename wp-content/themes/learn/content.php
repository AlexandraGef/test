<article>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
    </div>
    <div class="<?php if (has_post_thumbnail()) { ?> has-thumbnail<?php } ?>">
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
        <?php if (is_search() OR is_archive()) {
            echo get_the_excerpt(); ?>
            <a class="btn btn-default btn-xs" href="<?php echo get_permalink() ?>">czytaj więcej...</a>
        <?php } else {
            if ($post->post_excerpt) { ?>
                <p>
                    <?php echo get_the_excerpt() ?>
                    <a class="btn btn-default btn-xs" href="<?php echo get_permalink() ?>">czytaj więcej...</a>
                </p>
            <?php } else {
                the_content();
            }
        } ?>

        <br>

        <small><?php $post_tags = get_the_tags();

            if ($post_tags) {
                foreach ($post_tags as $tag) {
                    echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ' ' . '</a>';
                }
            } ?></small>
    </div>
</article>