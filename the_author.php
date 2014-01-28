<div class="media postmetadata">
    <a href="<?php the_author_meta('user_url'); ?>" class="pull-left">
        <img class="author" src="//d3ibatyzauff7b.cloudfront.net/assets/about-<?php the_author_meta('user_login'); ?>.jpg" />
    </a>
    <div class="media-body text-muted">
        Posted on <?php the_date("l, F jS, Y"); ?><br />
        Written by <strong><?php the_author(); ?></strong>
        <?php edit_post_link('Edit', ' &#124; ', ''); ?>
    </div>
</div>
