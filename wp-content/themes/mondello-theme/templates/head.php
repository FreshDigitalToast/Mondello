<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/svg+xml" href="/Mondello-Favicon.svg">
  <?php wp_head(); ?>
  <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.min.js"></script><![endif]-->
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <!-- Start Slide -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/superslides/stylesheets/superslides.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/superslides/jquery.easing.1.3.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/superslides/jquery.animate-enhanced.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/superslides/hammer.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/superslides/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
  <!-- End Slide -->
</head>
