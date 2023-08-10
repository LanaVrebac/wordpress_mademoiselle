<?php
/* Template Name: About Us Page */
get_header();
?>

<main>
    <?php get_template_part('/template-parts/lead-section'); ?>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <section class=" lead-page-blog-section about p-5">

                <div class="container ">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <article class="about-item">
                                <h2 class=" text-uppercase mb-4">
                                   <?php the_field('about_title'); ?> 
                                </h2>
                                <p class="">
                                  <?php the_content();?>  
                                </p>
                                
                            </article>

                        </div>   


                        <div class="col-12 col-md-4 justify-content-md-end">
                            <aside>
                              <?php get_sidebar();?>  
                            </aside>  
                            
                            
                        </div><!--col end-->    
                            
                            
                    </div><!--row end-->

                </div><!--container end-->

            </section>
            <?php
        }
    }
    ?>


</main>

<?php get_footer(); ?>

