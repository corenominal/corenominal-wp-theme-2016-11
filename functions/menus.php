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
function gelder_menus()
{
	// Call with: wp_nav_menu( array( 'theme_location' => 'header-menu' ) )
	register_nav_menu('header-menu',__( 'Header Menu' ));

	// Call with: wp_nav_menu( array( 'theme_location' => 'header-menu-one' ) )
	register_nav_menu('footer-menu-one',__( 'Footer Menu One' ));

	// Call with: wp_nav_menu( array( 'theme_location' => 'header-menu-two' ) )
	register_nav_menu('footer-menu-two',__( 'Footer Menu Two' ));

	// Call with: wp_nav_menu( array( 'theme_location' => 'header-menu-three' ) )
	register_nav_menu('footer-menu-three',__( 'Footer Menu Three' ));
}
add_action( 'init', 'gelder_menus' );
