<?php
/*
 * Template Name: Contact Page
 */

get_header();
?>

<main>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12 col-md-6">
                    <h2 class="contact-title text-uppercase">
                        <?php the_content();?>
                    </h2>
                    <form class="contact-form" action="" method="post">
                        
                        <?php the_field('contact_page_form'); ?>
                        
                       
                    </form>
                </div>
                <div class="col-12 col-md-6">

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-1by1">
                        <?php the_field('contact_page_map');?>
                    </div>



                </div>
            </div>
        </div>
    </section><!--contact-form end-->
<?php
$address= get_option('mademoiselle_address');
$phone = get_option('mademoiselle_phone');
$mobile_1 =get_option('mademoiselle_mobile_1');
$mobile_2 = get_option('mademoiselle_mobile_2');
$email_1 = get_option('mademoiselle_email_1');
$email_2 = get_option('mademoiselle_email_2');

?>
   <section class="contact-info" id="contact" style="background-color:#ECD9D9 ;">
        <div class="container-fluid text-center" >
            <article class="info-item">  
           <?php if(!empty($address)){
               ?>
                <p class="info-data">
                    <?php echo $address; ?> 
                </p>  
                <?php
   
            }?>   
             <?php if(!empty($phone)){
               ?>
                <p class="info-data" >
                    <?php echo $phone; ?> 
                  <a href="tel:<?php echo $phone; ?>"></a>  
                </p>  
                <?php
   
            }?>  
             <?php if(!empty($mobile_1)){
               ?>
                <p class="info-data" >
                    <?php echo $mobile_1; ?> 
                 <a href="tel:<?php echo $mobile_1; ?>"></a>   
                </p>  
                <?php
   
            }?>    
             <?php if(!empty($mobile_2)){
               ?>
                <p class="info-data">
                    <?php echo $mobile_2; ?> 
                 <a href="tel:<?php echo $mobile_2; ?>"></a>   
                </p>  
                <?php
   
            }?> 
             <?php if(!empty($email_1)){
               ?>
                <p class="info-data">
                    <?php echo $email_1; ?> 
                 <a href="mailto:<?php echo $email_1; ?>"></a>   
                </p>  
                <?php
   
            }?>   
             <?php if(!empty($email_2)){
               ?>
                <p class="info-data">
                    <?php echo $email_2; ?> 
                    <a href="mailto:<?php echo $email_2; ?>"></a>
                </p>  
                <?php
   
            }?>    
            </article> 
              </div>
                </section>
   
    




</main>

<?php get_footer(); ?>