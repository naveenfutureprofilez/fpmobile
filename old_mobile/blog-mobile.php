<?php get_header('mobile'); ?>
<!-- container -->
<div class="container-m main-mobile web-development ">
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged'):1;
  $x=1;
  $args = array('post_type' => 'post','posts_per_page' => '4', 'paged'=>$paged );
  $query = new WP_Query($args);
  while ( $query->have_posts()) : $query->the_post(); ?>
    <div class="blog-item " >
      <div class="blog-thumnil">
      <a href="<?php the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?> " alt="">
     </div>
     <div class="desc-blog">
      <ul class="blog_inline_list">
        <li class="list_color"><i class="fa fa-asterisk"></i>  <a href="<?php the_permalink(); ?>" rel="category tag"><?php the_title();?></a></li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></li>
        <li><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?></li>   
      </ul>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="view-more">View more</a>
    </div>

  </div>
<?php endwhile; wp_reset_query(); ?>

  <?php
  $big = 999999999;
  $pages = paginate_links( array( 'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), 'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages, 'type' => 'array', ) ); 
  if( is_array( $pages ) ) { $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'); echo '<ul class=pagination> ';
  foreach ( $pages as $page ) {
    echo "<li>$page</li>"; }
    echo '</ul>'; } ?>
    
    <div class="clr"></div>
  </div>

  <!-- footer -->
  <?php get_footer('mobile');?>