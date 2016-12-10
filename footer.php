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
?>
<footer class="plates-of-meat">

    <div class="container">

        <div class="row">
            <div class="col-md-2">
                <?php
                /**
                 * First Footer Menu
                 */
                wp_nav_menu( array( 'theme_location' => 'footer-menu-one', 'link_before' => '<span>', 'link_after' => '</span>' ) );
                ?>
            </div>
            <div class="col-md-2">
                <?php
                /**
                 * Second Footer Menu
                 */
                wp_nav_menu( array( 'theme_location' => 'footer-menu-two', 'link_before' => '<span>', 'link_after' => '</span>' ) );
                ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar( 'footer-widget-1' ) ?>
            </div>
            <div class="col-md-3 col-sm-offset-1">
                <?php dynamic_sidebar( 'footer-widget-2' ) ?>
            </div>
        </div>

    </div>

</footer>
</div>
</div> <!-- corenominal -->
<?php
/**
 * The WP Footer function
 */
wp_footer(); ?>
<script type="application/ld+json">
[{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "corenominal",
  "url" : "https://corenominal.org",
  "logo": "https://corenominal.org/logo.png",
  "sameAs" : [ "http://www.facebook.com/corenominal",
    "http://www.twitter.com/corenominal",
    "https://plus.google.com/+PhilipNewborough",
    "https://github.com/corenominal",
    "https://codepen.io/corenominal",
    "https://uk.linkedin.com/in/corenominal",
    "https://www.reddit.com/user/corenominal"]
},
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "https://corenominal.org/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "https://corenominal.org/?s={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}]
</script>
</body>
</html>
