<?php
/*
Template Name: Search Page
*/
?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<?php get_header(); ?>

Search results for: <i><?php the_search_query(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<ul class="post-meta">
  <li id="post-date"><?php the_time('F jS, Y') ?></li><div style="clear:both"></div>
</ul>
<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
<?php the_excerpt('Read More') ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
<?php endif; ?>

<?php next_posts_link( 'Older Posts' ); ?>
<?php previous_posts_link( 'Newer Posts' ); ?>

<?php get_footer(); ?>