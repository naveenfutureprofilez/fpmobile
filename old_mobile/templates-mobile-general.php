<?php get_header('mobile'); ?>
<!-- container -->
<div class="container-m main-mobile web-development paymentbutton_general ">
  <?php
  
 
  while ( have_posts()) : the_post(); ?>
    <div class="blog-item " >
     
     <div class="desc-blog">
      
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
        <div class="paymentbutton_data"> <?php the_content(); ?></div>
    
     
    </div>

  </div>
<?php endwhile; wp_reset_query(); ?>

  </div>

  <!-- footer -->
  <?php get_footer('mobile');?>