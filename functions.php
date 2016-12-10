<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */

/**
 * Theme support
 */
require get_template_directory() . '/functions/theme_support.php';

/**
 * Custom RSS feeds
 */
require get_template_directory() . '/functions/feeds.php';

/**
 * Widgets
 */
require get_template_directory() . '/functions/widgets.php';

/**
 * Enqueue styles
 */
require get_template_directory() . '/functions/enqueue_styles.php';

/**
 * Enqueue scripts
 */
require get_template_directory() . '/functions/enqueue_scripts.php';

/**
 * Menus
 */
require get_template_directory() . '/functions/menus.php';

/**
 * Taxonomies
 */
require get_template_directory() . '/functions/taxonomies.php';

/**
 * Metaboxes
 */
require get_template_directory() . '/functions/metaboxes.php';

/**
 * Miscellaneous
 */
require get_template_directory() . '/functions/misc.php';
