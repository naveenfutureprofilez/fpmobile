<?php defined( 'ABSPATH' ) or die( 'No script available please!' ); ?>
<?php
get_header('mobile'); 
global $term, $wpdb;
$term_new = $term; ?>
<div class="main-wrapper-item">
	<div class="bread-title-holder">
      <div><img src="<?php bloginfo('template_url');?>/images/portfolio-inner_5467ca64bfa40b0189dec1135619400e.jpg" alt="portfolio-image"/></div>
      <div class="container container-heading">
        <div class="row-fluid">
          <div class="container_inner clearfix">
            <h1 class="title">
            <?php if(isset($_REQUEST['catname']) && !empty($_REQUEST['catname'])){ echo $_REQUEST['catname'];}else{ printf(single_cat_title( '', false ) ); } ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
<!-- #Container Area -->

<div class="style-filter inner-project-filter">
<!-- Category Filter -->
<dl class="group maingroup">
<dt></dt>
<dd>
	<div class="sktmenu-toggle" id="Category-nav-button">Category</div>
	<ul class="filter group" id="isofilters">
		 <?php 
		$queried_object = get_queried_object(); 
		$term_id = $queried_object->term_id;
		$term_name = $queried_object->name;
		$taxonomy_name = 'project_category';
		$args = array(
			'orderby'           => 'term_order', 
			'order'             => 'ASC',
			'hide_empty'        => false, 
			'parent'            => $term_id
		); 
		$terms = get_terms($taxonomy_name, $args);   
		 if(isset($terms) && !empty($terms)){	
		 	$currentCat = get_term_link( $term, $taxonomy_name); ?>
		
		<li><a href="<?php  echo $currentCat?>" class="<?php if(empty($_REQUEST['idslug'])) echo 'selected'; ?>">
		<?php _e('show all','invert'); ?></a></li>
		 <?php
		foreach ($terms as $category) {   
			$cats = get_term_by( 'id',$category->term_id, $taxonomy_name);						
			$cat_name=$category->name;
			$cat_slug=$category->slug; 
		 	$term_link2 = get_term_link( $category );
			if($cat_slug=='redesigns'){ ?>
				<li><a class="<?php if($_REQUEST['idslug']==$cat_slug) echo 'selected' ?>"
				href="<?php  echo $term_link2;?>" ><?php echo $cat_name; ?></a></li>
			<?php }else{ ?>
				 <li><a class="<?php if($_REQUEST['idslug']==$cat_slug) echo 'selected' ?>"  href="<?php echo home_url(); ?>/project_category/<?php  echo $cat_slug; ?>" ><?php echo $cat_name; ?></a></li>
				 <?php }
		}
		}else {				
		$currentCat = get_term_link( $term, $taxonomy_name); ?>
		
		<li><a href="<?php  echo home_url(); ?>/our-work" class="<?php if(empty($_REQUEST['idslug'])) echo ''; ?>"><?php _e('show all','invert'); ?></a></li>
		 <li><a class="selected" href="#"><?php echo $term_name; ?></a></li>
			<?php } $url_back=get_permalink(1547); ?>
	</ul>
	<a  class="backbutton selected invert-prev" title="back to our work" href="<?php echo wp_get_referer(); ?>" onclick="window.history.back();"><i class="fa fa-angle-left"></i> back</a> 
</dd>
</dl>
<!-- Category Filter -->
</div><!-- style-filter -->
<div class="clearfix">
	<div class="container post-wrap">
		<div class="row-fluid">
			<!-- Content -->
			<div id="content" class="span12">
				
				<div class="post project-temp4">
					<!-- Project Wrap -->
					<div class="project_wrap clearfix"> 
						<?php 
						$no_of_project =12;	
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$no_of_project = (isset($no_of_project)) ? $no_of_project : 10;
						$args = array( 'taxonomy' => 'project_category' );
						$data_type = null; 
						$data_id = 0;  ?>
						 	
						<div id="wrap" class="clearfix">
							<div style="clear:both;"></div>
							<div id="container-isotop" class="portfolio group four-col">
							<?php 
							// The Loop
							if(isset($_REQUEST['idslug']) && !empty($_REQUEST['idslug'])){
								
							$idslug = $_REQUEST['idslug'];
												
							$args['tax_query'] = array(
								array(
									'taxonomy' => 'project_category',
									'terms' => $idslug,
									'field' => 'slug',

									),
								);
							    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args['paged'] = $paged;
								query_posts($args); 
								}
								
								if($term == 'wordpress1' || $term == 'responsive-design'){
									$args['tax_query'] = array(
										array(
											'taxonomy' => 'project_category',
											'terms' => $term,
											'field' => 'slug',
											
											),
										);
												
									$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
									
									$args['paged'] = $paged;
									$args['orderby'] = 'menu_order';
									$args['order'] = 'ASC';
									query_posts($args); 
								}
								
								global $wp_query;

								if ( have_posts() ) : while ( have_posts() ) : the_post();
								
								$terms = get_the_terms( $post->ID, 'project_category' );
								
								$cat_links = array();
								if(isset($terms) && !empty($terms))
								foreach ( $terms as $term ) {
									$cat_links[] = $term->slug;
								}
								if(isset($cat_links) && !empty($cat_links))
								foreach($cat_links as $itm){
									$data_type .= $itm.' ';
								}
								$data_id++; ?>
								
								<!-- Project Box -->
								<div class="item project_box span3 <?php echo $data_type;$data_type =null; ?> isotope-item" data-type="<?php echo $data_type;$data_type =null; ?>" data-id="id-<?php echo $data_id; ?>">
