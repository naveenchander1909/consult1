<?php /*
Template Name: Service-page
*/
?>

<?php get_header(); ?>

<section id="page-title" class="service-head">
  <!-- Start Container -->
  <div class="container top-space">
    <h2>Services</h2>
    <h3>one stop shop for all your Accounting Solutions</h3>
  </div>
  <!-- End Container -->
</section>

<div class="blog container">

  <div class="wrapper clearfix">

    <div class="our-services services">

      <?php
// Looping to compugraphics custom post types
$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="item clearfix">
        <div class="eva-service-box style1">
          <figure> <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('category-thumb'); ?> </a>
            <?php endif; ?></figure>

          <div class="eva-service-content">
            <h3 class="page-title"><?php the_title();?></h3>
            <p><?php echo excerpt(100);  ?></p>
            <a href="<?php the_permalink(); ?>" class="btn more-link">More</a>
          </div>
        </div>
      </div>

      <?php endwhile; ?>

    </div> <!-- .our-services -->



  </div>

</div> <!-- .blog -->

<?php get_footer(); ?>
