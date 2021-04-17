<main style="background-image: url(<?php the_field('background_image'); ?>)">
<?php get_header(); ?>
<style type="text/css">
  .active {
   background-image: url(<?php the_field('foreground_svg'); ?>);
  }
</style>
<section class="body" >
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<figure>
  <img id="imageZoom" style="display: none;" src=" <?php the_field('foreground_svg'); ?>">
</figure>

 
 <section class="index">
  <?php if( have_rows('index') ): ?>
    <ol class="indexItems">
    <?php while( have_rows('index') ): the_row(); 
        ?>
        <li>
            <p><a href="<?php the_sub_field('attached_link'); ?>" target="_blank"><?php the_sub_field('front_end_text'); ?></a></p>
        </li>
    <?php endwhile; ?>
    </ol>
<?php endif; ?>
   
   
 </section> 
  <div id="nav-below" class="navigation">
    <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
    <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
  </div>
<?php endwhile; // end of the loop. ?>
</section>
  
<?php get_footer(); ?>
</main>

