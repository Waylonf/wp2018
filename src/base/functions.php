<?php if ( ! defined( 'ABSPATH' ) ) : exit; endif;
/**
 * {THEME-NAME} functions and definitions
 *
 * @link {THEME-LINK}
 *
 * @package WordPress
 * @subpackage {THEME-SLUG}
 * @since 1.0
 * @version {THEME-VERSION}
 */

// Universal functions used in the {THEME-NAME} theme framework.

// Additional functionality required by the {THEME-NAME} theme framework.
require get_template_directory() . '/inc/theme-setup.php';
//require get_template_directory() . '/inc/admin.php';
//require get_template_directory() . '/inc/theme-settings.php';
//require get_template_directory() . '/inc/setup.php';
//require get_template_directory() . '/inc/widgets.php';
//require get_template_directory() . '/inc/enqueues.php';
//require get_template_directory() . '/inc/template-tags.php';
//require get_template_directory() . '/inc/customizer.php';
//require get_template_directory() . '/inc/jetpack.php';
//require get_template_directory() . '/inc/editor.php';

// Unique and specific functions required only by {THEME-NAME} theme.

// Libraries used in the {THEME-NAME} theme framework.
require get_template_directory() . '/inc/lib/bootstrap-wp-navwalker.php';