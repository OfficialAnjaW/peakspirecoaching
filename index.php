<?php get_header(); ?>

  <!-- Widget Area: Blog Post Feature Image -->
  <div class="row">
    <div class="col-md-12">
      <?php dynamic_sidebar('blog-home-feature-image'); ?>
    </div>
  </div>

  <!-- Blog Posts -->
  <main class="blog-overview">

    <div class="container">
      <div class="row">
        <?php  if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <div class="col-lg-4 post-overview-tiles">

              <div class="post-featured-image">
                <?php the_post_thumbnail('large'); ?>
              </div>

              <h5><?php the_title(); ?></h5>

              <?php
                $archive_year = get_the_time('Y');
                $archive_month = get_the_time('m');
                $archive_day = get_the_time('d');
              ?>

              <p class="post-info">Published: <a class="post-info-link" href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"> <?php echo get_the_date(); ?></a></p>

              <p><?php echo "Written by: " . get_the_author(); ?></p>

              <?php the_excerpt(); ?>

              <a class="btn btn-primary btn-sm blog-overview-buttons" href="<?php the_permalink(); ?>">Read More >></a>
            </div>
      <?php } //ends while loop
      } //ends if statement
        ?>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
