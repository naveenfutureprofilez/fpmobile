<?php defined( 'ABSPATH' ) or die( 'No script available please!' );
/* Template Name: Hire Detailsmobile Form Page */
get_header('mobile'); ?>
<script>
jQuery(document).ready(function(){jQuery("#hireclient").click(function(){var queryArr=[];var queryStr;if(jQuery.trim(jQuery('#name_hiredetail').val())=='')
{jQuery('#name_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter your Name.';queryArr.push(queryStr);}
else{jQuery('#name_hiredetail').css("border","1px solid #DDDDDD");}
if(jQuery.trim(jQuery('#company_hiredetail').val())=='')
{jQuery('#company_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please Selecet.';queryArr.push(queryStr);}
else{jQuery('#company_hiredetail').css("border","1px solid #DDDDDD");}
if(jQuery.trim(jQuery('#category_hiredetail').val())=='Select Category')
{jQuery('#category_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter Message.';queryArr.push(queryStr);}
else{jQuery('#category_hiredetail').css("border","1px solid #DDDDDD");}

if(jQuery.trim(jQuery('#project_hiredetail').val())=='')
{jQuery('#project_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter Message.';queryArr.push(queryStr);}
else{jQuery('#project_hiredetail').css("border","1px solid #DDDDDD");}
if(jQuery.trim(jQuery('#phone_hiredetail').val())=='')
{jQuery('#phone_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter your Phone Number.';queryArr.push(queryStr);}
else{var phonenu=/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;if(!phonenu.test(jQuery('#phone_hiredetail').val())){jQuery('#phone_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter valid phone number.';queryArr.push(queryStr);}
else{jQuery('#phone_hiredetail').css("border","1px solid #DDDDDD");}}
if(jQuery.trim(jQuery('#email_hiredetail').val())=='')
{jQuery('#email_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter your email.';queryArr.push(queryStr);}
else{var emailReg=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;if(!emailReg.test(jQuery('#email_hiredetail').val())){jQuery('#email_hiredetail').attr("style","border:solid 1px #FF0000 !important");queryStr='Please enter valid email id.';queryArr.push(queryStr);}
else{jQuery('#email_hiredetail').css("border","1px solid #DDDDDD");}}
var listOfNumbers=queryArr.join('<br>');if(jQuery.trim(listOfNumbers)=='')
{return true;}
else{return false;}});jQuery("#hiredetaladd").find('input').keypress(function(){jQuery(this).css("border","1px solid #c1c1c1");});jQuery("#hiredetaladd").find('select').change(function(){jQuery(this).css("border","1px solid #c1c1c1");});jQuery("#hiredetaladd").find('textarea').change(function(){jQuery(this).css("border","1px solid #c1c1c1");});});
</script>
<?php if(have_posts()) : 
while(have_posts()) : the_post();
$pagetitle = ((isset($pagetitle) && $pagetitle !="") ? $pagetitle : '1' ); 
if($pagetitle == 1) { ?>
<div class="bread-title-holder">
<?php $banner= get_post_meta(get_the_ID(), '_pagetitle_bg', true); 
if($banner!=""){ ?>
<div><img src="<?php echo get_post_meta(get_the_ID(), '_pagetitle_bg', true); ?>" height="205px" width="100%" ></div><?php } else { ?>	<div class="bread-title-bg-image full-bg-breadimage-fixed"></div><?php } ?>
	<div class="container">
		<div class="row-fluid">
		  <div class="container_inner clearfix" style="height: 200px;">
			</div>
		 </div>
	</div>
</div>
<?php } ?>
<div class="container-m inner-clr-white">
<div class="page-content fullwidth-temp">
	<div class="post-wrap contact-form">
		<h2>Your Contact Information</h2>
		<div class="row-fluid">
			
			<div id="content" class="span12">
			<div class="post" id="post-<?php the_ID(); ?>">
			<div class="skepost">
			<div>
			<?php if(isset($_POST['hireclient'])){
			extract($_POST);
			}else {
				$name_hiredetail='';$company_hiredetail='';$email_hiredetail='';$phone_hiredetail='';$model_hire='';$project_hiredetail='';
				$category_hiredetail = isset($_REQUEST['ordernum']) ? $_REQUEST['ordernum']:'';
				} ?>					
							
			<form id="hiredetaladd" action="" method="post" enctype="multipart/form-data" onSubmit="return checkform(this)">
			<div class="hire-form">
			<div style="float:left;width:50%">
			<input type="text" placeholder="Your Name" id="name_hiredetail" class="detail_name hire_deve_detail" size="40" value="<?php echo $name_hiredetail; ?>" name="name_hiredetail">
			<input type="text" placeholder="Your Company" id="company_hiredetail" class="detail_hire hire_deve_detail" size="40" value="<?php echo $company_hiredetail; ?>" name="company_hiredetail">
			<select id="category_hiredetail" name="category_hiredetail" class="drop_model_hire" id="model_hire">
			<option  value="Select Category">Select Category</option>	
			<?php $arg=array('post_type'=>'hire','posts_per_page'=>'-1') ;
				  $cat_query= new Wp_Query($arg);  
			      while ($cat_query->have_posts()):$cat_query->the_post(); 
				  global $post;
                  $post_slug=$post->post_name;
			  ?>
			<option value="<?php echo $post_slug; ?>" <?php if($category_hiredetail == $post_slug) echo 'selected'; ?>> <?php the_title(); ?></option>
			<?php  endwhile; ?>
		</select>
		</div>
		<div style="float:right; width:50%" class="right-form">
		<input type="text" placeholder="Email Address" id="email_hiredetail" class="detail_hire hire_deve_detail" size="40" value="<?php echo $email_hiredetail; ?>" name="email_hiredetail">
		<input type="text" placeholder="Phone Number" id="phone_hiredetail" class="detail_hire hire_deve_detail" size="40" value="<?php echo $phone_hiredetail; ?>" name="phone_hiredetail">
		<select name="model_hire" class="drop_model_hire" id="model_hire">												
			<option value="Select Category">Select Category Model</option>
			<option value="Full Time Hiring Model" <?php if($model_hire==
			'Full Time Hiring Model'){ echo 'selected="selected"';} ?>>Full Time Hiring Model</option>
			<option value="Part Time Hiring Model" <?php if($model_hire==
			'Part Time Hiring Model') { echo 'selected="selected"';} ?>>Part Time Hiring Model</option>
			<option value="Bucket System Model" <?php if($model_hire==
			'Bucket System Model') { echo 'selected="selected"';} ?>>Bucket System Model</option>
		</select>
		</div>
		<div style="clear:both"></div>
		<h3 class="second_heading"><span>Project Details</span></h3>
		<textarea id="project_hiredetail" class="detail_hire_textarea" rows="10" cols="10" name="project_hiredetail"><?php echo $project_hiredetail; ?></textarea>
		<div class="one_half">
		<div class="g-recaptcha" data-sitekey="6LeCkigTAAAAAHSIk-CeViaFFgPSnFyxX5BXOPFz"></div>
        <span class="nocptcha"><?php if(isset($_SESSION['wrongcaptchaget'])){ echo $_SESSION['wrongcaptchaget']; } ?></span> 
		</div>
		<div class="hire-submit">
		<input type="submit" name="hireclient" id="hireclient" class="hiredevedetail-submit" value="Submit Enquiry">
		</div>
	</div>
	</form>
</div>
<?php wp_link_pages(__('<p><strong>Pages:</strong> ','invert'), '</p>', __('number','invert')); ?>
</div>
<!-- skepost -->
</div>
<!-- post -->

<?php endwhile; else : ?>
<div class="post">
<h2><?php _e('Not Found','invert'); ?></h2>
</div>
<?php endif; ?>
</div>
<!-- content --> 
</div>
</div>
</div>
</div> 
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php get_footer('mobile'); ?>