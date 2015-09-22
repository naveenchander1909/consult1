<?php
/**
 * Locations taxonomy archive
 */
get_header(); ?>

<div class="container top-space">

  <div class="wrapper clearfix custom-cat">
    <div class="col-sm-9">

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

      <div class="type-post-wrap">

        <div class="item">
          <div class="eva-service-box style1 home-blog clearfix">
            <figure class="col-sm-3"> <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('myblog-thumb'); ?> </a>
              <?php endif; ?></figure>

            <div class="eva-service-content loop-block col-sm-9">


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
      <?php endwhile; ?>



      <?php endif; ?>
    </div><!--// end .primary-content -->

    <div class="col-sm-3">
      <h3>Blog Categories</h3>
      <?php
/**
 * Create an unordered list of links to active location archives
 */
$locations_list = wp_list_categories( array(
  'taxonomy' => 'location',
  'orderby' => 'name',
  'show_count' => 0,
  'pad_counts' => 0,
  'hierarchical' => 1,
  'echo' => 0,
  'title_li' => 'Locations'
) );

// Make sure there are terms with articles
if ( $locations_list )
  echo '<ul class="locations-list">' . $locations_list . '</ul>';
      ?>
    </div>


</div>
</div>

<?php get_footer(); ?>
