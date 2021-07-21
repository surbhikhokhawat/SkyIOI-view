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
  <section style="background: #fafafa;padding: 80px 0;">
    <div class="container">
      <div class="container_heading">
        <h5>Race Categories</h5>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2021/05/08/11/24/city-6238228_960_720.jpg" class="d-block w-100"
              alt="..." style="height: 50vh;object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2021/05/08/11/24/city-6238228_960_720.jpg" class="d-block w-100"
              alt="..." style="height: 50vh;object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2021/05/08/11/24/city-6238228_960_720.jpg" class="d-block w-100"
              alt="..." style="height: 50vh;object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="slide_control_btn" aria-hidden="true"><img
              src="assets/images/icons/outline_arrow_back_ios_white_24dp.png" alt=""></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="slide_control_btn" aria-hidden="true"><img
              src="assets/images/icons/arrow_forward_ios_white_24dp.svg" alt=""></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section style="background: #fafafa;padding: 80px 0;">
    <div class="container">
      <div class="container_heading">
        <h5>Sponsors and Partnership</h5>
      </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col sponsor">
          <h5 class="title">Title Sponsor</h5>
          <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c513.png" alt="" class="brand_logo">
        </div>
        <div class="col sponsor">
          <h5 class="title">Title Sponsor</h5>
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/HubSpot_Logo.svg/1280px-HubSpot_Logo.svg.png"
            alt="" class="brand_logo">
        </div>
        <div class="col sponsor">
          <h5 class="title">Title Sponsor</h5>
          <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c51f.png" alt="" class="brand_logo">
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="container_heading">
        <h5>Find us on Social</h5>
      </div>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6">
        <div class="col sponsor">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png"
            alt="" width="30px">
        </div>
        <div class="col sponsor">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/600px-Instagram_icon.png"
            alt="" width="30px">
        </div>
      </div>
    </div>

  </section>



  <!-- Footer -->
  <footer>
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-lg-4">
          <form>
            <div class="container_heading">
              <h5 class="text-white">Have a query?</h5>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control py-3" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control py-3" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <input type="number" class="form-control py-3" id="email" placeholder="Add your phone number">
            </div>
            <div class="mb-3">
              <textarea placeholder="Your message" class="form-control" id="message" rows="4"></textarea>
            </div>
           
            <button type="submit" class="btn btn-danger w-100 py-3">Submit</button>
          </form>
        </div>
        <div class="col-12 col-lg-4"></div>
        <div class="col-12 col-lg-4 pt-5">
          <div class="container_heading">
            <h5 class="text-white">Reach us at:</h5>
          </div>
          <div>
            <p><a class="text-decoration-none" style="color: #7e99a6;font-size: 14px;" href="mailto:hello@landify.com">hello@landify.com</a></p>
            <p><a class="text-decoration-none" style="color: #7e99a6;font-size: 14px;" href="tel:+91 9876543210">+91 9876543210</a></p>
            <p class="" style="color: #7e99a6;font-size: 14px;">772 Lyonwood Ave <br> Walnut, CA 91789</p>
          </div>
        </div>
      </div>
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