<?php
function new_widgets_init_hk() {
        
    register_sidebar( array(
      'name' => 'Side Bar HK',
      'id' => 'side-bar-hk',
      'description' => __( 'Wiget Sidebar'),
      'before_widget' => '<div id="%1$s" class="sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Right HK',
        'id' => 'footer-right-hk',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Mid One HK',
        'id' => 'footer-mid-one-hk',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Mid Two HK',
        'id' => 'footer-mid-two-hk',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Left HK',
        'id' => 'footer-left-hk',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    
  } add_action( 'init', 'new_widgets_init_hk' );
  
?>