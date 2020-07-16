<?php

/*
Template Name: About
Template Post Type: page
*/

?>

<?php get_header(); ?>

  <!-- Widget Area: About Hero Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('about-hero-image'); ?>
    </div>
  </div>

  <main>

    <!-- Widget Area: Company Introduction -->
    <div class="container container-company-introduction">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('company-introduction'); ?>
        </div>
      </div>
    </div>

    <!-- Widget Area: Company Purpose -->
    <div class="container-fluid container-company-purpose">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('company-purpose'); ?>
        </div>
      </div>
    </div>

    <!-- Widget Area: Founder Image -->
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('founder-image'); ?>
      </div>
    </div>

    <!-- Widget Area: Homepage Locations Section -->
    <div class="container container-founder-section">
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('founder-section'); ?>
        </div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
