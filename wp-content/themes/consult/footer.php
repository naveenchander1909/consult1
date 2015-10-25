<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="span3 col-1 padbot30">
        <aside id="text-4" class="widget widget_text">
          <h6 class="widget-title">Contacts</h6>
          <div class="textwidget">
            <a class="footer_phone" href="tel:(123) 456-78-90">(91) 9810941240</a>
            <a class="footer_mail" href="mailto:my-mail@mysite.com">lalit@mysite.com</a>
            <a class="footer_mail" href="mailto:office@mysite.com">lalit_bhadula@gmail.com</a></div>
        </aside>
      </div>

      <div class="span3 col-3 padbot30">
        <aside id="nav_menu-3" class="widget widget_nav_menu">
          <h6 class="widget-title">More Links</h6>

          <?php wp_nav_menu( array( 'naveen' => 'Secondary menu in left sidebar' ) ); ?>

        </aside>
      </div>

      <div class="span3 col-2 padbot30 recent-blogs">
        <h6 class="widget-title">Recent Blogs</h6>
        <ul>
          <?php
$queryObject = new WP_Query( 'post_type=blogging&posts_per_page=5' );
// The Loop!
if ($queryObject->have_posts()) {
          ?>

          <?php
  while ($queryObject->have_posts()) {
    $queryObject->the_post();
          ?>

          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
  }
          ?>
          <?php
}
          ?>        </ul>
      </div>


      <div class="span3 col-2 padbot30">
        <aside id="text-2" class="widget widget_text">
          <h6 class="widget-title">About Us</h6>
          <div class="textwidget"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
          </div>
        </aside>
      </div>


    </div>
  </div> <!-- .container -->

  <div id="bottom">
    <div class="container">
      <div class="row">
        <!-- Logo -->
        <div id="footer_logo" class="span2">
          <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="the account">
          </a>
        </div> <!-- //Logo -->

        <div class="span3 pull-right right">
          <p class="copyright">© 2014 Accounts</p>
          <div id="scrollTop"><i class="fa fa-chevron-up"></i></div>
        </div> <!-- .span3 -->
      </div>
    </div>
  </div>
</footer>
<!-- //Footer -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
