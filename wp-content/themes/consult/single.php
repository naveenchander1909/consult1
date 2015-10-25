<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();



  } // end while
} // end if
?>



<style>
  .entry-content .love-button {
    background: #f14864;
    color: #fff;
    padding:11px 22px;
    display:inline-block;
    border:0px;
    text-decoration: none;
    box-shadow: 0px 6px #d2234c;
    position:relative;
  }

  .entry-content .love-button:hover{
    top:3px;
    box-shadow: 0px 3px #d2234c;
  }

  .entry-content .love-button:active{
    top:6px;
    box-shadow: none;
  }


  #love-count {
    background: #eee;
    box-shadow: 0px 6px #ddd;
    color: #666;
    padding:11px 22px;
    display:inline-block;
  }
</style>

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
