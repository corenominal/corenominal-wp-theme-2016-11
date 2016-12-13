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
function corenominal_enqueue_styles()
{
    /**
     * CSS
     */
    wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/vendor/reset.css', false );
    wp_enqueue_style( 'roboto_font_css', get_template_directory_uri() . '/fonts/Roboto/css/fonts.css', false );
    wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', false );
    wp_enqueue_style( 'grid_css', get_template_directory_uri() . '/css/vendor/grid12.css', false );
    wp_enqueue_style( 'typography_css', get_template_directory_uri() . '/css/typography.css', false );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css', false );
    wp_enqueue_style( 'forms_css', get_template_directory_uri() . '/css/forms.css', false );
	wp_enqueue_style( 'layout_css', get_template_directory_uri() . '/css/layout.css', false );
	wp_enqueue_style( 'shame_css', get_template_directory_uri() . '/css/shame.css', false );

    /**
     * Conditional CSS
     */
    if( is_page( 'projects' ) )
    {
        wp_enqueue_style( 'page_projects_css', get_template_directory_uri() . '/css/page-projects.css', false );
    }

    if( is_page_template( 'page_project.php' ) )
    {
        wp_enqueue_style( 'page_projects_css', get_template_directory_uri() . '/css/page_project.css', false );
    }

    if( is_page( 'contact' ) )
    {
        wp_enqueue_style( 'contact_css', get_template_directory_uri() . '/css/page-contact.css', false );
    }

    if( is_404() )
    {
        wp_enqueue_style( '404', get_template_directory_uri() . '/css/404.css', false );
    }

    if( is_page_template( 'page_pwgenweb.php' ) )
    {
        wp_enqueue_style( 'pwgen_web_css', get_template_directory_uri() . '/css/page_pwgenweb.css', false );
    }

}
add_action( 'wp_enqueue_scripts', 'corenominal_enqueue_styles' );
