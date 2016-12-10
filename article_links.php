<?php $the_link = get_post_custom_values('the_link', $post->ID) ?>
<article class="h-entry post link">
<?php if( !is_single() ): ?>
<h2>
<a class="p-name" href="<?php echo $the_link[0] ?>"><?php the_title() ?>
    <i class="fa fa-external-link" aria-hidden="true"></i>
</a>
</h2>
<p class="meta article-date">
    <a class="u-url" href="<?php the_permalink(); ?>">
    <i class="fa fa-clock-o" aria-hidden="true"></i>
    <?php the_time('F j, Y') ?>&nbsp;&nbsp;<?php the_time() ?>
    </a>
</p>
<?php endif; ?>
<div class="e-content">
<?php the_content() ?>
</div>
<footer>
    <p class="meta">
        <i class="fa fa-tags" aria-hidden="true"></i>
        <span class="sr-only">Tags: </span>
        <?php the_tags( '' ) ?>
    </p>
</footer>
</article>
