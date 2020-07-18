<?php

/*
Template Name: Homepage
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

  <main>

    <!-- Homepage Intro Section -->
    <div class="container intro-section">

      <!-- Widget Area: Homepage Intro Title -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-intro-title'); ?>
        </div>
      </div>

      <!-- Widget Area: Homepage Intro Copy -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-intro-copy'); ?>
        </div>
      </div>

      <!-- Widget Area: Homepage Intro Stats -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-intro-statistics'); ?>
        </div>
      </div>

    </div>

    <!-- Homepage Services Section -->
    <div class="container-fluid services-section">

      <div class="row">
        <!-- Widget Area: Homepage Services Title -->
        <div class="col-lg-12">
          <?php dynamic_sidebar('homepage-services-title'); ?>
        </div>
      </div>

      <div class="row d-flex justify-content-around">

        <!-- Widget Area: Homepage Services One -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-one'); ?>
        </div>

        <!-- Widget Area: Homepage Services Two -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-two'); ?>
        </div>

        <!-- Widget Area: Homepage Services Three -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-three'); ?>
        </div>

        <!-- Widget Area: Homepage Services Four -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-four'); ?>
        </div>

        <!-- Widget Area: Homepage Services Five -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-five'); ?>
        </div>

        <!-- Widget Area: Homepage Services Six -->
        <div class="col-lg-2">
          <?php dynamic_sidebar('homepage-services-six'); ?>
        </div>

      </div>
    </div>

    <!-- Widget Area: Homepage Manifesto Section-->
    <div class="container manifesto-section">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-manifesto'); ?>
        </div>
      </div>
    </div>

  </main>

  <!-- Widget Area: Homepage Banner Image -->
  <section class="manifesto-banner-image">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('homepage-banner-image'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
