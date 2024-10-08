<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="<?php bloginfo('template_url');?>/static/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/static/css/bootstrap-icons.css">
  <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">
  <script src="<?php bloginfo('template_url');?>/static/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/static/js/main.js"></script>
  <script src="<?php bloginfo('template_url');?>/static/js/plugins.js"></script>
  <script src="<?php bloginfo('template_url');?>/static/js/script.js"></script>
  <script src="<?php bloginfo('template_url');?>/static/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="<?php bloginfo('template_url');?>/static/js/popper.min.js"></script>
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<div class="container">
<div class="row mt-2">
<div class="col-md-3">
  <a href="<?php echo site_url();?>"><img src="<?php bloginfo('template_url');?>/static/img/main-logo.png"></a>
</div>
<div class="col-md-8">
<nav class="navbar navbar-expand-lg navbar-custom  navbar-light p-0">
<div class="container-fluid">
<a href="<?php echo site_url();?>" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">

 </a>
<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon top-bar">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path d="M2 3.5A.5.5 0 0 1 2.5 3h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zM2.5 7a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zM2 11.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
</span>
<span class="toggler-icon middle-bar"></span>
<span class="toggler-icon bottom-bar"></span>
</button>
<?php
wp_nav_menu( array(
'menu'=> 'primary',
'theme_location'    => 'primary',
'depth'             => 2,
'container'         => 'div',
'container_class'   => 'collapse navbar-collapse',
'container_id'      => 'navbarSupportedContent',
'menu_class'        => 'navbar-nav mr-auto',
'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
'walker'            => new wp_bootstrap_navwalker())
);
?>
</div>
</nav>
</div>
<div class="col-md-1 col-sm-6 pt-2 d-flex justify-content-center">
<?php pll_the_languages(array('show_flags'=>1,'show_names'=>0));?>
</div>
</div>
</div>
<style>
li.lang-item {
    float: left;
    padding-right: 10px;
    list-style: none;
    padding-top: 6px;
}
li.lang-item img {
  float:left;
  width: 25px !important;
  
}

</style>