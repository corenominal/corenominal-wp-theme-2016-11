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
 $categories = get_the_category();
 $category = $categories[0]->slug;
 ?>
<div class="header-page header-gradient">
    <div class="container">
        <h1><?php the_title() ?></h1>
        <span>
            <a class="u-url" href="<?php the_permalink(); ?>">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <?php the_time('F j, Y') ?>&nbsp;&nbsp;<?php the_time() ?>
            </a>
        </span>
        <?php
        if ( $category == 'links' ):
            $the_link = get_post_custom_values('the_link', $post->ID);
        ?>
            <br>
            <a target="_blank" class="external-link-button p-name" href="<?php echo $the_link[0] ?>">Open Link
                <i class="fa fa-external-link" aria-hidden="true"></i>
            </a>
        <?php endif; ?>
    </div>
</div>

 <div class="bacon-and-eggs">
     <div class="container">
		<div class="row">
            <div class="col-md-7">
             <?php

             require get_template_directory() . '/article_' . $category . '.php';
             comments_template();
             require get_template_directory() . '/pager.php';
             ?>
            </div>

            <?php get_sidebar( 'single' ); ?>

        </div>
    </div>
 </div>
 <?php
 get_footer();
