<?php
/*
Template Name: Services Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
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

<!-- begin widget for contact us form------------------->
    <section class="about">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-6">
          <?php dynamic_sidebar('contact-us-form'); ?>
        </div>
<!-- begin widget for contact google map info --------->
        <div class="col-lg-6 col-sm-12">
          <?php dynamic_sidebar('contact-us-map'); ?>
        </div>
      </div>
    </section>
<!-- end widget area----------------------------------->

  </main>

<?php get_footer(); ?>
