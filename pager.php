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
if( get_next_posts_link() || get_previous_posts_link() ): ?>

<div id="pager" class="pager">
<div id="next_posts_link" class="next_posts_link">
<?php next_posts_link( '<i class="fa fa-chevron-left" aria-hidden="true"></i> Older Posts' ) ?>
</div>
<div id="previous_posts_link" class="previous_posts_link">
<?php previous_posts_link( 'Newer Posts <i class="fa fa-chevron-right" aria-hidden="true"></i>' ) ?>
</div>
</div>

<?php endif; ?>
