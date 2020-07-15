<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php bloginfo('name'); ?></title>

    <!--  Link CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ryi5csx.css">
  </head>

  <body>

    <!-- Header -->
    <header>

      <div class="container">
        <div class="row">

          <!-- Header Image/Linked Logo -->
          <div class="col-lg-4">
            <?php  if(get_header_image() == ''){?>
              <h1><a href="<?php get_home_url();?>"><?php bloginfo('name'); ?></a></h1><?php
            }else{?>
              <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php } ?>
          </div>

          <!-- Navigation: Main Menu -->

          <div class="col-lg-8 d-flex justify-content-end align-items-center">
            <nav>
              <?php
                if(has_nav_menu('main-menu')){
                  wp_nav_menu(array('theme_location' => 'main-menu' , 'container_class' => 'main-menu-class'));
                }else{
                  echo "Please select a main menu through the dashboard";
                }
              ?>
            </nav>
          </div>

        </div>
      </div>

    </header>
