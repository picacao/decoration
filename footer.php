<div class="container-fluid">
    <div class="row pb-4">
        <div class="col-md-3">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') );?>
        </div>
        <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid One'));?>
        </div>
        <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Two'));?>
        </div>
        <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') );?>
        </div>
    </div>
    <div class="row border-top text-center pt-4">
        <div class="col-md-12">
            <?php echo get_option('footer_line');?>
        </div>
    </div>
</div>
<script src="<?php bloginfo('template_url');?>/static/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_url');?>/static/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url');?>/static/js/bootstrap.min.js"></script>
<?php wp_footer(  );?>
</body>
</html>