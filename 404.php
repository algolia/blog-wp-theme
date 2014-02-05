<?php get_header(); ?>
 
<div class="container main">
    <div class="row">
      <div class="col-lg-8 col-sm-8" id="col-left">
        <div class="post">
          <h1>Error</h1>

          <h2>Page not found</h2>
          <p>It seems we can't find what you're looking for. Perhaps one of the links below can help.</p>

          <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 hidden-xs" id="col-right">
          <?php get_sidebar(); ?>
      </div>
    </div>
</div>

<?php get_footer(); ?>
