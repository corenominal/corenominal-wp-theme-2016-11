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

            <div class="col-md-12">

                <input id="filter-tags" autocomplete="off" class="filter-input tags" type="text" value="" placeholder="Filter ...">
                <ul class="tags">
                <?php

                $args = array(
                	//'orderby' 	 => 'count',
                	'order' 	 => 'ASC',
                	'hide_empty' => true
                	);
                $tags = get_tags( $args );

                foreach ($tags as $tag):
                ?>
                <li class="tag"><a class="nowrap" href="<?php echo site_url( 'tag/' . $tag->slug ) ?>"><?php echo $tag->name ?></a></li>
                <?php
                endforeach;
                ?>
                </ul>



            </div>

        </div>
    </div>
 </div>
 <?php
 get_footer();
