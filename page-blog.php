<?php
/*
Template Name: Blog Home
Template Post Type: page
*/
?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <?php  if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-md-3">
            <h3><?php the_title(); ?></h3>

            <div class="post-featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div>

            <p class="category-label">Category: <?php the_category(); ?></p>

            <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
            ?>

            <p class="post-info">Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"> <?php echo get_the_date(); ?></a></p>

            <p><?php echo "Written by: " . get_the_author(); ?></p>

            <?php the_excerpt(); ?>

            <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More >></a>
          </div>
    <?php } //ends while loop
    } //ends if statement
      ?>
    </div>
  </div>

<?php get_footer(); ?>
