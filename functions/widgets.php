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
 * Register widgets areas for the Theme
 */
if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array(
		'name' => 'Sidebar Widget - Top',
		'id'   => 'corenominal-sidebar-widget-top',
		'description'   => 'The sidebar widget that appears above corenominal WEEKLY.',
		'before_widget' => '<div id="%1$s" class="aside widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name' => 'Sidebar Widget - Bottom',
		'id'   => 'corenominal-sidebar-widget-bottom',
		'description'   => 'The sidebar widget that appears below corenominal WEEKLY.',
		'before_widget' => '<div id="%1$s" class="aside widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name' => 'Footer Widget - Left',
		'id'   => 'footer-widget-1',
		'description'   => 'The first footer widget.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name' => 'Footer Widget - Right',
		'id'   => 'footer-widget-2',
		'description'   => 'The second footer widget.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

}
