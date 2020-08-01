<?php
/*
Template name: Blog Posts
Template post type: post
*/
?>

<?php get_header(); ?>


<!-- Loop ----------------->
<main class="container-fluid">
  <section class="row">
    <?php
      if(have_posts()) {
        while(have_posts()){
          the_post(); ?>

        <div class="col-12">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php  } //this ends while loop
      }// this ends if statement
    ?>
  </section>
</main>

  <section class="container">
<!-- ======================= Blog Content ==================-->
    <div class="row justify-content-center posts">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <h5 class="single-post-info"><?php echo "Author: " . get_the_author(); echo " // " . get_the_date();?></h5>

              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>
      </div>
    </div>
  </section>



<?php get_footer(); ?>
