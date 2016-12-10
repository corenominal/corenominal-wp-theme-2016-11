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
             ?>
            </div>

            <div class="col-md-4 col-md-offset-1">
                <div class="panel">
                    <h3>Resources</h3>
                    <p>The following sites have more information about copyleft, free software and digital rights:</p>
                    <ul>
                        <li><a href="https://creativecommons.org/" target="_blank">Creative Commons</a></li>
                        <li><a href="http://www.fsf.org/" target="_blank">Free Software Foundation</a> (<a href="https://fsfe.org/" target="_blank">EU</a>)</li>
                        <li><a href="https://www.eff.org/" target="_blank">Electronic Frontier Foundation</a></li>
                        <li><a href="https://www.openrightsgroup.org/" target="_blank">Open Rights Group</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
 </div>
 <?php
 get_footer();
