<?php defined( 'ABSPATH' ) or die( 'No script available please!' );
/* Template name: Portfollio Work Template */ 
get_header('mobile');
if(have_posts()) :
while(have_posts()) : the_post(); ?>  
<div class="bread-title-holder"> 
    <div><img class="after-load" src="#" data-src="<?php bloginfo('template_url');?>/images/our_work.jpg" alt="our-work-banner"/></div>
    <div class="container container-heading">
        <div class="row-fluid">
            <div class="container_inner clearfix">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div> 
<!-- #Container Area -->
<div class="style-filter">
 <!-- Category Filter -->
  <dl class="group maingroup">
	<dt></dt>
	<div id="#menu-main">
    	<div class="sktmenu-toggle" id="Category-nav-button">Category</div>
		<ul class="filter group" id="isofilters">
			<li><a href="JavaScript:void(0);" data-filter="*" class="selected"><?php _e('show all','invert'); ?></a></li>
			 <?php
		 	$args = array( 'taxonomy' => 'project_category','orderby' => 'date',  'hide_empty' => 0, 'exclude' => array('158','120'), 'parent' => 0, );
			$categories=get_categories($args);
			foreach ($categories as $category) 
			{
				$cat_name=$category->name;
				$cat_slug=$category->slug;
				$term_link = get_term_link( $category );
				if($category->parent == 0) {
					$top_parent = 1; 
				}else{
					$top_parent = 0;
				}
				$children = get_term_children($category->term_id, 'project_category');
				if( !empty( $children ) || $top_parent == '1' &&  $cat_name!="uncategorized"){ ?>
					<li class="selected"><a href="<?php echo $term_link ; ?>"><?php echo $cat_name;  ?></a></li>
				<?php } } ?>
		</ul>  
	</div>
 </dl>

</div>
<div class="clearfix">
	<div class="container post-wrap">
		<div class="row-fluid">
			<!-- Content -->
			<div id="content" class="span12">
				<div class="post project-temp4" id="post-<?php the_ID(); ?>" >
					<!-- Project Wrap -->
					<div class="project_wrap clearfix">
					<?php
					$no_of_project = 12;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$no_of_project = (isset($no_of_project)) ? $no_of_project : 12;
					$args=array('post_type' => 'project','posts_per_page' => $no_of_project,'paged' => $paged,'orderby'=>'name', 'order' => 'ASC');
					$args['tax_query'] = array(
						array(
						    'taxonomy' => 'project_category',
						'terms' => array('graphic-design','app'),
						'field' => 'slug',
						'operator' => 'NOT IN',
						    ),
						array(
						'taxonomy' => 'project_tag',
						'terms' => array('featured'),
						'field' => 'slug',
						    ),						    
						);
						
						query_posts($args);					
						
						$data_type = null;
						$data_id = 0; ?>
						<div id="wrap" class="clearfix">
						
							<div id="container-isotop" class="portfolio group four-col">
							<?php 
							// The Loop
							while ( have_posts() ) : the_post();
							$terms = get_the_terms( $post->ID, 'project_category' ); 
							$cat_links = array();
							if(!empty($terms )){
								foreach ( $terms as $term ) {
									$cat_links[] = $term->slug;
								}
							}
							if(!empty($cat_links )){
								foreach($cat_links as $itm){
									$data_type .= $itm.' ';
								}
							}
								$data_id++; ?> 
								<!-- Project Box -->
							<div class="item project_box span3  <?php echo $data_type;$data_type =null; ?> isotope-item" data-type="<?php echo $data_type;$data_type =null; ?>" data-id="id-<?php echo $data_id; ?>">
							<!-- standard -->
							<div class="project-item" id="post-<?php the_ID(); ?>">
							<?php 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'invert_portfolio_image' );
										 
							$url=get_post_meta( $post->ID,'preview_image_url',true ); ?>
							<div class="feature_image" style="position: relative;">
							<?php if($url==''){?>
							<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border after-load" src="<?php echo $image[0]; ?>" data-src="<?php echo $image[0]; ?>" alt="Thumbnail" /></a>
							<?php } else{ ?>
							<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border after-load" src="<?php echo $url; ?>" data-src="<?php echo $url; ?>" alt="<?php the_title(); ?>-portfolio-image" /></a>
							<?php } ?>
							</div>
							</div>
							<!-- standard -->
							</div>
							<!-- Project Box -->
							<?php endwhile; ?>
							</div>
							<div class="clearfix"></div>
							
							<div class="navigation">	
							<?php fptheme_paginate(); ?>
							</div>  
								
							<?php wp_reset_query(); ?>
						</div>
					</div>
				<!-- Project Wrap -->
				</div>	
				<?php endwhile; else : ?>
					<div class="post"><h2><?php _e('Not Found','invert'); ?></h2></div>
				<?php endif; ?>
                
                <div class="hire_banner">
                	<img src="<?php echo get_template_directory_uri();?>/assets/images/hire-wp-img.png" data-src="<?php echo get_template_directory_uri();?>/assets/images/hire-wp-img.png" alt="hire-banner"/>
                    <div class="wp-dev-block">
                    	<div class="wp-dev-cont">
                    		<h3>Hire Dedicated</h3>
	                    	<h2>UI/UX Designers & Developers</h2>
	                    	<h4>Engage a specialist as per your project requirement</h4>
                    	</div>
                    	<a class="hirenow" href="http://futureprofilez.com/hire-form/?ordernum=hire-php-developer" >Hire Now</a>
                    </div>
                </div>

			</div>
			<!-- Content -->
		</div>
	</div>
</div>
</div>
<!-- #Container Area -->
<?php get_footer('mobile'); ?>