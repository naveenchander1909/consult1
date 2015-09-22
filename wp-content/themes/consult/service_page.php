<?php /*
Template Name: Service-page
*/
?>

<?php get_header(); ?>

<div class="blog container top-space">

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
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn more-link">More</a>
          </div>
        </div>
      </div>

      <?php endwhile; ?>

    </div> <!-- .our-services -->



  </div>

</div> <!-- .blog -->

<?php get_footer(); ?>
