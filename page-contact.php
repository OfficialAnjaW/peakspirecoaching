<?php
/*
Template Name: Contact Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
  <main class="container">

  <!--======================= start about us content post=====================------->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-9 col-md-8 col-sm-12">
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
        <div class="col-lg-12">
          <?php dynamic_sidebar('contact-us-form'); ?>
        </div>

      </div>
    </section>
<!-- end widget for contact us form------------------->

  </main>

<?php get_footer(); ?>
