<?php
get_header();
?>

<main>

    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();
            $featuredImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <section class="blog-single-section" >
                <div class="container">
                    <div class="row justify-content-md-between">
                        <div class="col-12  col-md-5">
                            <article class="blog-single-content px-4 py-5 animation" data-animation="slide-right">
                                <p class="date-info mb-4">
                                    
                                        <?php $blogCategories= get_the_category(get_the_ID());
                                 foreach ($blogCategories as $blogCategory) {
                                                                            ?>
                                        
                                    <a href="<?php echo get_category_link($blogCategory->term_id)?>"class="category text-capitalize date-published date-text">
                                        <?php echo $blogCategory->name;?>
                                    </a>
                                        
                                        
                                                                            <?php
                                                                            }
                                    
                                    ?>
                                    |
                                    <span class="date-published"><?php the_date('j/m/Y');?></span>
                                </p>
                                <h2 class=" blog-single-title mb-4 text-uppercase "><?php the_title();?></h2>
                                <p class="blog-single-description">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                    It has roots in a piece of classical Latin literature from 45 BC, 
                                    making it over 2000 years old. Richard McClintock. 
                                </p>
                            </article>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure>
                                <img src="<?php echo $featuredImage; ?>" alt=""/>
                            </figure>

                        </div>
                    </div>
                </div>
            </section>
            <section class="blog-single-text">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-8">
                            <article class="blog-single-content ">
                               
                              <?php the_content();?>
                                <article class="tags ">
                                    <p class=" tag-title">Tags:</p>
                                    <div class="tags">
                                        <?php
                                        $blogTags = get_the_tags(get_the_ID());
                                        foreach($blogTags as $blogTag){
                                            ?>
                                        <a class="btn btn-light px-4 py-2 text-dark" href="<?php echo get_tag_link($blogTag->term_id)?>"><?php echo $blogTag->name?></a>
                                        
                                        <?php
                                        }
                                        ?>
                                     <!--   <a class="btn btn-light px-4 py-2 " href="#">beauty</a>
                                        <a class="btn btn-light px-4 py-2  " href="#">hair</a>
                                        <a class="btn btn-light px-4 py-2  " href="#">glossy</a>
                                      -->
                                    </div>
                                </article>

                            </article>

                        </div>

                    </div>

                </div>


            </section>

            <?php
        }
    }
    ?>

</main>

<?php get_footer(); ?>

