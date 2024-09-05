<?php
add_action('admin_menu','namsan_admin_setting');
function namsan_admin_setting(){
      // Add parent menu admin
      add_menu_page(
        'Namsan Options',
        'Namsan Options',
        'manage_options',
        'namsan',//menu_slug
        'namsan_admin_dashboard',
        'dashicons-shield',
        25
    );
    // add_submenu_page(
    //         'namsan',
    //         'Settings',
    //         'Settings',
    //         'manage_options',
    //         'namsan-settings',
    //         'namsan_admin_page_settings',
    //         26
    // );
    
} ?>
<?php
// Admin page html callback
 function namsan_admin_dashboard() {
   // check user capabilities
   if ( ! current_user_can( 'manage_options' ) ) {
     return;
   }  
   //Get the active tab from the $_GET param
   $default_tab = null;
   $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;  
?>
<!-- MainTab .wrap -->  
<div class="wrap">
 
<h1><?php //echo esc_html( get_admin_page_title() ); ?></h1>
<!-- Here are our tabs -->
    <nav class="nav-tab-wrapper">
    <a href="?page=namsan&tab=settings" class="nav-tab <?php if($tab==='settings'):?>nav-tab-active<?php endif; ?>">Settings</a>
    <a href="?page=namsan&tab=about" class="nav-tab <?php if($tab==='about'):?>nav-tab-active<?php endif; ?>">AboutUs</a>
    </nav>

    <div class="tab-content">
    <?php switch($tab) :
        case 'settings': 
            setup ();
        break;        
        case 'about':
            echo 'About';
        break;
        default:            
            setup ();
        break;
    endswitch; ?>
    </div> 
  
   </div>
  
  
<?php
}

function setup () {
    if (!empty($_POST['save-option-settings']))
    {
            // Khai báo

            $setup_mem_discount = $_POST['setup_mem_discount'];
            $setup_gst_percent = $_POST['setup_gst_percent'];

            $setup_address = $_POST['setup_address'];
            $setup_email = $_POST['setup_email'];
            $setup_phone = $_POST['setup_phone']; 
            
            $setup_facebook = $_POST['setup_facebook']; 
            $setup_instagram = $_POST['setup_instagram']; 
            $setup_twitter = $_POST['setup_twitter']; 
    
            // Cập nhật (nếu chưa có thì hệ thống tự thêm mới)
            update_option('setup_mem_discount', $setup_mem_discount);
            update_option('setup_gst_percent', $setup_gst_percent);


            update_option('setup_address', $setup_address);
            update_option('setup_email', $setup_email);
            update_option('setup_phone', $setup_phone);   
            
            update_option('setup_facebook', $setup_facebook);   
            update_option('setup_instagram ', $setup_instagram ); 
            update_option('setup_twitter ', $setup_twitter ); 
    } 
    // get text
    $get_setup_address = get_option('setup_address');
    $get_setup_email = get_option('setup_email');
    $get_setup_phone = get_option('setup_phone');
    
    $get_setup_facebook = get_option('setup_facebook');
    $get_setup_instagram = get_option('setup_instagram');
    $get_setup_twitter = get_option('setup_twitter');

    require_once ( 'admin_tab_setup.php' ) ;      
}
?>
<?php function inframe_url (){ ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<?php }?>