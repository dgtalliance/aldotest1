<?php
/**
 * Builder Assets management functionality
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 */

if ( ! defined( 'BUILDER_DEV_ENV' ) ) {
	// Configuration for build assets.
	define('BUILDER_DEV_ENV', true);
}

if ( ! function_exists( 'builder_get_assets_path' ) ) {

	/**
	 * Set the path of assets, based on the BUILDER_DEV_ENV variable's value.
	 */
	function builder_get_assets_path() {
		$template_directory = get_stylesheet_directory_uri();

		if ( defined( 'BUILDER_DEV_ENV' ) ) {
			// Development.
			return implode( DIRECTORY_SEPARATOR, array( $template_directory, 'assets' ) );
		}

		// Production.
		return implode(
			DIRECTORY_SEPARATOR,
			array(
				$template_directory,
				'build',
				file_get_contents( __DIR__ . '/../build/manifest.json' ),
			)
		);
	}
}

/**
 * Enqueue styles.
 */
if ( ! function_exists( 'builder_styles' ) ) {
	function builder_styles() {

    // Register styles

    wp_register_style(
      'flex_initial_css_main',
      builder_get_assets_path() . '/css/lg.css',
      array( 'flex-idx-main-project' ), // plugin base css
      BUILDER_VERSION
    );

    wp_enqueue_style( 'flex_initial_css_main' );

    // Use the commented below code if you want to enqueue scripts or styles
    // by post or page type.
    // if ( is_singular() ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }

	}

	add_action( 'wp_enqueue_scripts', 'builder_styles' );
}

/**
 * Enqueue scripts.
 */
if ( ! function_exists( 'builder_scripts' ) ) {
	function builder_scripts() {

    // Register scripts

    wp_register_script(
      'dgt-project-master',
      builder_get_assets_path() . '/js/dgt/dgt-project-master.js',
      array(),
      BUILDER_VERSION,
      true
    );

    wp_register_script(
      'builder',
      builder_get_assets_path() . '/js/project.min.js',
      array( 'dgt-project-master' ),
      BUILDER_VERSION,
      true
    );

    wp_enqueue_script( 'builder' );

    // Use the commented below code if you want to enqueue scripts or styles
    // by post or page type.
    // if ( is_singular() ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }

	}

	add_action( 'wp_footer', 'builder_scripts' );
}
