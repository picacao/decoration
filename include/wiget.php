<?php
function new_widgets_init() {
        
    register_sidebar( array(
      'name' => 'Side Bar',
      'id' => 'side-bar',
      'description' => __( 'Wiget Sidebar'),
      'before_widget' => '<div id="%1$s" class="sidebar">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Right',
        'id' => 'footer-right',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Mid One',
        'id' => 'footer-mid-one',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Mid Two',
        'id' => 'footer-mid-two',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Left',
        'id' => 'footer-left',
        'description' => __( 'footer ở trang chủ'),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    
  } add_action( 'init', 'new_widgets_init' );
  
?>