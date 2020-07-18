<?php
/*
Template Name: Testimonials Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<!-- Widget Area: Testimonial Hero Image -->
<div class="row">
  <div class="col-md-12">
    <?php dynamic_sidebar('testimonials-hero-image'); ?>
  </div>
</div>

  <main class="container">

  <!--======================= start testimonial post=====================------->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h1 class="entry-title-testimonial"><?php the_title(); ?></h1>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
    </section>

    <!-- begin widget for testimonial slider widget -------------------------------->
        <section>
          <div class="row d-flex justify-content-between">
            <div class="col-lg-12">
              <?php dynamic_sidebar('testimonials-slider-widget'); ?>
            </div>
          </div>
        </section>


    <!-- begin widgets for testimonial logo title and image area --------------------->
            <section>
              <div class="row d-flex justify-content-between">
                <div class="col-lg-12">
                  <?php dynamic_sidebar('testimonials-logo-title'); ?>
                </div>
              </div>
            </section>

            <section class="clientsimg">
              <div class="row d-flex justify-content-between">
                <div class="col-lg-3">
                  <?php dynamic_sidebar('testimonials-logo-img1'); ?>
                </div>

                <div class="col-lg-3">
                  <?php dynamic_sidebar('testimonials-logo-img2'); ?>
                </div>

                <div class="col-lg-3">
                  <?php dynamic_sidebar('testimonials-logo-img3'); ?>
                </div>

                <div class="col-lg-3">
                  <?php dynamic_sidebar('testimonials-logo-img4'); ?>
                </div>
              </div>
            </section>
<!-- end widget area----------------------------------->

  </main>

<?php get_footer(); ?>
