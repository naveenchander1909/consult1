<div class="my-sevices">
<h2>Our Services</h2>
  <div class="eva-toggle">
  <?php


// Looping to compugraphics custom post types
$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="accordion-group">
      <div class="accordion-heading  active"><a class="accordion-toggle toggle  active" data-toggle="collapse" href="#"><?php the_title();?></a>
      </div>

      <div class="accordion-body collapse" >
        <div class="accordion-inner"><?php the_excerpt();?>
          <a href="<?php the_permalink(); ?>" class="more-link">More</a>
        </div>
      </div>

    </div>

  <?php endwhile; ?>
</div>
</div> <!-- .my-sevices -->
