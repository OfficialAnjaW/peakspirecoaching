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

    <!-- Homepage Manifesto Section -->
    <div class="container manifesto-section">

      <!-- Widget Area: Manifesto Title -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('manifesto-title'); ?>
        </div>
      </div>

      <!-- Widget Area: Manifesto Copy -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('manifesto-copy'); ?>
        </div>
      </div>

    </div>

    <div class="container-fluid manifesto-banner-image">

      <!-- Widget Area: Homepage Banner Image -->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-banner-image'); ?>
        </div>
      </div>

    </div>

    <!-- Homepage Services Section -->
    <div class="container-fluid services-section">

      <div class="row">
        <!-- Widget Area: Homepage Services Title -->
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-services-title'); ?>
        </div>
      </div>

      <div class="row d-flex justify-content-around">

        <!-- Widget Area: Homepage Services One -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-one'); ?>
        </div>

        <!-- Widget Area: Homepage Services Two -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-two'); ?>
        </div>

        <!-- Widget Area: Homepage Services Three -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-three'); ?>
        </div>

        <!-- Widget Area: Homepage Services Four -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-four'); ?>
        </div>

        <!-- Widget Area: Homepage Services Five -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-five'); ?>
        </div>

        <!-- Widget Area: Homepage Services Six -->
        <div class="col-md-2">
          <?php dynamic_sidebar('homepage-services-six'); ?>
        </div>

      </div>
    </div>

    <!-- Homepage Intro Section -->
    <div class="container intro-section">

      <div class="row">
        <!-- Widget Area: Homepage Intro Title -->
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-intro-title'); ?>
        </div>
      </div>

      <div class="row">
        <!-- Widget Area: Homepage Intro Copy -->
        <div class="col-md-12">
          <?php dynamic_sidebar('homepage-intro-copy'); ?>
        </div>
      </div>

    </div>

  </main>

<?php get_footer(); ?>
