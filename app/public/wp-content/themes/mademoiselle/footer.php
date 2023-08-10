 <footer>
            <div class="container">
                 <div class="row text-center">
                    <div class="col-12">
                    
                <?php
                        $menuLocations = get_nav_menu_locations();
                        $socialMenuID = $menuLocations['social'];
                        $socialmenuItems = wp_get_nav_menu_items($socialMenuID);
                        
                        if($socialmenuItems){
                            ?>
                         <div class="social">
                        <?php
                        foreach ($socialmenuItems as $socialmenuItem) {
                            if($socialmenuItem -> menu_item_parent == 0){
                                ?>
                       <a  href="<?php echo $socialmenuItem->url?>">
                           <span class= "fa-brands fa-<?php echo strtolower($socialmenuItem->title); if($socialmenuItem->title == 'Facebook'){echo '-f';}?>"></span>  
                       </a>      
                             <?php
                            }
                           
                            
                                                                       }//foreach end
                                                        
                                                                         }//if end
                        
                        
                        ?>
                        </div>
                     <div class="col-12">
                        <p class="footer-text">
                            Copyright &copy;<?php echo date('Y');?>
                        <a class="text-capitalize text-decoration-none text-dark" href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a>
                        </p>
                    </div>
                     
                         
                             <!--
                        
                            
                            
                            <a href="https://facebook.com">
                               <span class="fa-brands fa-facebook-f"></span> 
                            </a>
                            <a href="https://twitter.com">
                               <span class="fa-brands fa-twitter"></span> 
                            </a>
                            <a href="https://instagram.com">
                               <span class="fa-brands fa-instagram"></span> 
                            </a>
                        </div>
                        -->
                    </div>
                    
                </div>
                
            </div>
        </footer>


        
        
        <?php //includes default WP js
        wp_footer();
        ?>
    </body>
</html>


