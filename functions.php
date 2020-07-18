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

    // Widget Area: Homepage Intro Title
    register_sidebar(array(
        'name'          => ('Homepage Intro Title'),
        'id'            => 'homepage-intro-title',
        'description'   => 'Homepage Intro Title',
        'before_widget' => '<div class="widget-homepage-intro-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="homepage-intro-title-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Homepage Intro Copy
    register_sidebar(array(
        'name'          => ('Homepage Intro Copy'),
        'id'            => 'homepage-intro-copy',
        'description'   => 'Homepage Intro Copy',
        'before_widget' => '<div class="widget-homepage-intro-copy">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="homepage-intro-copy-widget-title">',
        'after_title'   => '</h6>'
    ));

    // Widget Area: Homepage Intro Statistics
    register_sidebar(array(
        'name'          => ('Homepage Intro Statistics'),
        'id'            => 'homepage-intro-statistics',
        'description'   => 'Homepage Intro Statistics',
        'before_widget' => '<div class="widget-homepage-intro-statistics">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="homepage-intro-statistics-widget-title">',
        'after_title'   => '</h6>'
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

    // Widget Area: Homepage Manifesto
    register_sidebar(array(
        'name'          => ('Homepage Manifesto'),
        'id'            => 'homepage-manifesto',
        'description'   => 'Manifesto on Homepage',
        'before_widget' => '<div class="widget-homepage-manifesto">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="homepage-manifesto-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Homepage Banner Image
    register_sidebar(array(
        'name'          => ('Homepage Banner Image'),
        'id'            => 'homepage-banner-image',
        'description'   => 'Banner Image on Homepage',
        'before_widget' => '<div class="widget-homepage-banner-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="homepage-banner-image-widget-title">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas page-about.php

=====================================*/

    // Widget Area: About Hero Image
    register_sidebar(array(
        'name'          => ('About Hero Image'),
        'id'            => 'about-hero-image',
        'description'   => 'Hero Image on About Page',
        'before_widget' => '<div class="widget-about-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="about-hero-image-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Company Purpose
    register_sidebar(array(
        'name'          => ('Company Purpose'),
        'id'            => 'company-purpose',
        'description'   => 'Company Purpose Section',
        'before_widget' => '<div class="widget-company-purpose">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="company-purpose-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Company Introduction
    register_sidebar(array(
        'name'          => ('Company Introduction'),
        'id'            => 'company-introduction',
        'description'   => 'Company Introduction Section',
        'before_widget' => '<div class="widget-company-introuction">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="company-introuction-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Founder Image
    register_sidebar(array(
        'name'          => ('Founder Image'),
        'id'            => 'founder-image',
        'description'   => 'Founder Image on About Page',
        'before_widget' => '<div class="widget-founder-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="founder-image-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: Founder Section
    register_sidebar(array(
        'name'          => ('Founder Section'),
        'id'            => 'founder-section',
        'description'   => 'Founder Section',
        'before_widget' => '<div class="widget-founder-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="founder-section-widget-title">',
        'after_title'   => '</h1>'
    ));

    // Widget Area: About Banner Image
    register_sidebar(array(
        'name'          => ('About Banner Image'),
        'id'            => 'about-banner-image',
        'description'   => 'Banner Image on About Page',
        'before_widget' => '<div class="widget-about-banner-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-banner-image-widget-title">',
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

  Widget Areas page-testimonials.php

=====================================*/

    // Widget Area: Testimonials Hero Image
    register_sidebar(array(
        'name'          => ('Testimonials Hero Image'),
        'id'            => 'testimonials-hero-image',
        'description'   => 'Hero Image on Testimonials',
        'before_widget' => '<div class="widget-testimonials-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-hero-image-widget-title">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Slider Widget'),
        'id'            => 'testimonials-slider-widget',
        'description'   => 'Testimonial Widget Slider Area',
        'before_widget' => '<div class="widget-testimonials-slider">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-slider">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Logo Widget'),
        'id'            => 'testimonials-logo-title',
        'description'   => 'Testimonial Widget Logo Title Area',
        'before_widget' => '<div class="widget-testimonials-logo-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-logo-title">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Logo Img1'),
        'id'            => 'testimonials-logo-img1',
        'description'   => 'Testimonial Widget Logo Img1',
        'before_widget' => '<div class="widget-testimonials-logo-img1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-logo-img1">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Logo Img2'),
        'id'            => 'testimonials-logo-img2',
        'description'   => 'Testimonial Widget Logo Img2',
        'before_widget' => '<div class="widget-testimonials-logo-img2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-logo-img2">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Logo Img3'),
        'id'            => 'testimonials-logo-img3',
        'description'   => 'Testimonial Widget Logo Img3',
        'before_widget' => '<div class="widget-testimonials-logo-img3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-logo-img3">',
        'after_title'   => '</h1>'
    ));

    register_sidebar(array(
        'name'          => ('Testimonials Logo Img4'),
        'id'            => 'testimonials-logo-img4',
        'description'   => 'Testimonial Widget Logo Img4',
        'before_widget' => '<div class="widget-testimonials-logo-img4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="testimonials-widget-area-logo-img4">',
        'after_title'   => '</h1>'
    ));



/*===================================

  Widget Areas page-services.php

=====================================*/

    // Widget Area: Services Hero Image
        register_sidebar(array(
            'name'          => ('Services Hero Image'),
            'id'            => 'services-hero-image',
            'description'   => 'Hero Image on Services',
            'before_widget' => '<div class="widget-services-hero-image">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="services-hero-image-widget-title">',
            'after_title'   => '</h1>'
        ));


    // Widget Area: Services widget grid
    register_sidebar(array(
        'name'          => ('Services Image 1'),
        'id'            => 'service-img-1',
        'description'   => 'Widget for service Image 1',
        'before_widget' => '<div class="widget-service-img1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img1">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Image 2'),
        'id'            => 'service-img-2',
        'description'   => 'Widget for service Image 2',
        'before_widget' => '<div class="widget-service-img2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img2">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Image 3'),
        'id'            => 'service-img-3',
        'description'   => 'Widget for service Image 3',
        'before_widget' => '<div class="widget-service-img3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img3">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Image 4'),
        'id'            => 'service-img-4',
        'description'   => 'Widget for service Image 4',
        'before_widget' => '<div class="widget-service-img4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img4">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Image 5'),
        'id'            => 'service-img-5',
        'description'   => 'Widget for service Image 5',
        'before_widget' => '<div class="widget-service-img5">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img5">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Image 6'),
        'id'            => 'service-img-6',
        'description'   => 'Widget for service Image 6',
        'before_widget' => '<div class="widget-service-img6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-img6">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 1'),
        'id'            => 'service-text-1',
        'description'   => 'Widget for service Text 1',
        'before_widget' => '<div class="widget-service-txt1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt1">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 2'),
        'id'            => 'service-text-2',
        'description'   => 'Widget for service Text 2',
        'before_widget' => '<div class="widget-service-txt2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt2">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 3'),
        'id'            => 'service-text-3',
        'description'   => 'Widget for service Text 3',
        'before_widget' => '<div class="widget-service-txt3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt3">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 4'),
        'id'            => 'service-text-4',
        'description'   => 'Widget for service Text 4',
        'before_widget' => '<div class="widget-service-txt4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt4">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 5'),
        'id'            => 'service-text-5',
        'description'   => 'Widget for service Text 5',
        'before_widget' => '<div class="widget-service-txt5">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt5">',
        'after_title'   => '</h3>'
    ));

    register_sidebar(array(
        'name'          => ('Services Text 6'),
        'id'            => 'service-text-6',
        'description'   => 'Widget for service Text 6',
        'before_widget' => '<div class="widget-service-txt6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-service-us-txt6">',
        'after_title'   => '</h3>'
    ));

/*===================================

  Widget Areas 404.php

=====================================*/

    // Widget Area: 404.php Banner
    register_sidebar(array(
        'name'          => ('Error Banner'),
        'id'            => 'error-banner',
        'description'   => 'Error Banner on 404 Page',
        'before_widget' => '<div class="widget-error-banner">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="error-banner-widget-title">',
        'after_title'   => '</h3>'
    ));

  }

  add_action('widgets_init', 'blank_widgets_init');

?>
