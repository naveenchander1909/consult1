<script type="text/javascript">
$(function(){
  //$('.eva-toggle .accordion-group').eq(0).find('.accordion-toggle').removeClass('collapsed').addClass('active');
  //$('.eva-toggle .accordion-group').eq(0).find('.accordion-body').removeClass('collapse').addClass('active');

  $('.accordion-heading').on('click', function(){
    $(this).find('.accordion-toggle').toggleClass('active');
  });

});
</script>
<div class="my-sevices">
<h2>Our Services</h2>
  <div class="services-cat"></div>
  <div class="eva-toggle">
  <?php


// Looping to compugraphics custom post types
$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="accordion-group">
      <div class="accordion-heading"><a class="accordion-toggle toggle" data-toggle="collapse" href="#"><?php the_title();?></a>
      </div>

      <div class="accordion-body collapse" >
        <div class="accordion-inner"><p><?php echo excerpt(15);  ?></p>
          <a href="<?php the_permalink(); ?>" class="more-link">More</a>
        </div>
      </div>

    </div>

  <?php endwhile; ?>
</div>
</div> <!-- .my-sevices -->
