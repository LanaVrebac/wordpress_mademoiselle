<?php
get_header();
?>

<main>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <section class="services-single">
                <div class="container">
                    <article class="services-single-item">
                        <div class="row justify-content-md-between">
                            <div class="col-12 col-md-6">

                                <figure class="services-single-img " >
                                    <?php the_post_thumbnail('services-list'); ?>                                 
                                </figure> 

                            </div><!col-left-end-->
                            <div class="col-12 col-md-5">

                                <h2 class="services-single-title text-uppercase"> <?php the_title(); ?></h2>
                                <div class="services-single-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>   



                        </div> <!--row end-->

                    </article>

                </div><!--container end-->

            </section><!--services-single-end-->

            <?php
        }
        ?>

        <?php
    }
    ?>

    <?php
    $arg = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'order' => 'ASC',
        'orderby' => 'rand'
    );
    $blog = new WP_Query($arg);
    if ($blog->have_posts()) {
        ?>
        <div class="container">
            <h2 class="section-title mb-4">
                Stay Up with the Latest Beauty Trends  
            </h2>
            <div class="row">
                <?php
                while ($blog->have_posts()) {
                    $blog->the_post();
                    ?>
                    <div class="col-12 col-md-4 text-center">
                        <article class="lead-page-blog-item mb-4 mb-md-0 animation" data-animation="slide-top" data-delay="0s">
                            <a class="blog-image-link" href="<?php the_permalink();?>">
                                <?php the_post_thumbnail('blog-list'); ?>
                            </a>
                            <div class="lead-page-blog-item-description " >
                                <p class="lead-page-blog-item-date">
                                   <?php the_field('single_blog_date');?>  
                                </p>
                                <h2> <a class="lead-page-blog-item-link text-uppercase" href="#">
                                        <?php the_field('single_blog_title'); ?> 
                                    </a></h2>
                            </div>

                        </article>
                    </div><!--col end-->

                    <?php
                }
                ?>

            </div>   
        </div>


    <?php
} else {
    ?>
        <div class='jumbotron'>
            <h2>There are no more blog posts on this page.</h2>   
        </div>

    <?php
}


wp_reset_postdata();
?>









</main>

<?php get_footer(); ?>