<?php
function remove_logo() {    
    echo wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/include/login_admin/login.css', array(), '1.0.0', 'all' );
}
add_action('login_head', 'remove_logo');

// Remove logo trên admin login
function cs_login_url() {
    return home_url(); // Return homepage
}
add_filter('login_headerurl', 'cs_login_url');

// Change title logo
function cs_login_title() {
    return 'Home';
}
add_filter('login_headertext', 'cs_login_title');
?>