<!-- standard -->
<?php $siteurl = esc_url( home_url( '/' ) );
if($currentCat==$siteurl."graphic-design/" || $currentCat==$siteurl."project_category/app/" || $currentCat==$siteurl."project_category/android/" || $currentCat==$siteurl."project_category/cross-platform/" || $currentCat==$siteurl."project_category/iphone/")
{ ?>

<div class="project-item" id="post-<?php the_ID(); ?>">
<?php 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'invert_portfolio_image' );
$url=get_post_meta( $post->ID,'appimgurl',true ); ?>
<div class="feature_image" style="position: relative;">
<?php if($url==''){ ?>
	<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border" src="<?php echo $image[0]; ?>" alt="Thumbnail" /></a>
<?php }else{ ?>
	<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border" src="<?php echo $url; ?>" alt="<?php the_title(); ?>" /></a>	
<?php } ?>
</div>
<div class="title">
<div class="titlebox"><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title();?></a></div>

</div>										
										
<?php  ?>
</div>	
<?php }else{ ?>				
<div class="project-item" id="post-<?php the_ID(); ?>">
<?php 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'invert_portfolio_image' );
$url=get_post_meta( $post->ID,'preview_image_url',true ); ?>
<div class="feature_image" style="position: relative;">
<?php if($url==''){ ?>
<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" /></a>
<?php }else{ ?>
	<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img class="skin-border" src="<?php echo $url; ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
</div>
<div class="title">
<div class="titlebox">
<a href="<?php  the_permalink();?>"><?php the_title();?></a></div>
<div style="text-align:right;" class="viewbox"><a href="<?php echo get_post_meta( $post->ID, 'preview_url',true); ?>" target="_blank"> <div style="text-align:center;"> <i  class="ifont">visit site</i></div> </a></div>
											
</div>
<?php  ?>
</div>
<?php } ?>
<!-- standard -->
</div>
<!-- Project Box -->
<?php
endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
							
<div class="clearfix"></div>							
<div class="navigation">
<?php fptheme_paginate(array('range' => 2)); ?>
</div>  
<?php wp_reset_query(); ?>
</div>
</div>
<!-- Project Wrap -->
</div>	
				 
