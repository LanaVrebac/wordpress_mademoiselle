<?php
get_header();
?>
<main>
    <?php get_template_part('/template-parts/lead-section') ?>




    <section class="lead-page-blog-section p-5">
        <div class="container">
            <h2 class="section-title"><?php the_content(); ?></h2>

            <?php
            $arg = array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'orderby' => 'ASC'
            );
            $homepageBlog = new WP_Query($arg);
            if ($homepageBlog->have_posts()) {
                ?>
                <div class="row">
                    <?php
                    while ($homepageBlog->have_posts()) {
                        $homepageBlog->the_post();
                        ?>
                        <?php get_template_part('/template-parts/blog-template') ?>  



                        <?php
                    }
                    ?>  

                </div>

                <?php
            } else {
                ?>
                <div class='jumbotron'>
                    <h3>There are no blog posts to show.</h3>  
                </div>

                <?php
            }



            wp_reset_postdata();
            ?>

        </div><!--container end-->

    </section>


   
   <?php get_template_part('/template-parts/services-template')?>

    <section class="our-team">
        <div class="container ">
            <h2 class="section-title">
                <?php the_field('lead_carousel_title'); ?>
            </h2>
            <div class="our-team-slider owl-carousel owl-theme border ">
                <article class="our-team-item ">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6  mr-md-5">  
                            <figure class="our-team-img">
                                <img src="<?php the_field('lead_carousel_image'); ?>" alt='' >
                            </figure> 
                        </div>
                        <div class="col-12  col-md-4">
                            <div class="our-team-content">
                                <h5 class="our-team-content-title"><?php the_field('lead_carousel_text_title'); ?></h5>
                                <p class="our-team-content-description">
                                    <?php the_field('lead_carousel_text'); ?>
                                </p>  
                            </div>
                        </div>
                    </div><!--row end-->  
                </article>
                <article class="our-team-item ">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6 mr-md-5">  
                            <figure class="our-team-img">
                <img src="<?php the_field('lead_carousel_image'); ?>" alt='' >

                            </figure> 
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="our-team-content">
                                <h5 class="our-team-content-title"><?php the_field('lead_carousel_text_title')?></h5>
                                <p class="our-team-content-description">
                                    <?php the_field('lead_carousel_text');?>
                                </p>  
                            </div>
                        </div>
                    </div><!--row end-->  
                </article>
                <article class="our-team-item ">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6  mr-md-5">  
                            <figure class="our-team-img">
                 <img src="<?php the_field('lead_carousel_image'); ?>" alt='' >
 
                            </figure> 
                        </div>
                        <div class="col-12  col-md-4">
                            <div class="our-team-content">
                                <h5 class="our-team-content-title"><?php the_field('lead_carousel_text_title')?></h5>
                                <p class="our-team-content-description">
                                    <?php the_field('lead_carousel_text'); ?>
                                </p>  
                            </div>
                        </div>
                    </div><!--row end-->  
                </article>
            </div>                  



        </div><!--container end-->

    </section>



</main>


<?php get_footer(); ?>