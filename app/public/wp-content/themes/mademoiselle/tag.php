<?php
get_header();
?>
<?php $term= get_queried_object();
$categoryImage= get_field('taxonomy_image', $term);?>
<main>
    <section class="lead-page-section" style="background-image: url(<?php echo $categoryImage  ?>)">
        <div class="container">
            <a class="text-white text-uppercase font-weight-bold" href="<?php the_permalink(); ?>">
                <h1>Tag:  <?php single_tag_title(); ?></h1>
            </a>

        </div>

    </section><!--lead page section end-->


   <?php get_template_part('/template-parts/posts-loop');?>
</main>
 

<?php get_footer(); ?>