<article class="h-entry post">
<?php if( !is_single() ): ?>
<h2><a class="p-name u-url" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
<p class="meta article-date">
    <a href="<?php the_permalink(); ?>">
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
