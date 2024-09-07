<?php get_header(); ?>

    <div class="post-wrap my-5 py-5">
        <div class="container">
          <div class="row">
            <main class="post-list post-card-small">
                <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <article class="post-item pb-5 image-zoom-effect">
                      <div class="post-image overflow-hidden">
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>
                      </div>
                      <div class="post-content">
                        <div class="post-meta text-uppercase py-3">
                          <span class="post-category">
                          <?php
                $categories = get_the_category();
                foreach( $categories as $category ) {
                    echo $category->name . ' ';
                }
            ?>
                          </span> / <span class="meta-date"><?php the_date(); ?></span>
                        </div>
                        <h5 class="post-title text-uppercase">
                          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h5>
                        <p><?php the_content_rss('',false,'',20);?></p>
                      </div>
                    </article>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </main>
            </div>
            </div>
            </div>



<?php get_footer(); ?>