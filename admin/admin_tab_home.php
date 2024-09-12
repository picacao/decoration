<?php inframe_url ();?>
<form method="post" action="">


    <h4 class="mt-3">Banner File</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Banner Logo</label></div>
        <div class="col-md-8">        
        <input type="text"  id="file_url_banner" name="file_url_banner" value="<?php echo get_option( 'file_url_banner' )?>" class="form-control" readonly>
        <input type="button" id="load_media_button" class="button" value="Choose File Media">

        </div> 
    </div>

    
    <h4 class="mt-3">Our Products</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Category Products</label></div>
        <div class="col-md-5">        
        <?php
        $sl_products_categogry= get_option('productsset_category');
        $categories_products = get_categories();        
        echo '<select name="productsset_category" class="form-select">';        
        foreach ($categories_products as $category_products) {
            echo '<option value="' . $category_products->slug . '"';
            if ($sl_products_categogry == $category_products->slug) {
                echo ' selected';
            }
            echo '>' . $category_products->name . '</option>';
        }        
        echo '</select>';
        ?>
        </div> 
        <div class="col-md-5">
        <?php
        $sl_products_categogry_hk= get_option('productsset_category_hk');
        $categories_products_hk = get_categories();        
        echo '<select name="productsset_category_hk" class="form-select">';        
        foreach ($categories_products_hk as $category_products_hk) {
            echo '<option value="' . $category_products_hk->slug . '"';
            if ($sl_products_categogry_hk == $category_products_hk->slug) {
                echo ' selected';
            }
            echo '>' . $category_products_hk->name . '</option>';
        }        
        echo '</select>';
        ?> 
        </div>
    </div>

    <h4 class="mt-3">Our Room</h4>
    <div class="row pt-2 mb-3" hidden>
        <div class="col-md-2"><label>Category Room</label></div>
        <div class="col-md-5">        
        <?php
        $sl_room_categogry= get_option('roomset_category');
        $categories_room = get_categories();        
        echo '<select name="roomset_category" class="form-select">';        
        foreach ($categories_room as $category_room) {
            echo '<option value="' . $category_room->slug . '"';
            if ($sl_room_categogry == $category_room->slug) {
                echo ' selected';
            }
            echo '>' . $category_room->name . '</option>';
        }        
        echo '</select>';
        ?>
        </div> 
        <div class="col-md-5">
        <?php
        $sl_room_categogry_hk= get_option('roomset_category_hk');
        $categories_room_hk = get_categories();        
        echo '<select name="roomset_category_hk" class="form-select">';        
        foreach ($categories_room_hk as $category_room_hk) {
            echo '<option value="' . $category_room_hk->slug . '"';
            if ($sl_room_categogry_hk == $category_room_hk->slug) {
                echo ' selected';
            }
            echo '>' . $category_room_hk->name . '</option>';
        }        
        echo '</select>';
        ?>
        </div>
    </div>

    <h4 class="mt-3">Our Articles</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Category Articles</label></div>
        <div class="col-md-5">        
        <?php
        $sl_articles_categogry= get_option('articlesset_category');
        $categories_articles = get_categories();        
        echo '<select name="articlesset_category" class="form-select">';        
        foreach ($categories_articles as $category_articles) {
            echo '<option value="' . $category_articles->slug . '"';
            if ($sl_articles_categogry == $category_articles->slug) {
                echo ' selected';
            }
            echo '>' . $category_articles->name . '</option>';
        }        
        echo '</select>';
        ?>
        </div>
        <div class="col-md-5">
        <?php
        $sl_articles_categogry_hk= get_option('articlesset_category_hk');
        $categories_articles_hk = get_categories();        
        echo '<select name="articlesset_category_hk" class="form-select">';        
        foreach ($categories_articles_hk as $category_articles_hk) {
            echo '<option value="' . $category_articles_hk->slug . '"';
            if ($sl_articles_categogry_hk == $category_articles_hk->slug) {
                echo ' selected';
            }
            echo '>' . $category_articles_hk->name . '</option>';
        }        
        echo '</select>';
        ?>
        </div> 
    </div>
   
    <!-- Button -->
    <p><input type="submit" name="save-option-home" class="btn btn-danger" value="Save Options"/></p>  
</form>