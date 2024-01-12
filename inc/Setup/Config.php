<?php
/**
 * Theme configuration.
 *
 * @package Uniclub
 */

namespace Source\Setup;

/**
 * Class Config
 */
class Config {

	/**
	 * Config constructor.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'switch_theme', array( $this, 'switch' ) );
		add_action( 'widgets_init', array( $this, 'widgets' ) );
		add_action( 'init', array( $this, 'add_image_size' ) );
	}

	/**
	 * Theme setup.
	 *
	 * @return void
	 */
	public function setup() {
		load_theme_textdomain( 'duicode', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Menu Principal', 'duicode' ),
			)
		);

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

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}

	/**
	 * Theme switch.
	 *
	 * @return void
	 */
	public function switch() {
		flush_rewrite_rules();
	}

	/**
	 * Register widgets.
	 *
	 * @return void
	 */
	public function widgets() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'duicode' ),
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Add widgets here.', 'duicode' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

	/**
	 * Add image size.
	 *
	 * @return void
	 */
	public function add_image_size() {

	}
}
