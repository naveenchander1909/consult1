<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();



  } // end while
} // end if
?>





<div class='container top-space'>

<div class="clearfix">
  <div class="col-sm-9 my-post">
  <h3><?php the_title(); ?></h3>

  <?php the_content(); ?>

  </div>

  <div class="col-sm-3">
    <?php get_sidebar(); ?>
  </div>
  </div>
  <div class="contact-form">

    <h3>Send in Your Query</h3>

    <?php echo do_shortcode( '[contact-form-7 id="104" title="Contact form 1"]' ); ?>
  </div>






</div>

<?php get_footer(); ?>
