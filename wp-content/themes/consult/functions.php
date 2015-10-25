
<?php
  /*-----------------------------------------------------------------------------------*/
  /* Including the necessary components and files
  /*-----------------------------------------------------------------------------------*/
  require_once('includes/custompost.php');
?>

<?php

function my_filter_head() { remove_action('wp_head', '_admin_bar_bump_cb'); }
add_action('get_header', 'my_filter_head');

?>

<?php

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('location', 'blogging', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Locations', 'taxonomy general name' ),
      'singular_name' => _x( 'Location', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Locations' ),
      'all_items' => __( 'All Locations' ),
      'parent_item' => __( 'Parent Location' ),
      'parent_item_colon' => __( 'Parent Location:' ),
      'edit_item' => __( 'Edit Location' ),
      'update_item' => __( 'Update Location' ),
      'add_new_item' => __( 'Add New Location' ),
      'new_item_name' => __( 'New Location Name' ),
      'menu_name' => __( 'Locations' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'locations', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
?>

<?php include("meta_slider.php"); ?>


<?php
 	// This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
    'primary'   => __( 'Top primary menu', 'themeslug_walker_nav_menu' ),
    'secondary' => __( 'Secondary menu in left sidebar', 'consult' ),
  ) );
?>

<?php
$args = array(
  'theme_location' => 'header-menu',
  'container' => '',
  'echo' => false,
  'items_wrap' => '%3$s'
);

?>

<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

function add_anchorclass( $anchorclass ) {
  return preg_replace( '/<a /', '<a class="menu-link main-menu-link"', $anchorclass );
}

add_filter( 'wp_nav_menu', 'add_anchorclass' );
?>

<?php
function my_custom_post_product() {
  $labels = array(
    'name'               => _x( 'Products', 'post type general name' ),
    'singular_name'      => _x( 'Product', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Product' ),
    'edit_item'          => __( 'Edit Product' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Product' ),
    'search_items'       => __( 'Search Products' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Products'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'product', $args );

}
add_action( 'init', 'my_custom_post_product' );
?>


<?php
function my_custom_post_blogging() {
  $labels = array(
    'name'               => _x( 'blogging', 'post type general name' ),
    'singular_name'      => _x( 'blogging', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New blogging' ),
    'edit_item'          => __( 'Edit blogging' ),
    'new_item'           => __( 'New blogging' ),
    'all_items'          => __( 'All blogging' ),
    'view_item'          => __( 'View blogging' ),
    'search_items'       => __( 'Search blogging' ),
    'not_found'          => __( 'No blogging found' ),
    'not_found_in_trash' => __( 'No blogging found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'blogging'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our blogging and blogging specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'blogging', $args );

}
add_action( 'init', 'my_custom_post_blogging' );
?>

<?php
function my_custom_post_slider() {
  $labels = array(
    'name'               => _x( 'slider', 'post type general name' ),
    'singular_name'      => _x( 'slider', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New slider' ),
    'edit_item'          => __( 'Edit slider' ),
    'new_item'           => __( 'New slider' ),
    'all_items'          => __( 'All slider' ),
    'view_item'          => __( 'View slider' ),
    'search_items'       => __( 'Search slider' ),
    'not_found'          => __( 'No slider found' ),
    'not_found_in_trash' => __( 'No slider found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'slider'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our slider and slider specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'slider', $args );

}
add_action( 'init', 'my_custom_post_slider' );
?>

<?php

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
  $title = strtolower($item->title);
  $classes[] = $title;
  return $classes;
}
//add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
   return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}



?>


<?php
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}?>

<?php wp_list_comments(); ?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Home right sidebar',
    'id'            => 'home_right_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



?>

<?php add_theme_support( 'post-thumbnails' ); ?>

<?php
add_image_size( 'category-thumb', 150, 9999 );
?>

<?php
add_image_size( 'myblog-thumb', 300, 9999 );
?>

