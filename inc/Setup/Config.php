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
	 * Add image size.
	 *
	 * @return void
	 */
	public function add_image_size() {

	}
}
