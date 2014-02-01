  <div class="container main">
    <div class="ro">
      <div class="col-lg-4 col-sm-4 col-xs-4 col-lg-offset-8 col-sm-offset-8 col-xs-offset-8 text-center">
        <a href="#" class="btn btn-large btn-default">Back to top</a>
      </div>
    </div>
  </div>
  <footer>
    <div class="container text-center text-muted main">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-xs-8">
          <p>&copy; 2014 <?php bloginfo('name'); ?>          
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </footer>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32446386-1']);
    _gaq.push(['_setDomainName', 'algolia.com']);
    _gaq.push(['_trackPageview', '/blog<?php if ($_SERVER['REQUEST_URI'] != '/') echo $_SERVER['REQUEST_URI']; ?>']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script>
    var _kmq = _kmq || [];
    var _kmk = _kmk || 'e371e65d8a5fe63f414a862d78e372e49b2c5f06';
    function _kms(u){
      setTimeout(function(){
        var d = document, f = d.getElementsByTagName('script')[0],
        s = d.createElement('script');
        s.type = 'text/javascript'; s.async = true; s.src = u;
        f.parentNode.insertBefore(s, f);
      }, 1);
    }
    _kms('//i.kissmetrics.com/i.js');
    _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
  </script>
  <script type="text/javascript">
    jQuery(function($) {
      var $cache = $('#panel-fixed');
      var top = $cache.find('.panel-body').offset().top - $('.header-padder').height() - 30;
      $(window).scroll(function() {
        if ($(window).width() < 1000) {
          return;
        }
        if ($(window).scrollTop() > top) {
          if ($cache.css('position') !== 'fixed') {
            $cache.css({ position: 'fixed', top: '56px', width: $cache.width() + 60 });
          }
        } else {
          $cache.css({ position: 'relative', top: 'auto', width: 'auto' });
        }
      });
    });
  </script>
</body>
</html>
