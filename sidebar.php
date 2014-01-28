<div class="sidebar">
  <section class="panel panel-default b-t-r-r">
    <div class="panel-heading">
      <h4 class="text-center">Subscribe to our<br/>mailing list</h4>
    </div>
    <div class="panel-body">
      <form action="http://algolia.us3.list-manage.com/subscribe/post?u=f7b8acc6ec97794a08484ca9b&amp;id=a606eae234" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="mc-field-group input-group text-center">
          <input type="hidden" name="b_f7b8acc6ec97794a08484ca9b_a606eae234" value="" />
          <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Email" />
        </div>
        <div class="text-center m-t-small">
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default" />
        </div>
      </form>
    </div>
    <hr />
    <div class="panel-body">
      <div class="row text-center">
        <div class="col-lg-6 col-sm-6 col-xs-6">
          <a href="http://www.facebook.com/algolia" class="btn btn-large btn-info btn-full">Facebook</a>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6">
          <a href="http://www.twitter.com/Algolia" class="btn btn-large btn-info btn-full">Twitter</a>
        </div>
      </div>
    </div>
  </section>

  <section class="panel panel-default m-t no-p-b">
    <div class="panel-heading">
      <h4 class="text-center">Recent Posts</h4>
    </div>
    <div class="panel-body">
      <ul class="list-unstyled post-list">
        <?php
          $recent_posts = wp_get_recent_posts(array('numberposts' => 5));
          foreach ($recent_posts as $recent) {
            echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . esc_attr($recent["post_title"]) . '" >' . $recent["post_title"] . '</a></li>';
          }
        ?>
      </ul>
    </div>
  </section>
  <section class="panel panel-default b-b-r-r" id="panel-fixed">
    <hr />
    <div class="panel-body text-center">
      <h4>Improve your overall search experience today</h4>
      <a href="//www.algolia.com/features" class="btn btn-large btn-info">Explore our Features</a>
    </div>
  </section>

  <?php //if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>   
  <?php //endif; ?>
</div>
