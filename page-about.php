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
            <div class="col-md-6">
             <?php require get_template_directory() . '/article_page.php' ?>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="panel">
                    <h2>Hire Me</h2>
                    <p>If you have a problem, if no one else can help, <strike>and if you can find them ...</strike> maybe you can hire <strike>The A-Team</strike> me.</p>
                    <p>Seriously though, I love my work and I enjoy helping others to make the most of the web. 
                    I look to work with individuals and small businesses who need help to improve their processes via online services.</p>
                    <p>I offer competitive rates (<em>think handyman rates</em>) and I'm easy to work with (<em>or so I'm told</em>).</p>
                    <p>If you would like to dicuss a potential project, or hire me, please <a href="https://corenominal.org/contact/">get in touch</a>.</p>
                </div>
            </div>

        </div>
    </div>
 </div>
 <?php
 get_footer();
