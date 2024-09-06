<?php 
/*
Template Name: Page
*/
get_header(); ?>

<div class="container pt-5 pb-5">
<div class="row">
    <div class="col-md-12">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="display-1 pb-5 pt-5"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>
</div>
</div>

<?php get_footer(); ?>