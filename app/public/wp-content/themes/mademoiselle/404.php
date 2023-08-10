<?php

get_header();
?>

<main>
    
  <section class=" error-page" style="background-image:url(frontend/images/lead/m-404.png)">
                <div class="container text-center">
                    <div class="error-page-links">
                    <p class="text-danger text-capitalize">
                       Error 404
                    </p>
                        <br>
                   <p class="text-danger text-capitalize">
                        Page not found
                    </p>
                  
                    </div>
                    <a class="btn link-button border-dark text-dark text-uppercase" href="<?php echo home_url(); ?>">
                        Back to home
                    </a>
                </div>

            </section><!--lead page section end-->

              
</main>

<?php get_footer(); ?>
