<div class="col-12 col-md-4 text-center">
                    <article class="lead-page-blog-item mb-4 mb-md-0 animation" data-animation="slide-top" data-delay="0s">
                        <a class="blog-image-link" href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('blog-list');?>
                        </a>
                        <div class="lead-page-blog-item-description " >
                            <p class="lead-page-blog-item-date">
                               <?php the_field('single_blog_date'); ?>
                            </p>
                            <h2> <a class="lead-page-blog-item-link text-uppercase" href="<?php the_permalink();?>">
                                   <?php the_field('single_blog_title')?>
                                </a></h2>
                        </div>

                    </article> 
                      </div>   