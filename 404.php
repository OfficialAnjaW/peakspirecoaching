<?php get_header(); ?>

  <div class="container error-container">

    <div class="row">
      <div class="col-md-12 error">
        <img src="<?php echo get_template_directory_uri() . '/images/404.gif' ?>" alt="Error Message" />
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h1>WE ARE SORRY YOU ARE LOST!</h1>
        <p>It looks like nothing was found at this location. Would you like to go back home?</p>
        <a class="btn btn-primary btn-md" href="<?php echo home_url('/');?>">Click here</a>
      </div>
    </div>

  </div>

  <!-- Widget Area: 404.php Banner -->
  <section class="error-banner-section">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar('error-banner'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
