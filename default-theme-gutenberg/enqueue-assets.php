<?php
namespace Default_Theme\Theming;

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
/**
 * Enqueue theme CSS and JavaScript in Editor only.
 */
function enqueue_block_editor_assets() {
	wp_enqueue_style(
		'gbtheming-editor-css',
		get_stylesheet_directory_uri() . '/css/editor.css',
		null,
        time() // Change for production
    );
	wp_enqueue_script(
		'gbtheming-editor-js',
		get_stylesheet_directory_uri() . '/js/editor.js',
		[ 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components' ],
		time() // Change for production
	);
}
