<?php
/**
 * Functions and definitions
 *
 * @package Duicode
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) { //phpcs:ignore
	require_once dirname( __FILE__ ) . '/vendor/autoload.php'; //phpcs:ignore
}

if ( class_exists( 'Source\\Init' ) ) :
	Source\Init::services();
endif;
