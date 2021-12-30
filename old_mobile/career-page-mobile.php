<?php defined( 'ABSPATH' ) or die( 'No script available please!' );
/* Template Name: Career Page mobile Template */
get_header('mobile'); ?>

<style>
span.no_post {
    color: red!important;font-size: 15px;
}
span.no_posts { color: red!important; font-size: 15px; font-style: italic; padding-left: 50px; }
</style>
<div class="main-wrapper-item"> 
	<?php if(have_posts()) :
	while(have_posts()) : the_post();
	$pagetitle = get_post_meta($post->ID, "_skt_pagetitle_metabox", true);
	$pagetitle = ((isset($pagetitle) && $pagetitle !="") ? $pagetitle : '1' );
	if($pagetitle == 1) { ?>
<div class="bread-title-holder">
  <?php $banner= get_post_meta(get_the_ID(), '_pagetitle_bg', true);
  if($banner!=""){ ?>
  	<div><img class="after-load" src="#" data-src="<?php echo get_post_meta(get_the_ID(), '_pagetitle_bg', true); ?>" alt="<?php the_title(); ?>-banner-image" ></div>
  <?php } else { ?>
  	<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
  <?php } ?>

  <div class="container">
    <div class="row-fluid">
      <div class="container_inner clearfix" style="height: 200px;"> 
      
      </div>
    </div>
  </div>
</div>
<?php }
endwhile; endif; ?>

	<div class="page-content left-sidebar">
		<div class="post-wrap"> 
			<div class="row-fluid">
			    <div id="content" class="span12 career-tamplate">    
                 <img src="<?php echo get_stylesheet_directory_uri();?>/mobile/images/hiring.png" alt="">
                 <div class="hiring-block">
				<?php if (have_posts()) :
				while(have_posts()) : the_post();
				the_content();
				endwhile; endif; ?>
                </div>
				<div class="post career-tab" id="post-<?php the_ID(); ?>">
					<div id="accordionms" class="accordion">
					<?php $my_query = new WP_Query('post_type=fpcareers');
					while ($my_query->have_posts()) : $my_query->the_post();
					$Opening = get_post_meta( $post->ID, 'current_openings',true);
					if(!empty($Opening)){
						$x = $Opening;
						$class = "";
					}else{
						$x="*";
						$class = "no_post";
					} ?>

					<h3 class="accordion_head"><?php the_title(); ?>
					<span class="current_openings <?php echo $class; ?>">(<?php echo $x;  ?>) </span>
					<span class="career_exp"><?php echo get_post_meta( $post->ID, 'experience',true); ?></span>
					<span class="plusminus">+</span>
					</h3>
					<div class="accordion_body"  style="display: none;">
					<p>
					<span class="tag_cl">Job Description :</span><br />
					<?php echo get_post_meta( $post->ID, 'short_description',true); ?>
					</p>
					<div class="fifty-main">
					<p class="fifty">
					<span class="tag_cl">Exp : </span>
					<?php echo get_post_meta( $post->ID, 'experience',true); ?>
					</p>
					<p class="fifty">
					<span class="tag_cl">Current Openings : </span>
					<?php echo get_post_meta( $post->ID, 'current_openings',true); ?>
					</p>
					<p class="fifty">
						<span class="tag_cl">Job Location : </span>
						<?php echo get_post_meta( $post->ID, 'technology',true); ?>
					</p>
					<p class="fifty">
						<span class="tag_cl">Qualification : </span>
						<?php echo get_post_meta( $post->ID, 'requirement',true); ?>
					</p>
                    <div class="cls"></div>
                    </div>
                            
					<div>
						<span class="tag_cl">Key Skills : </span>
					<?php echo get_post_meta( $post->ID, 'key',true);
					?>
					</div>
					<div>
						<span class="tag_cl">Key Responsibilities : </span>
						<?php echo get_post_meta( $post->ID, 'Responsibilities',true); ?>
					</div>
					<div class="apply-btn">
						<a href="http://futureprofilez.com/career_form/?value=<?php echo base64_encode($post->post_title);  ?>">Apply Now</a>
					</div>

					</div>
					<?php endwhile;  wp_reset_query(); ?>
					</div>
				   </div>
			<?php if($x=="*"){ ?>
				<span class="no_posts">**Not hiring for this position,but you could still apply and we would get back to you when opening would be there.. </span>
			<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php get_footer('mobile');  ?>
<script>
  jQuery(document).ready(function() {
//toggle the component with class accordion_body
jQuery(".accordion_head").click(function() {
if (jQuery('.accordion_body').is(':visible')) {
  jQuery(".accordion_body").slideUp(300);
  jQuery(".plusminus").text('+');
}
if (jQuery(this).next(".accordion_body").is(':visible')) {
  jQuery(this).next(".accordion_body").slideUp(300);
  jQuery(this).children(".plusminus").text('+');
} else {
  jQuery(this).next(".accordion_body").slideDown(300);
  jQuery(this).children(".plusminus").text('-');
}
});
});
</script>