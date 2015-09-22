<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dazzling
 */

get_header();
the_post();
?>
<main id="container top-space">
<div class="center-block">
  <section class="inner-page clearfix">
    <div class="row">
      <div class="col-md-12" style="text-align:center">
    		<h1 class="page-title">PAGE NOT FOUND!</h1>
        <div class="">
          <p>Sorry, but the page you have requested was not found.</p>
        </div>
      </div>
    </div>
  </section><!-- .section content -->
</div>
<?php get_footer(); ?>
