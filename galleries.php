<?php
/*
Template Name: Galleries
*/
?>
<?php get_header(); ?>
<section id="work-grid">
    <div class="container">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <div class="row">
            <div class="gallery-grid">
<?php $images = get_field('frontpage-gallery');
if( $images ): ?>
<div class="gallery">
    <ul>
        <?php foreach( $images as $image ): 
            $content = '<li class="col-xs-12 col-sm-12 col-md-4 col-lg-3">';
                $content .= '<a class="gallery_image" href="'. $image['url'] .'">';
                     $content .= '<img src="'. $image['sizes']['thumbnail'] .'" alt="'. $image['alt'] .'" title="'. $image['title'] .'" />';
                $content .= '</a>';
            $content .= '</li>';
            if ( function_exists('slb_activate') ){
    $content = slb_activate($content);
    }
    
echo $content;?>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
            </div>
            </div><!--row-->
    </div>
    </section>
<?php get_footer(); ?>