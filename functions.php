<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function beaumont_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'beaumont_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function beaumont_styles() {

	wp_enqueue_style( 'beaumont-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'beaumont' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'beaumont_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function beaumont_register_block_patterns() {

	// The block pattern categories included in Beaumont.
	$beaumont_block_pattern_categories = apply_filters( 'beaumont_block_pattern_categories', array(
		'beaumont'  => array(
			'label'			=> esc_html__( 'Beaumont Patterns', 'beaumont' ),
		)
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $beaumont_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $beaumont_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'beaumont_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function beaumont_register_block_styles() {

	// Pagination: Vertical Separators
	register_block_style( 'core/query-pagination', array(
		'name'  	=> 'beaumont-vertical-separators',
		'label' 	=> esc_html__( 'Vertical Separators', 'beaumont' ),
	) );

	// Separator: Diamond
	register_block_style( 'core/separator', array(
		'name'  	=> 'beaumont-diamond',
		'label' 	=> esc_html__( 'Diamond', 'beaumont' ),
	) );

	// Separator: Diamond Wide
	register_block_style( 'core/separator', array(
		'name'  	=> 'beaumont-diamond-wide',
		'label' 	=> esc_html__( 'Diamond Wide', 'beaumont' ),
	) );
	
}
add_action( 'init', 'beaumont_register_block_styles' );
