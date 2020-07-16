<?php
/*
Template Name: Services Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<!-- Widget Area: Homepage Hero Image -->
<div class="row">
  <div class="col-md-12">
    <?php dynamic_sidebar('homepage-hero-image'); ?>
  </div>
</div>

  <main class="container">

  <!--======================= start about us content post=====================------->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h2 class="entry-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
    </section>

<!-- begin widget for serivces form------------------->
    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-1'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-1'); ?>
        </div>
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-2'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-2'); ?>
        </div>
      </div>
    </section>
    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-3'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-3'); ?>
        </div>
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-4'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-4'); ?>
        </div>
    </div>
    </section>

    <section>
      <div class="row d-flex justify-content-between">
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-5'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-5'); ?>
        </div>
        <div class="col-lg-2">
          <?php dynamic_sidebar('about-img-6'); ?>
        </div>
        <div class="col-lg-4">
          <?php dynamic_sidebar('about-text-6'); ?>
        </div>
    </div>
    </section>
<!-- end widget area----------------------------------->

  </main>

<?php get_footer(); ?>
