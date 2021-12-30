<?php defined( 'ABSPATH' ) or die( 'No script available please!' ); ?>
<?php 
/**
* The template name: Career Form Mobile

*/

  get_header('mobile'); ?>
<script>jQuery(document).ready(function(){jQuery('#job_apply').click(function(){var queryArr=[];var queryStr;if(jQuery.trim(jQuery('#appli_name').val())==''){jQuery('#appli_name').attr('style','border:solid 1px #FF0000 !important;');queryStr='Please enter your firstname.';queryArr.push(queryStr);}else{jQuery('#appli_name').css('border','1px solid #DDDDDD');}
if(jQuery.trim(jQuery('#appli_email').val())==''){jQuery('#appli_email').attr('style','border:solid 1px #FF0000 !important');queryStr='Please enter your email.';queryArr.push(queryStr);}else{var emailReg=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;if(!emailReg.test(jQuery('#appli_email').val())){jQuery('#appli_email').attr('style','border:solid 1px #FF0000 !important');queryStr='Please enter valid email id.';queryArr.push(queryStr);}else{jQuery('#appli_email').css('border','1px solid #DDDDDD');}}


if(jQuery.trim(jQuery('#appli_location').val())==''){jQuery('#appli_location').attr('style','border:solid 1px #FF0000 !important');queryStr='Please Enter Your location';queryArr.push(queryStr);}else{jQuery('#appli_location').css('border','1px solid #DDDDDD');}


var attach_id = "appli_upload"; 
if(jQuery('#'+attach_id).val()!=''){
var size = jQuery('#'+attach_id)[0].files[0].size;
var fileSize = size/1000; 
//alert(fileSize);
if(fileSize > 500){
	
	jQuery('#appli_upload').attr('style','border:solid 1px #FF0000 !important');
	queryStr='Please attach file below 500kb';
	queryArr.push(queryStr);
	alert('Please attach file below 500kb');
}
else{jQuery('#appli_upload').css('border','1px solid #DDDDDD');}
}
if(jQuery.trim(jQuery('#appli_phn').val())==''){
	jQuery('#appli_phn').attr('style','border:solid 1px #FF0000 !important');
	queryStr='Please enter your Phone Number.';queryArr.push(queryStr);
	}else{
		var phonenu= /[0-9 -()+]+$/;
		if(!phonenu.test(jQuery('#appli_phn').val())){			
			jQuery('#appli_phn').attr('style','border:solid 1px #FF0000 !important');
			queryStr='Please enter valid phone number.';
			queryArr.push(queryStr);
			}else{
			jQuery('#appli_phn').css('border','1px solid #DDDDDD');
			}
		}
if(jQuery.trim(jQuery('#appli_skill').val())==''){jQuery('#appli_skill').attr('style','border:solid 1px #FF0000 !important');queryStr='Please Enter skill';queryArr.push(queryStr);}else{jQuery('#appli_skill').css('border','1px solid #DDDDDD');}
if(jQuery.trim(jQuery('#appli_design').val())==''){jQuery('#appli_design').attr('style','border:solid 1px #FF0000 !important');queryStr='Please Enter Current Designation';queryArr.push(queryStr);}else{jQuery('#appli_design').css('border','1px solid #DDDDDD');}
if(jQuery.trim(jQuery('#appli_ctc').val())==''){jQuery('#appli_ctc').attr('style','border:solid 1px #FF0000 !important');queryStr='Please Enter Current CTC.';queryArr.push(queryStr);}else{jQuery('#appli_ctc').css('border','1px solid #DDDDDD');}

var listOfNumbers_career=queryArr.join('<br>');if(jQuery.trim(listOfNumbers_career)=='')
{
	return true;
	
	}
else
{return false;}});jQuery("#careerform").find('input').keypress(function(){jQuery(this).css("border","1px solid #c1c1c1");});jQuery("#careerform").find('select').change(function(){jQuery(this).css("border","1px solid #c1c1c1");});jQuery("#careerform").find('textarea').change(function(){jQuery(this).css("border","1px solid #c1c1c1");});});

</script>

<div class="main-wrapper-item">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php 
		$pagetitle = get_post_meta($post->ID, "_skt_pagetitle_metabox", true); 
		$pagetitle = ((isset($pagetitle) && $pagetitle !="") ? $pagetitle : '1' );
			if($pagetitle == 1) { ?>
<div class="bread-title-holder">
<?php $banner= get_post_meta(get_the_ID(), '_pagetitle_bg', true); ?>
<div><img class="after-load" src="#" data-src="<?php bloginfo('template_url');?>/assets/images/career_new.jpg" alt="career-banner"/></div>
<div class="container container-heading">
	<div class="row-fluid">
		<div class="container_inner clearfix">
			<h1 class="title"><?php // the_title(); ?></h1>
		</div>
	</div>
</div>
</div>
<?php } ?>
<div class="page-content default-pagetemp">
  <div class="container post-wrap">
    <div class="row-fluid">
      <div id="content" class="career-form-fp">
        <div class="post" id="post-<?php the_ID(); ?>" >
          <div class="post" id="post-1704">
            <div class="skepost"> 
              <!--start  --->
              <div class="contact-left">
                <div lang="en-US" dir="ltr">
                  <div class="screen-reader-response"></div>
                  <div class="first_heading"> Please Fill Out  Application Form Below</div>
                  
                  <?php
