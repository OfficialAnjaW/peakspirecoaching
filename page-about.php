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

    <!-- Widget Area: Company Purpose -->
    <div class="container-fluid container-company-purpose">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <?php dynamic_sidebar('company-purpose'); ?>
          </div>
        </div>
      </div>
    </div>


    <!-- Widget Area: Company Introduction -->
    <div class="container container-company-introduction">
      <div class="row">
        <div class="col-md-10">
          <?php dynamic_sidebar('company-introduction'); ?>
        </div>
      </div>
    </div>

    <!-- Widget Area: Founder Image -->
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('founder-image'); ?>
      </div>
    </div>

    <!-- Widget Area: Founder Section -->
    <div class="container container-founder-section">
      <div class="row">
        <div class="col-md-10">
          <?php dynamic_sidebar('founder-section'); ?>
        </div>
      </div>
    </div>

    <!-- Widget Area: Newsletter Subscription -->
    <div class="containter-fluid container-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <?php dynamic_sidebar('newsletter-subscription'); ?>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- Widget Area: About Banner Image -->
  <div class="about-page-banner-image">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('about-banner-image'); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
