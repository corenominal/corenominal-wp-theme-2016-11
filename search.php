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
        <h1>Search: "<?php the_search_query() ?>"</h1>
        <?php
            $results = $wp_query->found_posts;
            $str = 'results found.';
            if( $results === '1' )
                $str = 'result found.';
        ?>
        <p class="sub"><?php echo $results.' '.$str; ?></p>
    </div>
</div>

 <div class="bacon-and-eggs">
     <div class="container">
		<div class="row">
            <div class="col-md-12 post-list">
                <?php
                if ( have_posts() ) :
                ?>
                <ol class="search-results">
                <?php
                    while ( have_posts() ) :
                    the_post();
                ?>

                <li>
                    <h3><a class="title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <?php
                    $url = get_the_permalink();
                    if( strlen( $url ) >= 93 )
                    {
                        $url = substr(get_the_permalink(), 0, 90) . ' ...';
                    }
                    ?>
                    <a class="url" href="<?php the_permalink() ?>"><?php echo $url ?></a>
                    <?php the_excerpt() ?>
                </li>

                <?php
                    endwhile;
                ?>
                </ol>
                <?php
                    require get_template_directory() . '/search-pager.php';
                else:
                ?>
                <h2><i class="fa fa-frown-o fa-5x" aria-hidden="true"></i></h2>
                <?php
                endif;
                ?>
            </div>


        </div>
    </div>
 </div>
 <?php
 get_footer();
