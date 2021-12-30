<?php defined( 'ABSPATH' ) or die( 'No script available please!' );
/* The template name: Your Wordpress Project New Mobile   */
get_header();


?>

<!-- final-header -->
<div class="final-header new-header">
	<div class="container"> 
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="wp-landing-page-logo">
					<a href="<?php echo home_url();?>">
						<img src="<?php echo home_url();?>/wp-content/themes/fptheme/assets/images/logo31.png"/>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<ul>
					<li><a href="<?php echo home_url();?>">Home</a></li>
				</ul>
				<div class="contact_btnfinal">
					<a href="<?php echo home_url();?>/contact-us" class="btn">Contact Us &#8594;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- final-banner -->
<section class="final-banner-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/28april/banner-final-top-min.png);">
	<div class="container">
		<div class="col-lg-8 col-md-7">
			<div class="final-banner-detail">
				<h2>The WordPress Experts Your Brand Needs</h2>
				<p>Affordable WordPress Web Development Services</p>
				<p>We are a trend-setting WordPress Development Agency in India capable of serving visually-stunning, and highly robust business websites and applications to augment all-scales of businesses & across all market spheres.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-5">
			<div class="final-banner-form">
				<div class="final-form-heading">
					<h3>Start Your Project!</h3>
					<p>Whatever the challenge, we always deliver a solution.</p>
				</div>
				<form id="Ywp-form" action="" role="form" name="ywp-form" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" id="ywp-name" name="Name" class="form-control required" placeholder="Your Name*"/>
					</div>
					<div class="form-group">
						<input type="email" id="ywp-email" name="Email" class="form-control required" placeholder="Work Email*" />
					</div>
					<div class="form-group">
						<input type="tel" id="ywp-tel" name="Phone" class="form-control required" placeholder="Phone*" />
					</div>
					<div class="form-group">
						<input type="text" id="ywp-company" name="Ywp-Company" class="form-control" placeholder="Company" />
					</div>
					<div class="form-group">
						<textarea class="form-control" id="ywp-notes" placeholder="Notes" name="Notes"></textarea>
					</div>	
					<div class="final-form-btn captcha-box">
						<div id="captchashow_pop">
							<?php  
							echo $captchha_text_pop=fp_captcha_string($length = 6); 
							?>
						</div>
						<input type="hidden" name="captcha_show_pop" value="<?php echo  $captchha_text_pop; ?>" size="40" id="captchashow_id_pop"> 
						<input type="text" name="captcha_pop" value="" placeholder="Enter Captcha" id="captch_id_pop">
						<input type="submit" class="btn button-final" id="submit-ywp" value="Scale Your Business" />
						<div class="response"></div>
					</div>				
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Our Expertise -->
<section class="final-experties">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="final-top-heading">
					<h2>Our Expertise</h2>
					<p>By utilizing the highly flexible framework that is WordPress, our team of highly experienced, educated, and enthusiastic web developers have fashioned some of the most dynamic, feature-rich websites in several industrial verticals. With a global clientele base as a result of on-time project delivery & a 100% satisfaction rate, we have managed to reach the pinnacle of our respective IT sector & we settle for nothing less than excellence. Here’s what separates us from any run-of-the-mill IT firm.</p>
				</div>
			</div>
		</div>
		<div class="row detail-row">
			<div class="col-lg-6 col-md-6">
				<div class="final-experties-left">
					<h3>World Renowned WordPress Agency Serving First-Rate Digital Solutions</h3>
					<p>The end goal with any project for us is to supplement the client’s brand reach & image, whether it’s through website upgrading or proven digital marketing strategies. Our methodologies have a proven track record across global customers & guarantee subsequent business expansion.</p>
					<p>WordPress is the tool that we use for building highly complex sites, SaaS arrangements, CRM, and other online business bodies. We center around WordPress improvement and guarantee that in every project.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="final-experties-right">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/experties-round-min.png" alt="Icon" />
					<ul>
						<li>
							<div class="final-experties-box">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/experties-icon1-min.png" alt="Icon" />
								<h4>11+</h4>
								<p>Years Of Coding Experience</p>
							</div>
						</li>
						<li>
							<div class="final-experties-box">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/experties-icon2-min.png" alt="Icon" />
								<h4>1573+</h4>
								<p>WordPress Websites Launched Succesfully</p>
							</div>
						</li>
						<li>
							<div class="final-experties-box">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/experties-icon3-min.png" alt="Icon" />
								<h4>65+</h4>
								<p>Plugins Developed & Customized</p>
							</div>
						</li>
						<li>
							<div class="final-experties-box">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/experties-icon4-min.png" alt="Icon" />
								<h4>128+</h4>
								<p>Woocommerce Stores Built</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Creative Work -->
