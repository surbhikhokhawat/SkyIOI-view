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
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.scss" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css.map" type="text/css" />
  <?php wp_head(); ?>
</head>
<!-- section first begins here  -->

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
   <!-- Navbar -->
   <nav class="navbar_header">
    <div class="brand_logo"><a href="#"><span style="color: #2492b6;">SKY</span><span
          style="color: #b81a12;">IOI</span></a></div>
    <ul>
      <li><a href="#">Race Categories</a></li>
      <li><a href="#">Sponsor & Partnership</a></li>
      <li><a href="#">Find us on Social</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
  </nav>

  <!-- Topbar header -->
  <div class="topbar_header">

  </div>
  <!-- section first ends here  -->