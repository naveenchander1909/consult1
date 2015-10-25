<?php /*
Template Name: contact us
*/
?>

<?php get_header(); ?>

<section id="page-title">
  <!-- Start Container -->
  <div class="container top-space">
    <h2>Contacts</h2>
    <h3>Contact information for the company</h3>
    </div>
  <!-- End Container -->
</section>


<section id="main">
  <div class="container">
    <div id="page">
      <div class="row">
       <div class="span12">
       <div class="row-fluid">
         <div class="span6"><div class="eva-column-wrap " style="padding-bottom:60px;"><h1>+91 9810941240</h1>
        <h5>E-10/524, Nehru Vihar, Dayalpur, Delhi-94<br />info@blacktheme.com</h5>
         <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
        </div>

        </div>

        <div class="span6">
          <div id="map"></div>

        </div>

        </div>

        </div>

        <div class="contact-us-form contact-form">
          <h3>Send in Your Query</h3>
          <?php echo do_shortcode( '[contact-form-7 id="104" title="Contact form 1"]' ); ?>
        </div> <!-- .contact-us-form -->

        </div>
    </div>
  </div>
</section>
<!-- End Main -->

<script type="text/javascript">
  var map;
  var infowindow;

  function initMap() {
    var pyrmont = {lat: -33.867, lng: 151.195};

    map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 15
    });
  };
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXeaZGULoYq4BRuMu9RfO7xBD1jfr6ris&signed_in=true&libraries=places&callback=initMap" async defer></script>
<?php get_footer(); ?>
