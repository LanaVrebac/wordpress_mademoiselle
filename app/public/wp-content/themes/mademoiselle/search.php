<?php

get_header();
?>

<main>
    <section class="lead-page-section" style="background-image: url(<?php bloginfo('url'); echo '/wp-content/uploads/2023/02/search-scaled.jpg'?>)">
        <div class="container">
            <a class="text-white" href="<?php the_permalink(); ?>">
                <h1><span class='text-uppercase'>Search result for:</span>  <?php echo get_search_query(); ?></h1>
            </a>

        </div>

    </section><!--lead page section end-->
    
    <section class='search-section'>
        <div class='container'>
            <div class='col-12 col-md-8'>
             
<?php if (have_posts()) {
        ?>
        <section class="lead-page-blog-section p-5 mb-5 ">
            <div class="container-fluid">
                <h2 class="section-title mb-4">
                    
         <?php the_title();?></h2>
               <div class="row"> 
                
                  <?php while(have_posts()){
                    the_post();
                    ?>
                
                     <?php get_template_part('/template-parts/blog-template')?>  
                      
                        
                     <?php
                    
                    
                  }?>    
                        
               </div>       
            </div>
        </section>
<section class='news-pagination-full mb-5 '>
    <div class='container'>
        <?php the_posts_pagination(array(
            'screen_reader_text'=> ' ',
            'mid-size'=>2,
            'prev_text'=>'&lang;',
            'next_text'=>'&rang;'
        )); ?>
        
    </div>
    
</section>
      
        <?php }else{
            ?>
        <section class="lead-page-blog-section p-5">
            <div class="container">
                <h2 class="section-title mb-4">
                    <?php the_title();?>
                </h2>
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <div class='jumbotron'>
                            <h3>There are no posts to show.</h3>    
                        </div> 
                        
                        
                    </div>  
                </div>
            </div>
        </section>
    
     <?php
        }
       ?>    
            </div>
            <div class='col-12 col-md-4'>
                <aside>
                    <?php get_sidebar();?>
                </aside>
            </div>
        </div>
    </section>
  
</main>

<?php
get_footer();?>