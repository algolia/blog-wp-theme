<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 sol-sm-8">
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
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
