<?php
/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

//////////////////////////////////////////////////
function underscore_setup() {

    	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );


    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}    
add_action( 'after_setup_theme', 'underscore_setup' );


/**
 * Enqueue scripts and styles.
 */
function underscore_scripts() {
	/*
	wp_enqueue_style( 'underscore-style',
					   get_stylesheet_uri(), 
					   array(),
					_S_VERSION );
	*/				

	wp_enqueue_style('underscore-style',
					 get_template_directory_uri() . '/style.css',
					 array(), 
					 filemtime(get_template_directory() . '/style.css'), false);
	
}
add_action( 'wp_enqueue_scripts', 'underscore_scripts' );
// -------------------------------------------------------------------Enregistrement
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'menu-burger',
            'name'          => __( 'burger' ),
            'description'   => __( 'Premier test de menu fonctionnel' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );
/**
 * @param : WP_Query $query
 * $query contitent la requete mysql qui permet d'extraire le contenu de la novuelle page
 * que l'on tente d'accèder
 */

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'menu_burger' => __( 'Menu burger' ),

	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );