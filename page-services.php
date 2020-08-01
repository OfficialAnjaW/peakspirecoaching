<?php
/*
Template Name: Services
Template Post Type: page
*/
?>

<?php get_header(); ?>

  <!-- Widget Area: Homepage Hero Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('services-hero-image'); ?>
    </div>
  </div>

  <main class="container">

  <!-- start services post -->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h1 class="entry-title2"><?php the_title(); ?></h1>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
      </div>
    </section>

<!-- begin widget for serivces form -->
    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-1'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-1'); ?>
        </div>
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-2'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-2'); ?>
        </div>
      </div>
    </section>

    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-3'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-3'); ?>
        </div>
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-4'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-4'); ?>
        </div>
    </div>
    </section>

    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-5'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-5'); ?>
        </div>
        <div class="col-lg-2 services">
          <?php dynamic_sidebar('service-img-6'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('service-text-6'); ?>
        </div>
    </div>
    </section>
<!-- Call to Action section starts here------->
    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-12">
          <?php dynamic_sidebar('service-cta'); ?>
        </div>
      </div>
    </section>

<!---Newsletter sign up for services page starts here ------>
    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-12">
          <?php dynamic_sidebar('service-newsletter'); ?>
        </div>
      </div>
    </section>



<!-- end widget area -->

  </main>

<?php get_footer(); ?>
