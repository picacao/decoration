<?php get_header(); ?>

<section id="billboard" class="overflow-hidden style2">
    <div class="banner-item"
      style="background-image: url(<?php bloginfo('template_url');?>/static/img/banner-image.jpg); background-repeat: no-repeat; width: 100%; height: 682px;background-position: center; display: flex; align-items: center;
    background-repeat: no-repeat;
    width: 100%;       
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    float: left;    
    box-sizing: border-box;
      ">
      <div class="banner-content padding-large text-center mx-auto">
        <h1 class="display-1 text-uppercase text-light pb-2">wooden table set</h1>
        <p class="mx-auto text-light">Aliquet donec ut arcu risus amet mattis diam gravida. Ac vestibulum quis proin in
          aliquam et et auctor. Amet urna est arcu euismod egestas morbi nunc lacus. Nec id rutrum mauris commodo
          habitant amet quisque. Velit ornare pellentesque facilisi in odio nibh.</p>
        <a href="shop.html" class="btn btn-medium btn-arrow btn-bg-light position-relative mt-5">
          <span class="text-uppercase">Shop Now</span>
          <svg class="arrow-right position-absolute" width="18" height="20">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </div>
    </div>
</section>

<section id="featured-products" class="padding-large pt-0">
    <div class="container-fluid">
      <div class="display-header pb-3 d-flex justify-content-between flex-wrap">
        <h2 class="display-2 text-dark text-uppercase">Our Products</h2>
        <a href="shop.html" class="btn btn-medium btn-arrow btn-normal position-relative">
          <span class="text-uppercase">Shop All</span>
          <svg class="arrow-right position-absolute" width="18" height="20">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </a>
      </div>
      <div class="feat-product-grid">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="swiper feat-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="image-holder">
                    <img src="images/featured-large-item1.jpg" alt="room" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <img src="images/featured-large-item2.jpg" alt="room" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <img src="images/featured-large-item1.jpg" alt="room" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="featured-masonry row">
              <div class="col-lg-6">
                <div class="row">
                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item2.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item4.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item2.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item4.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item2.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">

                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item3.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item5.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item3.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item5.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>

                  <div class="featured-item col-12">
                    <figure>
                      <img src="images/featured-item3.jpg" alt="furniture" class="img-fluid">
                      <figcaption>
                        <h3 class="card-title text-center"><a href="#">Black Sofa Set</a></h3>
                      </figcaption>
                    </figure>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>