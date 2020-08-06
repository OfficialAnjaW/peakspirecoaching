<?php
/*
Template Name: Contact
Template Post Type: page
*/
?>

<?php get_header(); ?>
  <main class="container">

    <!-- start about us content post -->
    <section>
      <div class="row justify-content-center posts">
        <div class="col-lg-12">
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post(); ?>
                <h1 class="contact-title"><?php the_title(); ?></h1>

                <?php the_content(); ?>
            <?php  } //this ends while loop
            }// this ends if statement
          ?>
        </div>
      </div>
    </section>

   <!-- begin widget for contact us form -->
   <section>
     <div class="row d-flex justify-content-between">
       <div class="col-lg-10">
         <?php dynamic_sidebar('contact-icons'); ?>
       </div>
     </div>
   </section>

    <section class="contactus-padding">
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
    <!-- end widget area -->

  </main>

<?php get_footer(); ?>
