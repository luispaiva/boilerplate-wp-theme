<?php
/**
 * Init class
 *
 * @package Duicode
 */

namespace Source;

/**
 * Class Init
 */
final class Init {

	/**
	 * Get services
	 *
	 * @return array
	 */
	public static function get_services() {
		return array(
			Setup\Config::class,
			Setup\Enqueue::class,
		);
	}

	/**
	 * Register services
	 *
	 * @return void
	 */
	public static function services() {
		foreach ( self::get_services() as $class ) {
			$service = self::instance( $class );

			if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
		}
	}

	/**
	 * Initialize the class
	 *
	 * @param  class $class Class from the services array.
	 *
	 * @return class
	 */
	private static function instance( $class ) {
		return new $class();
	}

}
