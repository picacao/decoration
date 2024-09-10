<?php $currentlang = get_bloginfo('language'); ?>
<footer class="mt-5">
<div class="container">
    <div class="row pb-4">
        <div class="col-md-3">
        <?php         
        if($currentlang == "en-US"){
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') );
        } elseif($currentlang == "zh-HK"){
            if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right HK') );
        }
        ?>
        </div>
        <div class="col-md-3">
        <?php         
        if($currentlang == "en-US"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid One'));
        } elseif($currentlang == "zh-HK"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid One HK')); 
        }
        ?>
        </div>
        <div class="col-md-3">
        <?php
        if($currentlang == "en-US"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Two'));
        } elseif($currentlang == "zh-HK"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Two HK'));
        }
        ?>
        </div>
        <div class="col-md-3">
        <?php         
        if($currentlang == "en-US"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') );
        } elseif($currentlang == "zh-HK"){
            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left HK') );
        }
        ?>
        </div>
    </div>
    <div class="row border-top text-center pt-4 pb-4">
        <div class="col-md-12">
            <?php echo get_option('footer_line');?>
        </div>
    </div>
</div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<?php wp_footer( );?>
<script src="<?php bloginfo('template_url');?>/static/js/swiper-bundle.min.js"></script>
</body>
</html>