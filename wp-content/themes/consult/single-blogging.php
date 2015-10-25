
<?php
/**
* The Template for displaying all single posts.
*
* @package consult
*/
get_header();
?>




<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    //
    // Post Content here
    //
  } // end while
} // end if
?>



<div class='container top-space'>

  <div class="clearfix">
    <div class="col-sm-9">
      <h3><?php the_title(); ?></h3>
      <ul class="loop-meta">

        <li class="date"><?php the_date();?></li>
        <li class="comment"><?php comments_number( 'No comment', '1 comment', '% comments' ); ?> </li>
      </ul>
      <?php the_content(); ?>

     <div class="social-share clearfix">
       <div class='st_facebook_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></div>
       <div class='st_fblike_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></div>
       <div class='st_plusone_vcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></div>
      </div> <!-- .social-share -->

      <?php comments_template(); ?>
    </div>

    <div class="col-sm-3 widget widget_categories">
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
  'title_li' => ''
) );

// Make sure there are terms with articles
if ( $locations_list )
  echo '<ul class="locations-list">' . $locations_list . '</ul>';
?>

      <h3>Recent Posts</h3>
      <ul>
        <?php
$queryObject = new WP_Query( 'post_type=blogging&posts_per_page=5' );
// The Loop!
if ($queryObject->have_posts()) {
        ?>

        <?php
  while ($queryObject->have_posts()) {
    $queryObject->the_post();
        ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
  }
        ?>
        <?php
}
        ?>        </ul>

</div>


  </div>




</div>

<?php get_footer(); ?>

