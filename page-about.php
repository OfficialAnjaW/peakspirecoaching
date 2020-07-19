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

    <div class="container container-video-newsletter">
      <div class="row">

        <!-- Widget Area: Company Video -->
        <div class="col-md-6">
          <?php dynamic_sidebar('company-video'); ?>
        </div>

        <!-- Widget Area: Newsletter Subscription -->
        <div class="col-md-6">
          <?php dynamic_sidebar('newsletter-subscription'); ?>
        </div>

      </div>
    </div>

  </main>

  <!-- Widget Area: About Banner Image -->
  <section class="about-page-banner-image">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('about-banner-image'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
