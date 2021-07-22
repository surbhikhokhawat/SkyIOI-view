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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.scss" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css.map" type="text/css" />
  <?php wp_head(); ?>
</head>
<!-- section first begins here  -->

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
   <!-- Navbar -->
   <nav class="navbar_header">
   <div class="container">
     <div class="home-wrapper">
     <div class="brand_logo">
    <?php 
         $home_page_id = 6;  //Page ID
         $home_page_data = get_page( $home_page_id ); 
         $title = $home_page_data->post_title; 
         $content = apply_filters('the_content', $home_page_data->post_content);
        ?>
        <?php $logo = get_field('logo'); ?>
        <img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
          <h1><?php the_field('title', $home_page_id); ?></h1>
    </div>  
    <ul>
      <li><a href="#">Race Categories</a></li>
      <li><a href="#">Sponsor & Partnership</a></li>
      <li><a href="#">Find us on Social</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
   </div>
   </div>
   </div>
  </nav>
  <section class="landing-image">
    <div class="logo-content-image">
        <?php $logo_content_image = get_field('logo_content_image', $home_page_id); ?>
        <img class="w-100" src="<?php echo $logo_content_image['url']; ?>" alt="<?php echo $logo_content_image['alt']; ?>" />
    </div>
</section>

  <!-- Topbar header -->
 
  <!-- section first ends here  -->