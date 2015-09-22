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
              <?php the_excerpt(); ?>
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

<div class="full-width-content light bg-parallax">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="eva-column-wrap" style="padding-bottom:0px;">
                    <h1 class="text-center">Hurry! 31st is the last date for income tax return </h1>
                    <h2 class="text-center">Click below to fill your return</h2>
                    <p style="text-align: center;">
                        <a href="#" target="_blank" class="btn btn-large" style="background:#f07241; color: ">
                            <i class="fa fa-chevron-right"></i>
                            Read more</a>
                    </p>
                </div>
            </div>
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
                    <li class="author"><?php the_author();?></li>
                    <li class="date"><?php the_date();?></li>
                    <li class="comment"><i class="fa fa-comment"></i>
                      <a href="<?php comments_link(); ?>"><?php comments_number( 'No comment', '1 comment', '% comments' ); ?></a> </li>
                  </ul>

                </div>


                <?php the_excerpt(); ?>
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