<section class="final-creative">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="creative-imgbox">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/creativeimg1.1-min.jpg" alt="Icon" />
				</div>
				<div class="creative-imgbox">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/creativeimg2-min.jpg" alt="Icon" />
				</div>
				<div class="creative-count">
					<div class="creative-count-data">
						<p>We’ve Completed More Than</p>
						<h3>1573</h3>
						<p>Projects for our amazing clients,</p>
					</div>
					<div class="creative-button">
						<a href="<?php echo home_url();?>/project_category/wordpress/" class="btn">View All Work</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="creative-heading">
					<h5>Portfolio Designs</h5>
					<h2>Creative Work</h2>
					<p>We create innovative & appealing web designs that are fully customized to portray your business image.</p>
				</div>
				<div class="creative-imgbox">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/creativeimg3-min.jpg" alt="Icon" />
				</div>
				<div class="creative-imgbox">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/creativeimg4.1-min.jpg" alt="Icon" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Why choose us -->
<section class="final-choose-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="final-top-heading">
					<h2>Why Choose us</h2>
					<p>Our first-rate track record speaks for the incredible success stories we have been able to kick-start through our exceptionally talented core of WordPress experts. We are a suitable team if you are not content with an ordinary website & are planning to offer the best aesthetics.</p>
					<h4>Here’s why Future Profilez is THE WordPress Agency to empower all scaled businesses</h4>
				</div>
				<div class="why-reasons">
					<div class="reason-three reason-left">
						<ul>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon1-min.png" alt="Icon" />
									</div>
									<h4>Unmatched Industry Experience</h4>
								</div>
							</li>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon2-min.png" alt="Icon" />
									</div>
									<h4>Proven Track Record</h4>
								</div>
							</li>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon3-min.png" alt="Icon" />
									</div>
									<h4>Certified In-House Team Of IT Experts</h4>
								</div>
							</li>
						</ul>
					</div>
					<div class="reason-middle">
						<div class="reason-mid-round">
							<div>
								<h2><strong>6</strong> Reasons</h2>
								<h3>to Choose us</h3>
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/3march/reason-fplogo.png" alt="Logo" />
							</div>
						</div>
					</div>
					<div class="reason-three reason-right">
						<ul>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon4-min.png" alt="Icon" />
									</div>
									<h4>1573+ Successful Projects Delivered</h4>
								</div>
							</li>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon5-min.png" alt="Icon" />
									</div>
									<h4>Cost-Effective Metholodiges</h4>
								</div>
							</li>
							<li>
								<div class="reason-box">
									<div class="reason-icon">
										<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/28april/reason-icon6-min.png" alt="Icon" />
									</div>
									<h4>Globally Trusted WordPress Solutions</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Why choose us -->
<section class="final-faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="final-top-heading">
					<h2>Frequently Asked Questions (FAQ)</h2>
				</div>
				<div class="final-faq-box">
					<?php
					$collapse_args = array(
						'post_type'         => 'questionnaire',
						'post_status'       => 'publish',
						'order'=>'ASC',
						'tax_query'         => array(
							array(
								'taxonomy'  => 'cate_auestioner',
								'field'     => 'slug',
								'terms'     => 'start-your-wordpress-project'
							)
						)
					);

					$loop = new WP_Query($collapse_args);

					if ( $loop->have_posts() ) : 
						while ($loop->have_posts() ) : $loop->the_post();
							?>
							<div class="faqbox-new">
								<button type="button" class="btn"><strong>Q.</strong><?php the_title();?></button> 
								<div class="faq-content">
									<strong>A</strong>
									<?php the_content();?>
								</div>
							</div>
						<?php endwhile; wp_reset_query(); endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
	// Faq
	jQuery('.faqbox-new button.btn').click(function(e) {
		e.preventDefault();
		var $this = jQuery(this);
		if ($this.next().hasClass('active')) {
			$this.next().removeClass('active');
			$this.next().slideUp(350);
		} else {
			$this.parent().parent().find('.faq-content').removeClass('active');
			$this.parent().parent().find('.faq-content').slideUp(350);
			$this.next().toggleClass('active');
			$this.next().slideToggle(350);
		}
	});
</script>
<?php get_footer(); ?>

