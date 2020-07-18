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

  <!--======================= start services post=====================------->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h2 class="entry-title2"><?php the_title(); ?></h2>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
    </section>



<!-- end widget area----------------------------------->

  </main>

<?php get_footer(); ?>
