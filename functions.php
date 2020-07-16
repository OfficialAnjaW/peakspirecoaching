<?php

/* =============================

  Add Stylesheet and JS Files

============================= */

  function custom_theme_scripts() {

    // Bootstrap Integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    //JS Files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

  }

  add_action('wp_enqueue_scripts','custom_theme_scripts');

/* =============================

  Custom Header Logo

============================= */

  $custom_image_header = array(
    'width'   => 250,
    'height'  => 155,
    'uploads' => true,
  );

  add_theme_support('custom-header', $custom_image_header);

/* =============================

  Featured Image

============================= */

  add_theme_support('post-thumbnails');

/*===============================

  Menus

=====================================*/

  function register_my_menus(){
    register_nav_menus(
      array(
        'main-menu'          => __('Main Menu'),
        'footer-middle-menu' => __('Footer Middle Menu'),
        'footer-right-menu'  => __('Footer Right Menu'),
      )
    );
  }

  add_action('init', 'register_my_menus');

/*===================================

  Widget Areas

=====================================*/

  function blank_widgets_init(){

/*===================================

  Widget Areas header.php

=====================================*/

    // // Widget Area: Header Contact
    // register_sidebar(array(
    //     'name'          => ('Header Contact'),
    //     'id'            => 'header-contact',
    //     'description'   => 'Contact Info in Header',
    //     'before_widget' => '<div class="widget-header-contact">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h5 class="header-contact-widget-title">',
    //     'after_title'   => '</h5>'
    // ));

    // Widget Area: Header Social
    register_sidebar(array(
        'name'          => ('Header Social'),
        'id'            => 'header-social',
        'description'   => 'Social Meida Info in Header',
        'before_widget' => '<div class="widget-header-social">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="header-social-widget-title">',
        'after_title'   => '</h5>'
    ));

/*===================================

  Widget Areas footer.php

=====================================*/

    // Widget Area: Left Footer
    register_sidebar(array(
        'name'          => ('Left Footer'),
        'id'            => 'left-footer',
        'description'   => 'Left Widget Area in Footer',
        'before_widget' => '<div class="widget-left-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="left-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

    // Widget Area: Middle Footer
    register_sidebar(array(
        'name'          => ('Middle Footer'),
        'id'            => 'middle-footer',
        'description'   => 'Middle Widget Area in Footer',
        'before_widget' => '<div class="widget-middle-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="middle-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

    // Widget Area: Right Footer
    register_sidebar(array(
        'name'          => ('Right Footer'),
        'id'            => 'right-footer',
        'description'   => 'Right Widget Area in Footer',
        'before_widget' => '<div class="widget-right-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="right-footer-widget-title">',
        'after_title'   => '</h5>'
    ));

/*===================================

  Widget Areas page-home.php

=====================================*/

    // Widget Area: Homepage Hero Image
    register_sidebar(array(
        'name'          => ('Homepage Hero Image'),
        'id'            => 'homepage-hero-image',
        'description'   => 'Hero Image on Homepage',
        'before_widget' => '<div class="widget-homepage-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-hero-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Truck Types
    register_sidebar(array(
        'name'          => ('Homepage Truck Types'),
        'id'            => 'homepage-truck-types',
        'description'   => 'Truck Types Section on Homepage',
        'before_widget' => '<div class="widget-homepage-truck-types">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-truck-types-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Middle Image
    register_sidebar(array(
        'name'          => ('Homepage Middle Image'),
        'id'            => 'homepage-middle-image',
        'description'   => 'Middle Image on Homepage',
        'before_widget' => '<div class="widget-homepage-middle-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-middle-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Header
    register_sidebar(array(
        'name'          => ('Homepage Services Title'),
        'id'            => 'homepage-services-title',
        'description'   => 'Services Title on Homepage',
        'before_widget' => '<div class="widget-homepage-services-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="homepage-services-title-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Homepage Services One
    register_sidebar(array(
        'name'          => ('Homepage Services One'),
        'id'            => 'homepage-services-one',
        'description'   => 'Services One on Homepage',
        'before_widget' => '<div class="widget-homepage-services-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-one-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Two
    register_sidebar(array(
        'name'          => ('Homepage Services Two'),
        'id'            => 'homepage-services-two',
        'description'   => 'Services Two on Homepage',
        'before_widget' => '<div class="widget-homepage-services-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-two-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Three
    register_sidebar(array(
        'name'          => ('Homepage Services Three'),
        'id'            => 'homepage-services-three',
        'description'   => 'Services Three on Homepage',
        'before_widget' => '<div class="widget-homepage-services-three">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-three-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Four
    register_sidebar(array(
        'name'          => ('Homepage Services Four'),
        'id'            => 'homepage-services-four',
        'description'   => 'Services Four on Homepage',
        'before_widget' => '<div class="widget-homepage-services-four">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-four-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Five
    register_sidebar(array(
        'name'          => ('Homepage Services Five'),
        'id'            => 'homepage-services-five',
        'description'   => 'Services Five on Homepage',
        'before_widget' => '<div class="widget-homepage-services-five">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-five-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Services Six
    register_sidebar(array(
        'name'          => ('Homepage Services Six'),
        'id'            => 'homepage-services-six',
        'description'   => 'Services Six on Homepage',
        'before_widget' => '<div class="widget-homepage-services-six">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-services-six-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations Header
    register_sidebar(array(
        'name'          => ('Homepage Locations Title'),
        'id'            => 'homepage-locations-title',
        'description'   => 'Locations Title on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-title-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations One
    register_sidebar(array(
        'name'          => ('Homepage Locations One'),
        'id'            => 'homepage-locations-one',
        'description'   => 'Locations One on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-one-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Homepage Locations Two
    register_sidebar(array(
        'name'          => ('Homepage Locations Two'),
        'id'            => 'homepage-locations-two',
        'description'   => 'Locations Two on Homepage',
        'before_widget' => '<div class="widget-homepage-locations-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-locations-two-widget-title">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas page-contact.php

=====================================*/

// Widget Area: Contact Form Widget
    register_sidebar(array(
        'name'          => ('Contact Form'),
        'id'            => 'contact-us-form',
        'description'   => 'Form for Contact Page',
        'before_widget' => '<div class="widget-contact-form">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="contact-form-widget-title">',
        'after_title'   => '</h3>'
    ));

    // Widget Area: Contact Page Google Map Widget
        register_sidebar(array(
            'name'          => ('Contact Map'),
            'id'            => 'contact-us-map',
            'description'   => 'Widget for Contact Map',
            'before_widget' => '<div class="widget-contact-map">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="contact-map-widget-title">',
            'after_title'   => '</h3>'
        ));

        /*===================================

          Widget Areas page-services.php

        =====================================*/
        // Widget Area: Services widget grid
            register_sidebar(array(
                'name'          => ('About Us Image 1'),
                'id'            => 'about-img-1',
                'description'   => 'Widget for About Image 1',
                'before_widget' => '<div class="widget-about-img1">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-img1">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Image 2'),
                'id'            => 'about-img-2',
                'description'   => 'Widget for About Image 2',
                'before_widget' => '<div class="widget-about-img2">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-img2">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Image 3'),
                'id'            => 'about-img-3',
                'description'   => 'Widget for About Image 3',
                'before_widget' => '<div class="widget-about-img3">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-img3">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Image 4'),
                'id'            => 'about-img-4',
                'description'   => 'Widget for About Image 4',
                'before_widget' => '<div class="widget-about-img4">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-img4">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Text 1'),
                'id'            => 'about-text-1',
                'description'   => 'Widget for About Text 1',
                'before_widget' => '<div class="widget-about-txt1">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-txt1">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Text 2'),
                'id'            => 'about-text-2',
                'description'   => 'Widget for About Text 2',
                'before_widget' => '<div class="widget-about-txt2">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-txt2">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Text 3'),
                'id'            => 'about-text-3',
                'description'   => 'Widget for About Text 3',
                'before_widget' => '<div class="widget-about-txt3">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-txt3">',
                'after_title'   => '</h3>'
            ));

            register_sidebar(array(
                'name'          => ('About Us Text 4'),
                'id'            => 'about-text-4',
                'description'   => 'Widget for About Text 4',
                'before_widget' => '<div class="widget-about-txt4">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-about-us-txt4">',
                'after_title'   => '</h3>'
            ));



  }

  add_action('widgets_init', 'blank_widgets_init');

?>
