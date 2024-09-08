<?php get_header(); ?>

<?php 
$page_content = get_page_content_by_id(48);
if ($page_content) {
    echo $page_content;
} else {
    echo "Page not found.";
}
?>

<?php get_footer(); ?>