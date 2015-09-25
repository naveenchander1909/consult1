
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
        <li class="author"><?php the_author();?></li>
        <li class="date"><?php the_date();?></li>
        <li class="comment"><?php comments_number( 'No comment', '1 comment', '% comments' ); ?> </li>
      </ul>
      <?php the_content(); ?>

     <div>
       <span class='st_plusone_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
       <span class='st_fblike_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
       <span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
     </div>

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
$args = array( 'numberposts' => '5' );
$recent_posts = wp_get_recent_posts($args);
foreach( $recent_posts as $recent ){
  echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
}
        ?>

      </ul>


</div>


  </div>




</div>

<?php get_footer(); ?>

