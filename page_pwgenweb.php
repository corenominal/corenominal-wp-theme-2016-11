<?php /* Template Name: pwgenweb */
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
        <h1>pwgenWEB <span>Password Generator</span></h1>
    </div>
</div>

 <div class="bacon-and-eggs">
     <div class="container">
		<div class="row">
            <div class="col-md-6 pwgenWEB">
             
                <label class="label"> Password:
                <input type="text" id="password" class="full-width password">
                </label>

                <label class="label">
                    <select id="length">
                        <?php for ($i=8; $i < 65; $i++) { 
                            echo '<option val="' . $i . '">' . $i . '</option>';
                        } ?>
                    </select>
                    <span class="label-body checkbox-custom-label">Number of characters</span>
                </label>
                
                <label class="label">
                    <input id="capitalize" class="checkbox-custom" type="checkbox" checked>
                    <span class="label-body checkbox-custom-label">Include at least one capital letter in the password</span>
                </label>

                <label class="label">
                    <input id="numerals" class="checkbox-custom" type="checkbox" checked>
                    <span class="label-body checkbox-custom-label">Include at least one number in the password</span>
                </label>

                <label class="label">
                    <input id="symbols" class="checkbox-custom" type="checkbox" checked>
                    <span class="label-body checkbox-custom-label">Include at least one special symbol in the password</span>
                </label>

                <button id="generate" class="pwgen-button button button-primary"><i class="fa fa-refresh" aria-hidden="true"></i> New Password</button> 
                <button id="copy" data-clipboard-target="#password" class="pwgen-button button button-primary"><i class="fa fa-clipboard" aria-hidden="true"></i> Copy to Clipboard</button>

                <div id="pwgen-notify" class="pwgen-notify"></div>

            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="panel">
                    <?php require get_template_directory() . '/article_page.php' ?>
                </div>
            </div>

        </div>

        <div class="row" id="smallprint">
            <div class="col-md-12">
                <div class="boxout">
                    <h3><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> The small print</h3>
                    <p>As a general rule of thumb, you should never trust online password generators. The only exceptions to this rule are:</p>
                    <ul>
                        <li>You created the tool yourself and you know what it is doing.</li>
                        <li>You know who created the tool and trust them explicitly.</li>
                        <li>You have inspected the code and know that it is client-side only (<em>this tool is not</em>).</li>
                        <li>You trust that the tool does not keep a copy of generated passwords.</li>
                    </ul>
                    <p>With the above in mind, you should know that this tool does not keep copies of generated passwords; however, there is a strong chance that
                    you do not know me, and therefore you should probably not trust this tool. Have a nice day!</p>
                </div>
            </div>
        </div>
    </div>
 </div>
 <?php
 get_footer();
