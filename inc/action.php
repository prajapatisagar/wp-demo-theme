<?php
/**
 * File include all the actions.
 */

/**
 * Action for the theme setup.
 */
add_action( 'after_setup_theme', 'wpdemotheme_setup' );

/**
 * Action for content width defining in the theme setup.
 */
add_action( 'after_setup_theme', 'wpdemotheme_content_width', 0 );

/**
 * Action for register widget.
 */
add_action( 'wp_enqueue_scripts', 'wpdemotheme_scripts' );

/**
 * Action for the frontend script enqueueing.
 */
add_action( 'widgets_init', 'wpdemotheme_widgets_init' );