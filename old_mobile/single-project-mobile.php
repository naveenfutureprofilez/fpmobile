<?php defined( 'ABSPATH' ) or die( 'No script available please!' ); 
/* The Template for displaying mobile single posts. */
get_header('mobile');
$project_term=array();
$post_categories = get_the_terms( $post->ID, 'project_category');

foreach($post_categories as $post_category)
{
 if ($post_category->parent == 0){
  $project_term[]= $post_category->name;
}
}
if(in_array('app',$project_term)){
  echo get_template_part( 'template','app-details' );
}else{ ?>
  
  <div class="main-wrapper-item">
    <?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>
    <div class="bread-title-holder">
    <div><img src="<?php bloginfo('template_url');?>/images/portfolio-inner.jpg" alt="portfolio-inner-banner"/></div>
      <div class="container container-heading">
        <div class="row-fluid">
          <div class="container_inner clearfix">
            <h1 class="title"><?php the_title(); ?></h1>             
          </div>
        </div>
      </div>
      </div>
      <div class="container container-m post-wrap">
        <div class="row-fluid">
          <div class="span7">
            <div id="content">
              <div class="post blog-item blog-detail" id="post-<?php the_ID(); ?>">
                <?php $format = get_post_format();
                if($format == "quote") { ?>
                <div class="citation_post clearfix">
                  <?php
                //  Citation datas
                  $post_id = get_the_ID();
                  $citation = get_post_meta($post -> ID, "_skt_postType_citation", true);
                  $citation_author = get_post_meta($post -> ID, "_skt_postType_citation_author", true); ?>
                  <blockquote class="skt-quote"> <span class="quoteauthor">&mdash; <?php echo $citation_author; ?></span> </blockquote>
                </div>
                <?php }
                if($format == "video") { ?>
                <div class="post-image clearfix">
                  <div class="video-container">
                    <?php $post_id =  get_the_ID();
                    if (get_post_meta($post->ID, '_skt_postType_youtubevideo', true)){ ?>
                    <div class="flex-video widescreen vimeo">
                      <iframe width="770" height="530" src="https://www.youtube.com/embed/<?php echo get_post_meta($post -> ID, '_skt_postType_youtubevideo', true); ?>?wmode=opaque" frameborder="0" class="youtube-video" allowfullscreen></iframe>
                    </div>
                    <?php } if (get_post_meta($post->ID, '_skt_postType_vimeovideo', true)){ ?>
                    <div class="flex-video widescreen vimeo">
                      <iframe src='https://player.vimeo.com/video/<?php echo get_post_meta($post -> ID, '_skt_postType_vimeovideo', true); ?>?portrait=0' width='770' height='530' frameborder='0'></iframe>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php }
                if($format == "gallery") {
                  $att_args = array('post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post -> ID, 'post_mime_type' => 'image', 'orderby' => 'menu_order');
                $attachments = get_posts($att_args); ?>
                <div class="slider-attach">
                  <?php if( $attachments ):
                  $bullets = get_post_meta($post -> ID, "_skt_postType_slider_bullet", true);
                    $postautoscroll = get_post_meta($post -> ID, "_skt_postType_slider_auscroll", true);
                    $postdirction = get_post_meta($post -> ID, "_skt_postType_slider_direction", true); ?>
                    <script>
                      jQuery(document).ready(function(){
                        jQuery(window).load(function () {
                          jQuery('#post-slider-<?php the_ID(); ?>                     ').flexslider({
                            animation: "fade",
                            namespace: "postformat-gallery",
                            selector: ".slides > li",
                            easing: "swing",
                            direction: "vertical",
                            slideshow: true,
                            slideshowSpeed: 5000,
                            animationSpeed: 600,
                            controlsContainer: "",
                            controlNav: false, 
                            directionNav: true,
                            prevText: "",
                            nextText: ""
                          });
                        });
                      });
                    </script>
                    <div class="image-gallery-slider" id="post-slider-<?php the_ID(); ?>">
                      <ul class="gallery-box slides">
                        <?php foreach( $attachments as $attachment ): ?>
                          <li>
                            <?php $attachment_img = wp_get_attachment_image_src($attachment -> ID, 'invert_standard_img'); ?>
                            <img src="<?php echo $attachment_img[0]; ?>" alt="<?php echo $attachment -> post_title; ?>" width="<?php echo $attachment_img[1]; ?>" height="<?php echo $attachment_img[2]; ?>" /> </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </div>
                  <!-- slider-attach -->
                  <?php } ?>
                  <div style="text-align:center;" class="featured-image-shadow-box">

                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); }else{
                      $url=get_post_meta( $post->ID,'appimgurl',true ); ?>
                      <img class="" src="<?php echo $url; ?>" data-src="<?php echo $url; ?>" />
                      <?php } ?>
                    <div class="titles">
                      <?if(!is_singular('post')){?>
                      <div style="text-align:right;" class="viewbox"><a href="<?php echo get_post_meta( $post->ID, 'preview_url',true); ?>" target="_blank"><div style="text-align:center"> <i class="ifont">Preview This Site</i></div> </a></div>
                    </div> 
                    <?php }
                    $preview_url_fp= get_post_meta( $post->ID, 'preview_url',true); 
                    if($preview_url_fp!='')
                    {
                      if($preview_url_fp=='http://newcarleases.com/index')
                        { ?>
                      <div class="previw_site"></div>
                      <?php }
                      else{ } } ?>
                  </div>
                </div>
                <!-- post --> 

              </div>
              <!-- content --> 
            </div>
            <!-- container --> 
            <!-- Sidebar -->
            <div id="sidebar" class="span5">
              <div class="bread-title">
                <h1 class="title">
                  <?php the_title(); ?>
                </h1>
                <div class="clearfix"></div>
              </div>
              <div class="skepost">
                <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'invert'));
                $preview_title= get_post_meta( $post->ID, 'preview_title',true);
                $custom_meta = get_post_meta($post->ID, '_custom-meta-box', true);
                if($preview_title!='' && !empty($custom_meta )){ ?>
                 <h4 class="ul_heading"> <?php echo $preview_title; ?></h4>
                 <?php } ?>
                 <ul class="project-services">
                  <?php   
                  if(!empty($custom_meta)){
                    foreach ($custom_meta as $value) {
                      $value1=str_replace('_', ' ', $value); 
                      $value2=str_replace('_', '-', $value);
                      $value3=str_replace('/', '-', $value2);
                      $value4=str_replace('-&', '', $value3);

                      $value5=strtolower($value4);
                      if($value5=='php'){
                        $value5='php-development';
                      } ?>
                      <li>
                        <?php echo $value1 ; ?>
                      </li>
                      <?php } } ?>
                </ul>
                <div class="clear_div"></div>
                <div id="myOnPageContentmm" style="display: none"> <?php echo do_shortcode('[contact-form-7 id="2968" title="get_a_quote_form"]');?> </div>
                <div class="get-a-qoute-but"><a href="https://futureprofilez.com/contact-us/" title="Get A Quote">Get A Quote <img src="<?php bloginfo('template_url'); ?>/assets/images/get-a-qoute-arrow.png" alt="Get-a-quote-arrow"/></a></div>
              </div>
            <?php endwhile; else : ?>
            <div class="post">
              <h2>
                <?php _e('Not Found', 'invert'); ?>
              </h2>
            </div>
            <!-- Sidebar -->
          <?php endif; ?>
        </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
          <div class="hire_banner hire_banner-inner">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets2/img/hire-wp-img.png" data-src="<?php echo get_stylesheet_directory_uri();?>/assets2/img/hire-wp-img.png" alt="hire-banner"/>
            <div class="wp-dev-block">
              <div class="wp-dev-cont">
                <h2>If you have a Similar Project. Hire our Dedicated Team for your project. </h2>
                <h4>Get full control over the selection, motivation and management.</h4>
              </div>
              <a class="hirenow" href="<?php echo site_url();?>/hire-form/?ordernum=hire-php-developer">Hire Now</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

<?php } get_footer('mobile'); ?>