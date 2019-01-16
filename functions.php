<?php


/* --
 Custom post type and taxonomy for music
 
-- */


function create_music_function(){
    $labels = array(
        'name' => _x('Musics', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Music', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add music', '', 'your_text_domain'),
        'add_new_item' => __('Add New Music', 'your_text_domain'),
        'edit_item' => __('Edit Music', 'your_text_domain'),
        'new_item' => __('New Music', 'your_text_domain'),
        'all_items' => __('All Musics', 'your_text_domain'),
        'view_item' => __('View Musics', 'your_text_domain'),
        'search_items' => __('Search Music', 'your_text_domain'),
        'not_found' => __('No Music found', 'your_text_domain'),
        'not_found_in_trash' => __('No music on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Musics', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'music'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => array('title', 'thumbnail', 'editor','excerpt','page-attributes')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('music_category', array('musics'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'music_category',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'music_category'))
    );
    register_post_type('musics', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_music_function');


/* --
 End of Custom post type and taxonomy for music
 
-- */
