<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <title>
            <?php
            bloginfo('name');
            wp_title(' | ', true, 'left');
            ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lana Vrebac">
        <meta name="description" content="Stay Up with the Latest Beauty Trends">
        <meta name="keywords" content="mademoiselle, beauty,make up, cosmetics, surgery, wax, haircut">


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/frontend/apple-icon-144x144.png'; ?>">


        <!--Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php bloginfo('name'); ?>">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/frontend/android-icon-192x192.png'; ?>">




        <?php
        //includes header
        wp_head();
        ?>



    </head>
    <body <?php body_class(); ?>>
        <header class="bg-white py-2 py-xl-4">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a class="navbar-brand" href="<?php home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?> /frontend/images/logo.png" alt=""/>
                        </a>

    <?php }
?>

                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">

                        <?php
                        $menuLocation = get_nav_menu_locations();
                        $mainMenuID = $menuLocation['main-menu'];

                        $mainMenuItems = wp_get_nav_menu_items($mainMenuID);

                        if ($mainMenuItems) {
                            ?>
                            <ul class="navbar-nav ml-auto ">
                                <?php
                                foreach ($mainMenuItems as $mainMenuItem) {
                                    
                                    //if a menu item has active class

                                    $active_class = ' ';
                                    if($mainMenuItem->url == get_permalink()){
                                        
                                    $active_class = 'active';    
                                    }
                                    
                                    
                                       //top level menu-if an item has a parent
                                    if ($mainMenuItem->menu_item_parent == 0) {
                                        
                                        $mainMenuID = $mainMenuItem->ID;
                                        $submenuItems = array();
                                        
                                        foreach ($mainMenuItems as $submenuItem){
                                        
                                            if($submenuItem->menu_item_parent == $mainMenuID){
                                                
                                                $submenuItems[]=$submenuItem;
                                                
                                                //active class for submenu items
                                                if($submenuItem->url == get_permalink()){
                                                 $active_class = 'active';   
                                                }
                                            }
                                            
                                        }
                                        ?>
                                        <li class="nav-item ">
                                            <a class="nav-link <?php echo $active_class?> " href="<?php echo $mainMenuItem->url ?>"><?php echo $mainMenuItem-> title ?> </a>
                                            
                                            <?php if(!empty($submenuItems))
                                                             ?>
                                                              <ul class="submenu">
                                                                  <?php
                                                              foreach ($submenuItems as $submenuItem){
                                                                  ?>
                                                                  <li>
                                                                      <a class='<?php echo $active_class; ?>' href="<?php echo $submenuItem->url?>"><?php echo $submenuItem->title?></a>
                                                                  </li>  
                                                                  <?php
                                                              }    
                                                                  
                                                                  ?>
                                                
                                                              </ul>
                                                             <?php
                                                
                                                
                                                ?>
                                        </li>    

                                        <?php
                                    }
                                }
                                ?>

                            </ul>

                            <?php
                        }
                        ?>
                        
                    </div>
                </nav>   

            </div><!--container end-->
        </header> <!--header end--> 