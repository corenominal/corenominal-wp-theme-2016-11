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

                <input id="filter-archives" autocomplete="off" class="filter-input archives" type="text" value="" placeholder="Filter ...">

                <?php

                // WP_Query arguments
                $args = array (
                	'posts_per_page'         => '1000000000',
                	'order'                  => 'DESC',
                	'orderby'                => 'date',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() )
                {
                	$date = false;
                	$first = true;
                	echo '<ul class="month">';
                	while ( $query->have_posts() ):
                		$query->the_post();
                		if( $date != get_the_time('F, Y') )
                		{
                			if( $first ):
                				$first = false;
                				$date = get_the_time('F, Y');
                				echo '<li class="date"><h3>'.$date.'</h3></li>';
                			else:
                				echo '</ul>';
                				echo '<ul class="month">';
                				$date = get_the_time('F, Y');
                				echo '<li class="date"><h3>'.$date.'</h3></li>';
                			endif;

                		}
                		?>
                		<li class="title">
                			<span><?php the_time('d') ?></span>
                			<a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                		</li>
                		<?php
                	endwhile;
                	echo '</ul>';
                	echo '<div id="no-results"></div>';
                }
                else
                {
                	// no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>

            </div>

        </div>
    </div>
 </div>
 <?php
 get_footer();
