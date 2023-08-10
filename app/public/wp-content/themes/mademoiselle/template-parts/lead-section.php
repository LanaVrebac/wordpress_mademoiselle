
<?php

if(is_home() && get_option('page_for_posts')){
 $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
 $lead_title = get_the_title( get_option('page_for_posts', true) );
 
}
else{$leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
$lead_title = get_the_title();
     
       
}
?>

<main>
    <section class="lead-page-section" style="background-image: url(<?php echo $leadImage ?>)">
        <div class="container">
            <a class="text-white" href="<?php the_permalink(); ?>">
                <h1>  <?php echo $lead_title ?></h1>
            </a>

        </div>

    </section><!--lead page section end-->


</main>