<?php
  /**
  * Template Name: Home Page
  *
  * This is the template that displays all widgets included in homepage widget area.
  *
  */
  get_header(); 
  
?>
<!-- section second begins here  -->
<body>
  <section class="race-category-slider-section">
    <div class="container">
      <div class="container_heading">
        <h5>Race Categories</h5>
        <div class="smart-slider">
          <?php
            echo do_shortcode('[smartslider3 slider="2"]');
          ?>
        </div>
      </div>
    </div>
  </section>

  <section style="background: #fafafa;padding: 80px 0;">
    <div class="container">
    <?php 
          $Sponsors_and_Parternship_page_id =21;  //Page ID
          $Sponsors_and_Parternship_page_data = get_page( $Sponsors_and_Parternship_page_id ); 
          ?>
      <div class="container_heading">
      <h5><?php the_field('sponsors_heading', $Sponsors_and_Parternship_page_id); ?></h5>
      </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
          <?php
        $i=1;
          if(have_rows('sponsors_content', $Sponsors_and_Parternship_page_id) ):?>
              <?php while(have_rows('sponsors_content', $Sponsors_and_Parternship_page_id)): the_row(); ?>
            <div class="The-Product-section-items">             
              <div class="row align-items-center">
                <div class="col sponsor">
                <h5 class="mb-5 title"><?php the_sub_field('sponsors_title');?></h5>
                  <?php $Sponsors_logo = get_sub_field('sponsors_logo'); ?>
                  <img src="<?php echo $Sponsors_logo['url']; ?>" alt="<?php echo $Sponsors_logo['alt']; ?>" />  
                </div>
              </div>
            </div>
            <?php 
              $i++;
              endwhile;
            endif;
            ?> 
      </div>
    </div>
    <div class="container mt-5">
    <?php 
          $find_Us_on_Social_Page_id = 33;  //Page ID
          $find_Us_on_Social_Page_data = get_page( $find_Us_on_Social_Page_id ); 
          ?>
      <div class="container_heading">
      <h5><?php the_field('social_title', $find_Us_on_Social_Page_id ); ?></h5>
      </div>
    </div>
    <div class="container">
      <div class="d-flex">
      <?php 
     $i=1;
          if(have_rows('social_content', $find_Us_on_Social_Page_id) ):?>
              <?php while(have_rows('social_content', $find_Us_on_Social_Page_id)): the_row(); ?>
                <div class="sponsor">
                <?php $social_logo = get_sub_field('social_logo'); ?>
                <a href="<?php echo get_sub_field('social_links'); ?>"><img src="<?php echo $social_logo['url']; ?>" /></a>
                </div>
            <?php 
              $i++;
              endwhile;
            endif;
            ?> 

      </div>
       
        </div>
            </div>
          </div> 
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer>
    <div class="container py-5">
      <div class="row">
      <?php 
          $Query_Form_id = 51;  //Page ID
          $Query_Form_data = get_page( $Query_Form_id ); 
          ?>
        <div class="col-12 col-lg-6">
          <form>
            <div class="container_heading">
              <h5 class="text-white">Have a query?</h5>
              <?php 
               echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');
              ?>
        </div>
          </form>
        </div>
        <div class="col-12 col-lg-3"></div>
        <div class="col-12 col-lg-3 pt-5 align-self-center footer-content">
          <div class="ReachUs-heading">
            <h5 class="text-white">Reach us at:</h5>
          </div>
          <div>
            <p class="ReachUs-content"><a class="text-decoration-none" style="color: #7e99a6;font-size: 14px;" href="mailto: info@sky101.in "> info@sky101.in </a></p>
            <p class="ReachUs-content"><a class="text-decoration-none" style="color: #7e99a6;font-size: 14px;" href="tel:1800-103-9747">1800-103-9747</a></p>
          </div>
        </div>
      </div>
      <p class="credits mt-5">© 2021 Sky101 · Designed & Developed by Spark Eighteen</p>
    </div>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );
?>

<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

<div <?php post_class(); ?>>
  <?php  
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('page-thumb-mine');
        }
        ?>
  <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
  <?php the_excerpt(); ?>
</div>
<?php endwhile; ?>

<?php 
wp_reset_postdata();
get_footer();
?>