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
get_header();
the_post();
?>
<div class="header-page header-gradient">
    <div class="container">
        <h1><?php the_title() ?></h1>
    </div>
</div>

 <div class="bacon-and-eggs">
     <div class="container">
		<div class="row">
            <div class="col-md-7">
             <?php

             require get_template_directory() . '/article_page.php';
             comments_template();
             ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
 </div>
 <?php
 get_footer();
