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
 ?>

<div class="header-page header-gradient">
    <div class="container">
        <h1>Snippet language: <?php echo single_tag_title( '', false ) ?></h1>
    </div>
</div>

 <div class="bacon-and-eggs">
     <div class="container">
		<div class="row">
            <div class="col-md-7 post-list">
 <?php
 // The loop
 while ( have_posts() ) :
 the_post();
 $categories = get_the_category();
 $category = $categories[0]->slug;
 require get_template_directory() . '/article_' . $category . '.php';
 endwhile;
 require get_template_directory() . '/pager.php';
 ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
 </div>
 <?php
 get_footer();
