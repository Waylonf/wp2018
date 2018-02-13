<?php if ( ! defined( 'ABSPATH' ) ) : exit; endif;

if ( ! isset( $content_width ) ) :
	$content_width = 600;
endif;

if ( ! function_exists('theme_support_setup') ) :
	function theme_support_setup()  {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 
			'search-form',
			'gallery',
			'caption'
		) );
		add_theme_support( 'title-tag' );
		add_editor_style( 'editor-style.css' );
		load_theme_textdomain( 'TEXTDOMAIN', get_template_directory() . '/language' );
	}
	add_action( 'after_setup_theme', 'theme_support_setup' );
endif;