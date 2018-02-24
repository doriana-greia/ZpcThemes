<?php

//--------------------------------------Удаляем функцию прикрепленную к указанному хуку (событию)----------------------------------------//

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head');
show_admin_bar(false);

//------------------------------------End Удаляем функцию прикрепленную к указанному хуку (событию)--------------------------------------//

//---------------------------Фукция установки темы--------------------------------------------------------------------------------------//

if ( ! function_exists( 'zpcthemes_setup' ) ) :

function zpcthemes_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zpcthemes' ),
	));
}
endif;
add_action( 'after_setup_theme', 'zpcthemes_setup' );

//---------------------------End Фукция установки темы-----------------------------------------------------------------------------------//

//---------------------------Фукция подключение style CSS и javascript------------------------------------------------------------------//

function zpcthemes_scripts() {
    
    wp_enqueue_style( 'main.min', get_template_directory_uri(). '/css/main.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri(). '/libs/animate/animate.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/libs/magnific/magnific-popup.css' );
    wp_enqueue_style( 'sectionbox', get_template_directory_uri(). '/libs/selectbox/selectbox.css' );

	wp_enqueue_script( 'libs-js', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '' , true);
    wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), '',  true);
    wp_enqueue_script( 'masked-js', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), '' , true);

}
add_action( 'wp_enqueue_scripts', 'zpcthemes_scripts' );

//---------------------------End Фукция подключение style CSS и javascript---------------------------------------------------------------//

//-------------------------------------------Themes customizer---------------------------------------------------------------------------//
include_once('customizer.php');
//-------------------------------------------End Themes customizer-----------------------------------------------------------------------//