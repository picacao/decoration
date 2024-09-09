<?php inframe_url ();?>
<form method="post" action="">

    
    <h4 class="mt-3">Our Products</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Category Products</label></div>
        <div class="col-md-8">        
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
    </div>

    <h4 class="mt-3">Our Room</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Category Room</label></div>
        <div class="col-md-8">        
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
    </div>

    <h4 class="mt-3">Our Articles</h4>
    <div class="row pt-2 mb-3">
        <div class="col-md-2"><label>Category Articles</label></div>
        <div class="col-md-8">        
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
    </div>
   
    <!-- Button -->
    <p><input type="submit" name="save-option-home" class="btn btn-danger" value="Save Options"/></p>  
</form>