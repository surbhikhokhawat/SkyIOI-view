<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri();?>/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css" type="text/css" />
  <?php wp_head(); ?>
</head>
<!-- section first begins here  -->

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <section class="first-section dark" id="first-section">
    <div class="container h-100-per">
      <div class="row align-items-center justify-content-center h-100-per">
        <div class="col-12 text-center logo">
          <?php 
         $home_page_id = 7;  //Page ID
         $home_page_data = get_page( $home_page_id ); 
         $title = $home_page_data->post_title; 
         $content = apply_filters('the_content', $home_page_data->post_content);
        ?>
        <?php $logo = get_field('logo'); ?>
        <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
          <h1><?php the_field('title', $home_page_id); ?></h1>
        </div>
        <div class="unique-navbar">
          <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                    <a class="nav-link scrollto" href="#about-section">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scrollto" href="#how-it-works">How It Works?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scrollto" href="#the-product">The Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link scrollto" href="#contactus">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- section first ends here  -->