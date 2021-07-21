<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<!-- section seventh begins here  -->
<section class="contactUs-section dark" id="contactus">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-11 col-md-10">
        <div class="row justify-content-between">
          <?php 
          $Contact_Us_id = 113;  //Page ID
          $Contact_Us_data = get_page( $Contact_Us_id ); 
        //   echo '<pre>'; print_r($Contact_Us_data);
          ?>
          <div class="col-md contactUs-wrapper">
            <h2 class="contactUs-button"><?php the_field('sign_up_title', $Contact_Us_id); ?></h2>
            <button class="button" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</button>
          </div>
          <div class="col-auto footer-logo">
            <?php $contact_us_logo = get_field('contact_us_logo', $Contact_Us_id); ?>
            <img src="<?php echo $contact_us_logo['url']; ?>" alt="<?php echo $contact_us_logo['alt']; ?>" /> </div>
        </div>
      </div>
    </div>
</section>
<!-- section seventh ends here  -->
<!-- final footer section starts here -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="copywrite">
          2021 Reno Power. All Rights Reserved. Designed & Developed by Spark Eighteen.
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- final footer section ends here -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h2>Contact Us</h2>
        <?php 
        echo do_shortcode('[contact-form-7 id="159" title="Contact Page"]');
        ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<!-- last section end  -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>