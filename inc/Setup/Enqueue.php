<?php
/**
 * Enqueue.
 *
 * @package Duicode
 */

namespace Source\Setup;

/**
 * Enqueue.
 */
class Enqueue {

	/**
	 * Register the stylesheets for the frontend.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		/**
		 * Styles
		 */
		wp_enqueue_style(
			'bootstrap-icons',
			'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
			array(),
			'5.3.2',
			false
		);
		wp_enqueue_style(
			'style',
			get_template_directory_uri() . '/assets/css/style.css',
			array(),
			filemtime( get_template_directory() . '/assets/css/style.css' )
		);

		/**
		 * Scripts
		 */
		wp_enqueue_script(
			'bootstrap',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
			array(),
			'5.3.2',
			true
		);
		wp_enqueue_script(
			'script',
			get_template_directory_uri() . '/assets/js/script.js',
			array(),
			filemtime( get_template_directory() . '/assets/js/script.js' ),
			true
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
