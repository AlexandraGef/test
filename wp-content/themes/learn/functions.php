
<?php
//styles
function theme_styles(){
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','theme_styles');
//scripts
function theme_js() {

    global $wp_scripts;
    wp_enqueue_script( 'jquery_js','https://code.jquery.com/jquery-3.2.1.slim.js' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js' );

}

add_action( 'wp_enqueue_scripts', 'theme_js');


//get top ancestor

function get_top_ancestor_id() {
    global $post;
    if($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];

    }
    return $post->ID;
}

//does page has children ?

function has_children() {
    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

//more link
function modify_read_more_link() {
    return '<a class="btn btn-default btn-xs" href="' . get_permalink() . '">czytaj więcej...</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

//customize excerpt word count length

function custom_excerpt_length(){
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');



function add_setupLearn() {
    //menus
    register_nav_menus(array(
        'primary' => __('Pierwsze'),
        'footer' => __('Ostatnie'),
    ));
    //add thumbnails
    add_theme_support('post-thumbnails');

    //size thumbnails

    add_image_size('small-thumbnail',250, 200, true);
    add_image_size('banner-image',1200, 210, array('left','top'));

    //add post format support
    add_theme_support('post-formats', array('aside','gallery','link'));

}

add_action('after_setup_theme','add_setupLearn');