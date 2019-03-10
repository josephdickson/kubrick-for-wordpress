<?php
namespace Default_Theme\Theming;
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
/**
 * Enqueue theme CSS in Editor only.
 */
function enqueue_block_editor_assets() {
	wp_enqueue_style(
		'kubrick-editor-css',
		get_stylesheet_directory_uri() . '/blocks.css',
		null,
        time() // Changedd for production
    );
}