<div class="hire_banner">
<img src="<?php bloginfo('template_url');?>/assets/images/hire-wp-img.png" data-src="<?php bloginfo('template_url');?>/assets/images/hire-wp-img.png" alt="hire-banner"/>
<div class="wp-dev-block">
<?php
$termname = get_term_by('slug', $term_new, 'project_category'); ?>
<div class="wp-dev-cont">
<h3>Hire Dedicated</h3>
<?php if(is_tax('project_category', 'app')){ 
	echo '<h2> App Developer</h2>';
}else if(is_tax('project_category', 'graphic-design')){ 
	echo '<h2> graphic designer</h2>';
}else if(is_tax('project_category', 'html5css3')){ 
	echo '<h2> html Developer</h2>';
}else if(is_tax('project_category', 'social-networking')){ 
	echo '<h2> web Developer</h2>';
}else if(is_tax('project_category', 'our-designs') || is_tax('project_category', 'other')) { ?>
	<h2>UI/UX Designer & Developer</h2>
<?php }else if(is_tax('project_category', 'wordpress')){ 
	echo '<h2> Wordpress Developer</h2>';
}else if(is_tax('project_category', 'drupal')){ 
	echo '<h2> Drupal Developer</h2>';
}else if(is_tax('project_category', 'joomla')){ 
	echo '<h2> Joomla Developer</h2>';
}else if(is_tax('project_category', 'mediawiki')){ 
	echo '<h2> Mediawiki Developer</h2>';
}else if(is_tax('project_category', 'moodle')){
	echo '<h2> Moodle Developer</h2>';
}else if(is_tax('project_category', 'php-fusion')){
	echo '<h2> Php Fusion Developer</h2>';
}else if(is_tax('project_category', 'pixie')){
	echo '<h2> Pixie Developer</h2>';
}else if(is_tax('project_category', 'cakephp')){
	echo '<h2> Cake Php Developer</h2>';
}else if(is_tax('project_category', 'codeigniter')){
	echo '<h2> Codeigniter Developer</h2>';
}else if(is_tax('project_category', 'laravel')){
	echo '<h2> Laravel Developer</h2>';
}else if(is_tax('project_category', 'symfony')){
	echo '<h2> Symfony Developer</h2>';
}else if(is_tax('project_category', 'yii')){
	echo '<h2> Yii Developer</h2>';
}else if(is_tax('project_category', 'zend')){
	echo '<h2> zend Developer</h2>';
}else if(is_tax('project_category', 'magento')){
	echo '<h2> magento Developer</h2>';
}else if(is_tax('project_category', 'opencart')){ 
	echo '<h2> opencart Developer</h2>';
}else if(is_tax('project_category', 'php-based')){ 
	echo '<h2> php based Developer</h2>';
}else if(is_tax('project_category', 'prestashop')){ 
	echo '<h2> prestashop Developer</h2>';
}else if(is_tax('project_category', 'shopify-2')){ 
	echo '<h2> shopify Developer</h2>';
}else if(is_tax('project_category', 'virtuemart')){ 
	echo '<h2> virtuemart Developer</h2>';
}else if(is_tax('project_category', 'woocommerce')){ 
	echo '<h2> woocommerce Developer</h2>';
}else if(is_tax('project_category', 'zencart')){ 
	echo '<h2> zencart Developer</h2>';
}else if(is_tax('project_category', 'app')){ 
	echo '<h2> app Developer</h2>';
}else if(is_tax('project_category', 'live-projects')){ 
	echo '<h2> Web Designer & Developer</h2>';
}else if(is_tax('project_category', 'running-projects')){ 
	echo '<h2> Web Designer & Developer</h2>';
}else if(is_tax('project_category', 'latest-design')){ 
	echo '<h2> Web Designer & Developer</h2>';
}else if(is_tax('project_category', 'responsive-design')){ 
	echo '<h2> Web Designer & Developer</h2>';
}else if(is_tax('project_category', 'cms-wordpress')){ 
	echo '<h2> Wordpress Developer</h2>';
}else { ?>							
	<h2><?php echo $termname->name; ?> Expert</h2>
	<?php } ?>
	<h4>Engage a specialist as per your project requirement <?php //echo site_url('/'). get_query_var('project_category'); ?></h4>
	</div>
<?php if(is_tax('project_category', 'seo')) { ?>
<a class="hirenow" href="https://futureprofilez.com/hire-form/?ordernum=hire-seo-expert">Hire Now</a>
<?php }else if(is_tax('project_category', 'wordpress')) { ?>
<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer/">Hire Now</a>
<?php }else if(is_tax('project_category', 'drupal')){ 
	echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-drupal-developer/">Hire Now</a>';
}else if(is_tax('project_category', 'cms-wordpress')){
	echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer">Hire Now</a>';
}else if(is_tax('project_category', 'joomla')){ 
							
echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-joomla-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'cakephp')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-cakephp-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'codeigniter')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-codeigniter-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'laravel')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-laravel-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'yii')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-yii-developer/">Hire Now</a>';
	}

else if(is_tax('project_category', 'magento')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'php-based')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-php-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'shopify-2')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-shopify-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'woocommerce')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'html5css3')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-html-developers/">Hire Now</a>';
	}
	
else if(is_tax('project_category', 'social-networking')){ 

echo '<a class="hirenow" href="http://futureprofilez.com/hire/hire-cms-web-developer/">Hire Now</a>';
	}


else if (is_tax('project_category', 'cms')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'latest-design')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'responsive-design')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-html-developers/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'php')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-php-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'ecommerce')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'opencart')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'prestashop')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'zencart')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'virtuemart')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'mediawiki')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cms-web-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'magento1')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-magento-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'other')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'graphic-design')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'business-cards')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'broucher')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'pamphlet')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'logo')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-graphic-designer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'our-designs')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-html-developers/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'php-framework')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cakephp-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'shopify')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-shopify-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'live-projects')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer/">Hire Now</a>
<?php }

else if (is_tax('project_category', 'php-fusion')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cms-web-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'moodle')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cms-web-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'pixie')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cms-web-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'symfony')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cakephp-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'zend')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-cakephp-developer">Hire Now</a>
<?php }

else if (is_tax('project_category', 'running-projects')){ ?> 
<a class="hirenow" href="http://futureprofilez.com/hire/hire-wordpress-developer/">Hire Now</a>
							<?php }
							
							?>
                    </div>
                </div>
				 
				
			</div>
			<!-- Content -->
		</div>
	</div>
</div>
</div>
</div>
<!-- #Container Area -->
<?php get_footer('mobile'); ?>
