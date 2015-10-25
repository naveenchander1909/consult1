<?php get_header(); ?>
<section id="main" style="min-height: 37px;">
  <div class="container">
<div id="page">
    <div class="row">
      <div class="services"><h2>Services We Provide</h2></div>
  <div class="span12">
  <div class="row-fluid services">

    <div id="owl-demo" class="owl-carousel">

      <?php
// Looping to compugraphics custom post types
$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item">
          <div class="eva-service-box style1">
            <figure> <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('category-thumb'); ?> </a>
              <?php endif; ?></figure>

            <div class="eva-service-content">
              <h3 class="page-title"><?php the_title();?></h3>
              <p><?php echo excerpt(15);  ?></p>
              <a href="<?php the_permalink(); ?>" class="btn more-link">More</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

    </div>
  </div>

    </div>

</div>

</div> <!-- #page -->

<div class="full-width-content light">
    <div class="container">
        <div class="row-fluid">

          <div id="testimonial" class="owl-carousel testimonail">

            <div class="item">
              <div class="eva-service-box style1">
                <h3>Testimonail</h3>
                  <div class="eva-service-content">
                    <img class="testimonial" src="<?php bloginfo('template_url'); ?>/images/3-130x130.jpg" alt="testimonial">
                  <p><i class="fa fa-quote-left"></i>Thank you very much for all your help in setting up my new company and clearing up all outstanding business in my sole trader accounts. For the first time in years I have peace of mind regards my business accounts. Your workforce are a credit to you, the girls at reception.<i class="fa fa-quote-right"></i></p>
                  <small>Jain & associates</small>

                </div>
              </div>
            </div>



          </div> <!-- .testimonail -->


        </div>
    </div>
</div> <!-- .bg-parallax -->

<!-- Blog Section Starts here-->
<div class="row-fluid clearfix blog">

  <div class="services"><h2>Our Blog</h2></div>

          <?php

$args = array( 'post_type' => 'blogging', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <article class="col-xs-4">
        <div class="type-post-wrap">

          <div class="item">
            <div class="eva-service-box style1 home-blog">
              <figure> <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('myblog-thumb'); ?> </a>
                <?php endif; ?></figure>

              <div class="eva-service-content loop-block">

                <div class="loop-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>

                <div class="meta-container">
                  <ul class="loop-meta">

                    <li class="date"><?php the_date();?></li>
                    <li class="comment"><i class="fa fa-comment"></i>
                      <a href="<?php comments_link(); ?>"><?php comments_number( 'No comment', '1 comment', '% comments' ); ?></a> </li>
                  </ul>

                </div>


                <p><?php echo excerpt(30);  ?></p>
                <a href="<?php the_permalink(); ?>" class="btn more-link">More</a>

              </div>
            </div>
          </div>
  </div>
  </article>
          <?php endwhile; ?>




</div> <!-- .blog -->


</div> <!-- .container -->
</section> <!-- End Main -->



<?php get_footer(); ?>
