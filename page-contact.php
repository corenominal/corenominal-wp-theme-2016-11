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
            <div class="col-md-5">
             <?php require get_template_directory() . '/article_page.php' ?>
            </div>

            <div class="col-md-6 col-md-offset-1">
                <form id="contact-form" class="contact-form panel">

                    <div class="row">

                        <div class="col-md-12">
                            <label for="fullname">Your Name</label>
                            <input class="full-width input" type="text" placeholder="What do they call you?" id="name" required>

                            <label for="email">Your email</label>
                            <input class="full-width input" type="email" placeholder="foo@example.com" id="email" required>

                            <label for="enquiry">Enquiry</label>
                            <select class="full-width input" id="enquiry">
                                <option value="General">General enquiry</option>
                                <option value="Hire">Hiring my services</option>
                            </select>

                            <label for="message">Message</label>
                            <textarea class="full-width input" placeholder="Hello ..." id="message" required></textarea>

                            <input type="hidden" id="form" value="71c8aefb2c33764ca6b89864524a4fb2ee6ecf03">
                            <input type="hidden" id="security" value="<?php echo wp_create_nonce( "wp_rest" ) ?>">
                            <button id="submit" class="button-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                        </div>
                    </div>

                    <div id="notify" class="notify"></div>

                </form>
                <div id="thankyou" class="thankyou panel post">
                    <h2>Message Received. Thank You! <i class="fa fa-smile-o" aria-hidden="true"></i></h2>
                    <p>Thank you for contacting me. I look forward to reading your message.</p>
                    <p>Best regards,<br>Philip Newborough</p>
                    <p></p>
                </div>
            </div>

        </div>
    </div>
 </div>
 <?php
 get_footer();
