<?php get_header(); ?>

<div class="container main">
    <div class="row">
        <div class="col-lg-8 col-sm-8" id="col-left">
            <?php if(have_posts()) : ?>

                <?php while(have_posts()) : the_post(); ?>
                    <div class="post">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                        <?php include('the_author.php') ?>
                     
                        <div class="entry">
                            <?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>             
                        </div>
                    </div>
               	<?php endwhile; ?>
             
                <div class="navigation">
                    <?php posts_nav_link(); ?>
                </div>

            <?php endif; ?>
        </div>
        <div class="col-lg-4 col-sm-4 hidden-xs" id="col-right">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
