<?php get_header(); ?>
      <!-- START THE FEATURETTES -->
  <div class="container">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 content-main">
  <div class="row">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="post-thumbnail-wrapper">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail" >
        <?php the_post_thumbnail( 'blog-roll-post-thumbnail' ); ?>
        </a>
      </div>
      <h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
      <ul class="post-meta">
        <li id="post-date"><?php the_time('F jS, Y') ?></li><div style="clear:both"></div>
      </ul>
      <?php the_excerpt() ?>
    </div><!--Main Content-->
    <?php endwhile; ?>
    </div>
    </div><!--content-->
    <?php wp_reset_postdata(); ?>
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 sidebar post-sidebar">
  <?php /* Widgetized sidebar */
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar') ) : ?><?php endif; ?>
  </div>
    <?php else : ?>
    <p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
    <?php endif; ?>
  </div>
  </div>
<?php get_footer(); ?>