if(isset($_POST['job_apply'])){
	extract($_POST);
	}else{
		$appli_name='';$appli_phn='';$appli_email='';$appli_location='';$apply_post='';$appli_skill='';$appli_design='';$appli_ctc='';$appli_experience='';$appli_upload='';$appli_joining='';
 }
 $apply_post = ( isset($_REQUEST['value']) && !empty($_REQUEST['value']) ) ? base64_decode($_REQUEST['value']) : $apply_post;
?>
                  <form id="careerform" method="post" name="careerform" enctype="multipart/form-data" >
                    <div class="second_heading"> <span>Personal Details</span> </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" name="appli_name" class="contact applyinput" value="<?php echo $appli_name; ?>" size="40"  id="appli_name" placeholder="Name*" >
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" name="appli_phn" class="contact applyinput" value="<?php echo $appli_phn; ?>" size="40"  id="appli_phn" placeholder="Phone Number*">
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="email" name="appli_email" class="contact applyinput" value="<?php echo $appli_email; ?>" size="40"  id="appli_email" placeholder="Email*" >
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" name="appli_location" class="contact applyinput" value="<?php echo $appli_location; ?>" size="40"  id="appli_location" placeholder="Current location*">
                        </span> </div>
                    </div>
                    <div class="second_heading"> <span>Brief Synopsis of Your Resumes</span> </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" name="apply_post" class="contact applyinput" value="<?php echo $apply_post; ?>" size="40"  id="apply" placeholder="Apply for the post of*">
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" name="appli_skill" class="contact applyinput" value="<?php echo $appli_skill; ?>" cols="40" rows="10" id="appli_skill" placeholder="Key Skills*">
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="text" class="contact applyinput" name="appli_design" value="<?php echo $appli_design; ?>" size="40" id="appli_design" placeholder="Current Designation*">
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <input type="number" class="contact applyinput" name="appli_ctc" value="<?php echo $appli_ctc; ?>" size="40"  id="appli_ctc" placeholder="Current CTC*">
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <select name="appli_experience"  id="appli_experience" class="contact " >
                        <option value="No work experience" <?php if($appli_experience == 'No work experience') echo 'selected'; ?>>Total Work Experience</option>
                          <option value="No work experience" <?php if($appli_experience == 'No work experience') echo 'selected'; ?>>No Work Experience</option>
                          <option value="less than 1 year" <?php if($appli_experience == 'less than 1 year') echo 'selected'; ?>>Less Than 1 Year</option>
                          <option value="1-2 year" <?php if($appli_experience == '1-2 year') echo 'selected'; ?>>1-2 Year</option>
                          <option value="More than 2 year" <?php if($appli_experience == 'More than 2 year') echo 'selected'; ?>>More Than 2 Year</option>
                        </select>
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> <span>
                        <select name="appli_joining" id="appli_joining" class="contact " >
                          <option value="Select Joining Period" <?php if($appli_joining == 'Select Joining Period') echo 'selected'; ?>>Joining Period</option>
                          <option value="Less than a week" <?php if($appli_joining == 'Less than a week') echo 'selected'; ?>>Less than a week</option>
                          <option value="1-2 week" <?php if($appli_joining == '1-2 week') echo 'selected'; ?>>1-2 week</option>
                          <option value="2-4 week" <?php if($appli_joining == '2-4 week') echo 'selected'; ?>>2-4 week</option>
                          <option value="more than a month" <?php if($appli_joining == 'more than a month') echo 'selected'; ?>>more than a month</option>
                        </select>
                        </span> </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3"> 
                        <input type="file" value="<?php echo $_SESSION['attachments_name']; ?>" name="appli_upload" id="appli_upload" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                        <label for="appli_upload"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Browse..</strong>
                        	
                        	<span> <?php if(isset($_SESSION['attachments_name'])){ echo $_SESSION['attachments_name']; }else{ echo 'Attach Your Resume';} ?></span></label>
                        
                        </div>
                    </div>
                    <div class="div1 half-ir">
                      <div class="div3">
         			  <div class="g-recaptcha" data-sitekey="6LeCkigTAAAAAHSIk-CeViaFFgPSnFyxX5BXOPFz"></div>
                      <input type="submit" class="apllicant" value="Apply" name="job_apply" id="job_apply">
                      	<span class="nocptcha"><?php if(isset($_SESSION['wrongcaptchaget'])){ echo $_SESSION['wrongcaptchaget'];} ?></span>
                       </div>
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
              <!--- end --->
              <?php
			wp_link_pages(__('<p><strong>Pages:</strong> ','invert'), '</p>', __('number','invert')); ?>
            </div>
            <!-- skepost --> 
          </div>
          <?php endwhile; ?>
          <?php else :  ?>
          <div class="post">
            <h2>
              <?php _e('Page Does Not Exist','invert'); ?>
            </h2>
          </div>
          <?php endif; ?>
          <div class="clearfix"></div>
        </div>
        <!-- content --> 
        
        <!-- Sidebar -->
        
        <div class="clearfix"></div>
        <!-- Sidebar --> 
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php 
  get_footer('mobile');?>
