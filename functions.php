<?php
/**
 * wpdemotheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpdemotheme
 */

/**
 * All the actions.
 */

require get_template_directory() . '/inc/action.php';

/**
 * included all the callback functions of action.
 */
require get_template_directory() . '/inc/action-function.php';

/**
 * All the filters.
 */
require get_template_directory() . '/inc/filter.php';

/**
 * included all the callback functions of filter.
 */
require get_template_directory() . '/inc/filter-function.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Common functions.
 */
require get_template_directory() . '/inc/common-function.php';

/**
 * Include all shortcodes.
 */
require get_template_directory() . '/inc/shortcode.php';

/**
 * Shortcode and its callback functions.
 */
require get_template_directory() . '/inc/shortcode-function.php';
