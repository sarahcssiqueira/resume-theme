<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
?>

<?php

/* Register custom style */

function rt_register_styles() {
        
        $version = wp_get_theme()->get( 'Version' );
    
        wp_enqueue_style('restheme_sytle', get_template_directory_uri()."/style.css", array(), $version,'all');
        wp_enqueue_style('restheme_sytle_font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css", array(), '6.2.0','all');
    
    }
    
add_action('wp_enqueue_scripts','rt_register_styles');

/* Register custom scripts */

function rt_register_scripts() {

    wp_enqueue_script('restheme_script_js', get_template_directory_uri()."/js/main.js", array(), '1.0',true);
    wp_enqueue_script('restheme_script_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1',true);
    
}

add_action('wp_enqueue_scripts','rt_register_scripts');


/* Add theme suppports */

function rt_theme_support () {
    add_theme_support('title-tag');
    
}

add_action ('after_setup_theme','rt_theme_support');

/*Register menus */

function rt_menus () {
    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
}

add_action ('init', 'rt_menus');





/* Register Custom Post Type */


function rt_new_post_type_skills() {
    $supports = array(
        'title',
        'editor',
        'author', 
        'thumbnail', 
        'excerpt', 
        'custom-fields', 
        'comments', 
        'revisions', 
        'post-formats', 
        );

    $labels = array(
        'name' => _x('Skills', 'plural'),
        'singular_name' => _x('Skill', 'singular'),
        'menu_name' => _x('Skills', 'admin menu'),
        'name_admin_bar' => _x('Skills', 'admin bar'),
        'add_new' => _x('Add Skill', 'add new skill'),
        'add_new_item' => __('Add New Skill'),
        'new_item' => __('New skill', 'New Skill'),
        'edit_item' => __('Edit skill'),
        'view_item' => __('View skill'),
        'all_items' => __('All skills'),
        'search_items' => __('Search skills'),
        'not_found' => __('No skills found.'),
        );
        
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pets'),
        'has_archive' => true,
        'hierarchical' => false,
        );

        
    register_post_type('skills', $args);
    };


add_action('init', 'rt_new_post_type_skills');