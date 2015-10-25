<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flickerplate.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" />
    <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr-custom-v2.7.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/hammer-v2.0.3.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/flickerplate.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/evatheme.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>

  <?php
  add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );
  function ajax_test_enqueue_scripts() {
  wp_enqueue_script( 'test', plugins_url( '/test.js'), array('jquery'), '1.0', true );
  }
  ?>

  <script>
    $(function(){
        $('.flicker-slider').flickerplate(
        {
          auto_flick 				: false,
          auto_flick_delay 		: 8,
          flick_animation 		: 'transform-slide'
        });
      });


</script>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- STARTS HEDAER HERE -->

<div id="top_bar">
          <div class="container">
            <div class="top_bar_phone"><i class="fa fa-phone"></i>(91) 9810941240 </div>
              <div class="top_bar_address"><i class="fa fa-map-marker"></i>E-10/524, Nehru Vihar, Dayalpur, Delhi-94</div>
              <div class="eva-social-icon">
                                <a href="https://www.facebook.com/" target="_blank" title="facebook" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>

                <a href="https://plus.google.com" target="_blank" title="google-plus" class="google-plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>

                <a href="https:/twitter.com" target="_blank" title="twitter" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>

                            </div>
          </div>
        </div> <!-- #top_bar -->

              <header class="header_sticky">
        <div class="container">
          <!-- Logo -->
          <div id="top_logo">
            <div class="eva-logo" style=" margin-top:0px; margin-bottom:0px;">
                            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img class="logo-img" src="<?php bloginfo('template_url'); ?>/images/logo_2x.png" style="width:180px" alt="the account">                            </a>                        </div>
                    </div>
          <!-- //Logo -->

          <!-- Search -->
<!--
            <div id="top_search">
              <?php get_search_form(); ?>
            </div>
-->
          <!-- //Search -->

          <!-- Main Menu -->
          <div id="top_menu">
            <i class="mobile_menu_icon fa fa-bars"></i>
            <?php wp_nav_menu( array( 'naveen' => '' ) ); ?>
                    </div>
          <!-- //Main Menu -->
        </div>
      </header>
      <!-- End Header -->

<!-- STARTS SLIDESHOW HERE -->
     <?php if ( is_home()) : ?>

        <div class="flicker-slider">

    <ul class="services">

      <?php
      $loop = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => -1, 'orderby'=> 'ASC'));
      ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php
      $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

      $intro = get_post_meta($post->ID, 'url', true);
      ?>

      <li data-background='<?php echo $feat_image; ?>' class="new<?php echo get_post_thumbnail_id($post->ID) ?>">
        <div class="flick-title"><?php the_title(); ?></div>
        <div class="flick-sub-text"><?php the_content();?></div>
        <a href="<?php echo $intro; ?>" class="btn more-link">
          Read more
        </a>
</li>

      <?php endwhile; ?>

      <?php wp_reset_query(); ?>


<!--
      // You can also call it from the global, as the query refers to the current single page
      echo get_post_meta( $GLOBALS['post']->ID, 'my-info', true );
-->

<!--
       <li data-background="<?php bloginfo('template_url'); ?>/images/flicker-1.jpg">
        <div class="flick-title">Haven't filled your ITR yet?</div>
        <div class="flick-sub-text">Hurry! 31st is the last date to fill your income tax return</div>
        <a href="#" class="btn more-link">
        Read more
        </a>
      </li>

      <li data-background="<?php bloginfo('template_url'); ?>/images/flicker-2.jpg">
        <div class="flick-title">Looking for an Acconts Consultant</div>
        <div class="flick-sub-text">get a accounts Consultant for all your needs</div>
        <a href="#" class="btn more-link">
          Read more
        </a>
      </li>
-->


    </ul>

      </div> <!-- .flicker-slider -->
       <?php endif ?>
