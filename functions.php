<?php
// Required Nav Walker Class_alias Menu
require_once get_theme_file_path ( 'include/login_admin/login_page.php');
// Required Nav Walker Class_alias Menu
require_once get_theme_file_path ( 'wp_bootstrap_navwalker.php' );

// Required Wiget
require_once get_theme_file_path ( 'include/wiget.php' );
require_once get_theme_file_path ( 'include/wiget-hk.php' );

// Required Admin
require_once get_theme_file_path ( 'admin/admin_setting.php' );
//
require_once get_theme_file_path ( 'include/choose_languages.php' );

// Theme setup
function wpb_theme_setup(){ 
    add_theme_support('post-thumbnails');   
    register_nav_menus(array('primary' => __('Primary Menu') ));   
}add_action('after_setup_theme','wpb_theme_setup');

// Add theme to Woocomerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}

//
function custom_excerpt_length( $length ) {
  return 20; // Thay đổi 20 bằng số lượng từ mong muốn
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//
function get_page_content_by_id($page_id) {
  $page = get_page($page_id);

  if ($page) {
      return $page->post_content;
  } else {
      return false;
  }
}
 
// Start of Paganavi 
function wp_corenavi() { 
  global $wp_query, $wp_rewrite; 
  $pages = ''; 
  $max = $wp_query->max_num_pages; 
  if (!$current = get_query_var('paged')) $current = 1; 
  $a['base'] = ($wp_rewrite->using_permalinks()) ? user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' ) : @add_query_arg('paged','%#%'); 
  if( !empty($wp_query->query_vars['s']) ) $a['add_args'] = array( 's' => get_query_var( 's' ) ); 
  $a['total'] = $max; 
  $a['current'] = $current; 
  $total = 1; //1 - display the text "Page N of N", 0 - not display 
  $a['mid_size'] = 5; //how many links to show on the left and right of the current 
  $a['end_size'] = 10; //how many links to show in the beginning and end 
  $a['prev_text'] = '&laquo; Trước'; //text of the "Previous page" link 
  $a['next_text'] = 'Sau &raquo;'; //text of the "Next page" link 
  if ($max > 1) echo '<div class="pagenavi">'; 
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Trang</span>'."\r\n"; 
  echo $pages . paginate_links($a); 
  if ($max > 1) echo '</div>'; 
  }
// End of Paganavi 

// Create category khac nhau
function wp_category_template() {
  $category = get_queried_object();
  $parent_id = $category->category_parent;
  $templates = array();
  if ( $parent_id == 0 ) {
  $templates[] = "category-{$category->slug}.php";
  $templates[] = "category-{$category->term_id}.php";
  $templates[] = 'category.php';
  } else {
  $parent = get_category( $parent_id );
  $templates[] = "category-{$category->slug}.php";
  $templates[] = "category-{$category->term_id}.php";
  $templates[] = "category-{$parent->slug}.php";
  $templates[] = "category-{$parent->term_id}.php";
  $templates[] = 'category.php';
  }
  return locate_template( $templates );
  }  add_filter( 'category_template', 'wp_category_template' );
  
  // Created single post khac nhau
  add_filter('single_template', 'check_for_category_single_template');
  function check_for_category_single_template( $t )
  {
  foreach( (array) get_the_category() as $cat )
  {
  if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
  if($cat->parent)
  {
  $cat = get_the_category_by_ID( $cat->parent );
  if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
  }
  }
  return $t;
}

//
function enqueue_media_uploader_scripts() {
  wp_enqueue_media(); // Để tải các script của WordPress Media Uploader
  wp_enqueue_script('custom-media-uploader', get_template_directory_uri() . '/static/js/custom-media-uploader.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader_scripts');
  
// Begin Plugin mycode - register shortcode plugin
add_shortcode('phpinclude', 'PHP_Include');
?>