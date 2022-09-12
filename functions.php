<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function king_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'king_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function king_styles() {

	wp_enqueue_style( 'king-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'king' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'king_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function king_register_block_patterns() {

	// The block pattern categories included in King.
	$king_block_pattern_categories = apply_filters( 'king_block_pattern_categories', array(
		'king'  => array(
			'label'			=> esc_html__( 'King Patterns', 'king' ),
		)
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $king_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $king_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'king_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function king_register_block_styles() {

	// Pagination: Vertical Separators
	register_block_style( 'core/query-pagination', array(
		'name'  	=> 'king-vertical-separators',
		'label' 	=> esc_html__( 'Vertical Separators', 'king' ),
	) );

	// Separator: Diamond
	register_block_style( 'core/separator', array(
		'name'  	=> 'king-diamond',
		'label' 	=> esc_html__( 'Diamond', 'king' ),
	) );

	// Separator: Diamond Wide
	register_block_style( 'core/separator', array(
		'name'  	=> 'king-diamond-wide',
		'label' 	=> esc_html__( 'Diamond Wide', 'king' ),
	) );
	
}
add_action( 'init', 'king_register_block_styles' );
