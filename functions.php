<?php
/**
 * @author  Pressbooks <code@pressbooks.com>
 * @license GPLv2 (or any later version)
 */

add_action( 'after_setup_theme', function () {
	add_theme_support( 'pressbooks_global_typography', 'grc' );
} );

add_filter( 'pb_global_components_path', function( $path ) {
	return dirname( __FILE__ ) . '/node_modules/buckram/styles/';
} );
