<?php
/*
Template Name: Single Posts
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 content-main">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <ul class="post-meta">
      <li id="post-date"><?php the_time('F jS, Y') ?></li><div style="clear:both"></div>
    </ul>
    <div class="post-content">
    <?php the_content() ?>
    </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
<?php endif; ?>
    </div><!--mainContent-->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 sidebar post-sidebar">
  <?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar') ) : ?><?php endif; ?>
  </div>
</div><!--row-->
</div><!--container-->

<?php get_footer(); ?>