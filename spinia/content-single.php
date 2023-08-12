<?php 

 /* Template Post Type: post */

get_header(); ?>

<div class="main-content">
    <section class="main-text">
      <div class="main-text-block-text">
        <h1><?php echo the_title(); ?></h1>
      </div>
      <div class="main-text-block-content">
        <?php echo the_content(); ?>
      </div>
    </section>

<?php get_footer(); ?>
