<?php get_header('mobile');
/* Template Name: real state home*/
$current_term = get_queried_object();

//Switch statement for class
function real_state_class($i){
  switch ($i) {
    case 0:
      return 'shopify-gradiean';
      break;

    case 1:
      return 'symfony-gradiean';
      break;

    case 2:
      return 'prestaShop-gradiean';
      break;

    case 3:
      return 'opencart-gradiean';
      break;

    case 4:
      return 'wordpress-gradiean';
      break;

    case 5:
      return 'drupal-gradiean';
      break;

    case 6:
      return 'magento-gradiean';
      break;

    case 7:
      return 'light-blue-grdient';
      break;

    
    default:
      return 'light-blue-grdient';
      break;
  }
} ?>
<!-- container -->
 <div class="container-m">  
  	<div class="industries-inner">
        <ul>
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $loop = new WP_Query( 
        array( 'post_type' => 'project',                
          'paged' =>  $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'industry',
              'field' => 'slug',
              'terms' => $current_term->slug,
              )
            )
          ) );
          $i=0;
          if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : $loop->the_post();
          $ind_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'invert_portfolio_image' );
          $preview_image=get_post_meta( get_the_id(),'preview_image_url',true );
          $ind_image = !empty($preview_image)?$preview_image:$ind_image[0];
          if($ind_image){ ?>

            <li>
              <div class="industries-img">
              <a href="<?php the_permalink(); ?>">
                <div class="industrise-logo"><img src="<?php echo $ind_image; ?>"></div>
            <h3 class="<?php echo real_state_class($i); ?>"><?php the_title(); ?></h3> 
              </div>
              </a>
            </li>

          <?php } $i++; endwhile; wp_reset_query(); endif; ?>

          </ul>
        </div> 
        <div class="navigation">
          <?php fptheme_paginate(array('range' => 1)); ?>  
        </div>
  	<div class="clr"></div>
  
 </div>
<?php get_footer('mobile');?>