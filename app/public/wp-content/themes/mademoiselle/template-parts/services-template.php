<section class="services" id="services">
        <div class="container">
<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            the_content();
        }
    }
    ?>
            
            <?php 
            $arg =array(
            'posts_per_page'=>-1,
            'post_type'=>'our_services',
            'order'=>'ASC',
            'orderby'=>'date'
            );
            $services = new WP_Query($arg);
            if($services->have_posts()){
               ?>
            <article class="services-item text-center  h-100 animation" data-animation="zoom" data-delay="0.2s">
                <div class="row no-gutters ">
                  <?php
                while($services->have_posts())  {
                    $services->the_post();
                    ?>
                    <div class="col-12 col-md-6 ">
                        <div class="services-content ">
                            <p class="services-description  "  >
                                <?php the_title();?>
                            </p> 
                            <a class="btn border-dark text-uppercase " href="<?php the_permalink();?>">
                               read more
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">

                        <a class=" services-link-img d-block "  href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('services-list');?>
                        </a>
                    </div> 
                    
                    
                    <?php
                }
                  
                  ?>  
                </div>
                
            </article>
            
             <?php
            }
            wp_reset_postdata();
            ?>
            
                   


        </div><!--container end-->

    </section><!--services end-->