<?php get_header(); ?>
<?php 
  $currentlang = get_bloginfo('language');
  $chose_lang = choose_languages();  
?>
<section id="billboard" class="overflow-hidden style2">
    <div class="banner-item"
      style="background-image: url(<?php echo get_option( 'file_url_banner' );?>); background-repeat: no-repeat; width: 100%; height: 682px;background-position: center; display: flex; align-items: center;
    background-repeat: no-repeat;
    width: 100%;       
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    float: left;    
    box-sizing: border-box;
      ">
      <div class="banner-content padding-large text-center mx-auto">
        <h1 class="display-1 text-uppercase text-light pb-2"><?php echo $chose_lang['banner_title'];?></h1>
        <p class="mx-auto text-light"><?php echo $chose_lang['banner_short'];?></p>
        <a href="<?php echo home_url().$chose_lang['link_button'];?>" class="btn btn-medium btn-arrow btn-bg-light position-relative mt-5">
          <span class="text-uppercase"><?php echo $chose_lang['banner_button'];?></span>
          <svg class="arrow-right position-absolute" width="18" height="20">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </div>
    </div>
</section>

<section id="featured-products" class="product-store position-relative padding-large mt-4 container">
      <div class="container-fluid">
        <div class="row">
          <div class="display-header pb-3 d-flex justify-content-between flex-wrap col-md-12">
            <h2 class="display-2 text-dark text-uppercase"><?php echo $chose_lang['our_products'];?></h2> 
            <a href="#" class="btn btn-medium btn-arrow btn-normal position-relative">
              <!-- <span class="text-uppercase">Shop All</span>            
              <svg class="arrow-right position-absolute" width="18" height="20">
                <use xlink:href="#arrow-right"></use>
              </svg> -->
            </a>
          </div>
        </div>
        <div class="row">
          <div id="featured-swiper" class="product-swiper col-md-12">
            <div class="swiper">
              <div class="swiper-wrapper">
    <?php   
    $featured_query = array(
        'category_name' => get_option('productsset_category'),
        'post_type'    =>    'post',
        'order' => 'DESC', 
        'orderby'    => 'date',
        'posts_per_page' => 3
        
    );
    global $post;
    $featured_query = new WP_Query( $featured_query );
    if( $featured_query->have_posts() ) : while( $featured_query->have_posts() ) : $featured_query->the_post();   
?>    
                <div class="swiper-slide">
                  <div class="product-card image-zoom-effect link-effect d-flex flex-wrap">
                    <div class="image-holder">
                    <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid post-image']); ?></a>
                    </div>
                    <div class="cart-concern">
                      <h3 class="card-title pt-3 text-primary">
                      <a href="<?php the_permalink() ?>"><?php echo $post->post_title ; ?></a>
                      </h3>
                     
                    </div>
                  </div>
                </div>
      <?php  endwhile; endif; ?>           
              </div>
            </div>
            <div class="swiper-pagination text-center mt-5"></div>
          </div>
        </div>
      </div>      
    </section>
    <section id="testimonials" class="position-relative container">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
            </div>
            <div class="swiper testimonial-swiper">
              <div class="quotation text-center">
                <svg class="quote">
                  <use xlink:href="#quote" />
                </svg>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4"><?php echo $chose_lang['quote_content_1'];?></blockquote>
                    <div class="author-detail">
                      <div class="name text-primary text-uppercase pt-2"><?php echo $chose_lang['quote_author_1'];?></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4"><?php echo $chose_lang['quote_content_2'];?></blockquote>
                    <div class="author-detail">
                      <div class="name text-primary text-uppercase pt-2"><?php echo $chose_lang['quote_author_2'];?></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4"><?php echo $chose_lang['quote_content_3'];?></blockquote>
                    <div class="author-detail">
                      <div class="name text-primary text-uppercase pt-2"><?php echo $chose_lang['quote_author_3'];?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg>
            </div>
          </div>
        </div>
      </div>      
      <div class="swiper-pagination text-center position-absolute"></div>
    </section>

    <section id="collections" class="position-relative padding-large container">
      <div class="container-fluid">
        <div class="row">
          <div class="swiper collection-swiper">
            <div class="swiper-wrapper">
            <?php   
    $collections_query = array(
        'category_name' => get_option('roomset_category'),
        'post_type'    =>    'post',
        'order' => 'DESC', 
        'orderby'    => 'date',
        'posts_per_page' => 3
        
    );
    global $post;
    $collections_query = new WP_Query( $collections_query );
    if( $collections_query->have_posts() ) : while( $collections_query->have_posts() ) : $collections_query->the_post();   
?>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <!-- <h3 class="card-title text-uppercase">
                      <a href="shop.html">Living Rooms</a>
                    </h3> -->
                  </div>

                  <div class="image-overlay position-relative" width="100%">
                    <div class="product-image">
                      <!-- <img src="<?php bloginfo('template_url');?>/static/img/product-item4.jpg" alt="product-item" class="product-image img-fluid"> -->
                      <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('large', ['class' => 'img-fluid post-image']); ?></a>
                      <div class="text-box box-slide position-absolute"  >
                        <div class="text-content p-5 bg-light">
                        <h3><a href="<?php the_permalink() ?>"><?php echo $post->post_title ; ?></a></h3>
                        <?php echo wp_trim_words($post->post_content, 35, ''); ; ?>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div> 
              <?php  endwhile; endif; ?>  
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>

    <section id="latest-blog" class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="display-header d-flex flex-wrap justify-content-between pb-3">
              <h2 class="display-2 text-dark text-uppercase"><?php echo $chose_lang['our_articles'];?></h2>              
              
            </div>
          </div>
        </div>
        <div class="row g-3 post-grid">
<?php   
    $args_my_query = array(
        'category_name' => get_option('articlesset_category'),
        'post_type'    =>    'post',
        'order' => 'DESC', 
        'orderby'    => 'date',
        'posts_per_page' => 3
        
    );
    global $post;
    $my_query = new WP_Query( $args_my_query );
    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();   
?>
  
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card-item">
              <div class="card border-0 bg-transparent">
                <div class="card-image">               
                <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('medium', ['class' => 'img-fluid post-image']); ?></a>
                </div>
              </div>
              <div class="card-body p-0 mt-4">
                <h3 class="card-title">
                <a href="<?php the_permalink() ?>"><?php echo $post->post_title ; ?></a>
                </h3>
                <p><?php echo wp_trim_words($post->post_content, 20, ''); ; ?></p>
                
              </div>
            </div>
          </div>
<?php  endwhile; endif; ?>          
        </div>
      </div>
    </section>
<?php get_footer(); ?>