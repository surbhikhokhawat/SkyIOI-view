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
<section class="about-section light" id="about-section">
  <div class="container h-100-per">
    <div class="row align-items-center justify-content-center h-100-per">
      <div class="col-11 col-md-9">
        <div class="row justify-content-between">
          <?php 
          $about_page_id = 40;  //Page ID
          $about_page_data = get_page( $about_page_id ); 
          ?>
          <?php 
          $i=1;
          if(have_rows('about_content', $about_page_id) ):?>
              <?php while(have_rows('about_content', $about_page_id)): the_row(); ?>
                <div class="col-12 col-md-5">
                  <div class="about-section-parts <?php if($i==2){ echo 'part-2 mb-0';}?>">
                    <?php $logo = get_sub_field('logo'); ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    <h2><?php the_sub_field('title');?></h2>
                    <?php the_sub_field('description'); ?>
                  </div>
                </div>
              <?php $i++;
            endwhile;?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section second ends here  -->
<!-- section third starts here  -->
<section class="second-section dark" id="second-section">
  <div class="container h-100-per">
    <div class="row align-items-center justify-content-center justify-content-md-between h-100-per">
      <div class="col-11 col-md-12">
        <div class="row align-items-center justify-content-center justify-content-md-between">
          <?php 
          $about_page_id = 40;  //Page ID
          $about_page_data = get_page( $about_page_id ); 
          ?>
          <div class="col-md">
            <h2><?php the_field('democratising_title', $about_page_id); ?></h2>
            <?php the_field('democratising_description', $about_page_id); ?>
          </div>
          <div class="col-md text-md-end">
            <?php $democratising_image = get_field('democratising_image', $about_page_id); ?>
            <img src="<?php echo $democratising_image['url']; ?>" alt="<?php echo $democratising_image['alt']; ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section third ends here  -->
<!-- section fourth begins here  -->
<section class="how-it-works-section light" id="how-it-works">
  <div class="container h-100-per">
    <div class="row align-items-center justify-content-center h-100-per">
      <div class="col-11 col-md-12">
        <div class="row" style="margin-bottom: 110px;">
          <?php 
          $How_it_Works_page_id =63;  //Page ID
          $How_it_Works_page_data = get_page( $How_it_Works_page_id ); 
          ?>
          <div class="col-12 col-md-6 col-lg-4">
            <h2><?php the_field('how_we_do_it_title', $How_it_Works_page_id); ?></h2>
            <?php the_field('how_we_do_it_description', $How_it_Works_page_id); ?>
          </div>
        </div>

        <div class="row">
           <?php 
          if(have_rows('how_it_works_content', $How_it_Works_page_id) ):?>
              <?php while(have_rows('how_it_works_content', $How_it_Works_page_id)): the_row(); ?>
              <div class="col-12 col-md-4">
              <div class="how-it-works-section-box pe-5">
                    <?php $logo = get_sub_field('logo'); ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    <h2><?php the_sub_field('title');?></h2>
                    <?php the_sub_field('description'); ?>
                  </div>
                </div>
              <?php 
            endwhile;?>
          <?php endif; ?>  
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section fourth ends here  -->
<!-- section fifth starts here  -->
<section class="useCase-section dark" id="usecase">
  <div class="container h-100-per">
    <div class="row align-items-center h-100-per">
      <div class="row justify-content-center justify-content-md-between">
        <?php 
          $How_it_Works_page_id =63;  //Page ID
          $How_it_Works_page_data = get_page( $How_it_Works_page_id ); 
          ?>
        <div class="col-11 col-md-12">
          <h2><?php the_field('use_case_title', $How_it_Works_page_id); ?></h2>
        </div>
        <div class="col-11 col-md-4">
          <h3><?php the_field('connect_ev_title', $How_it_Works_page_id); ?></h3>
        </div>
        <div class="col-11 col-md-4">
          <h3><?php the_field('set_the_time_title', $How_it_Works_page_id); ?></h3>
        </div>
        <div class="col-11 col-md-3">
          <h3><?php the_field('begin_smart_title', $How_it_Works_page_id); ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section fifth ends here  -->
<!-- section sixth begins here  -->
<section class="The-Product-section light" id="the-product">
  <div class="container h-100-per">
    <div class="row align-items-center justify-content-center justify-content-md-between h-100-per">
      <div class="col-11 col-md-12">
        <div class="row">
          <?php 
          $The_Product_id =91;  //Page ID
          $The_Product_data = get_page( $The_Product_id ); 
          ?>
          <div class="col">
            <h2><?php the_field('reno_e-fleet_title', $The_Product_id); ?></h2>
            <span class="product-features" ><?php the_field('reno_e-fleet_description', $The_Product_id); ?></span>
          </div>
          <div class="col-12 col-md-7 col-lg-6">
              <?php 
                $The_Product_id =91;  //Page ID
                $The_Product_data = get_page( $The_Product_id ); 
              ?>
             <?php 
          $i=1;
          if(have_rows('product_content', $The_Product_id) ):?>
              <?php while(have_rows('product_content', $The_Product_id)): the_row(); ?>
            <div class="The-Product-section-items">             
              <div class="row align-items-center">
                <div class="col-12 col-md-2 text-md-center">
                  <?php $time_of_use_logo = get_sub_field('logo'); ?>
                  <img src="<?php echo $time_of_use_logo['url']; ?>" alt="<?php echo $time_of_use_logo['alt']; ?>" />
                </div>
                <div class="col-12 col-md-10">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <?php the_sub_field('description'); ?>
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
      </div>
    </div>
  </div>
</section>
<!-- section sixth ends  -->
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