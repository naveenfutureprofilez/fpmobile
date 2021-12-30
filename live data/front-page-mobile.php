<?php 
/* Template Name: mobile home*/

get_header('mobile');


?>

<!-- container -->
 <div class="container-m">
  	<!-- <div class="service-m">  	 	
  	 	 <p>Development solutions suiting  your Business needs</p>
  	</div> -->
  	<div class="clr"></div>
  	<div class="tab-coustom">  	

<div class="row">
    <div class="col-md-12">
         <!-- Nav tabs -->  
        <ul class="nav nav-tabs" id="myDIV" role="tablist">
        	<!-- <div class="selector"></div> -->
	        <li role="presentation" class="at active"><a href="#Services" aria-controls="Services" role="tab" data-toggle="tab">Services</a></li>
	        <li class="at"><a href="https://futureprofilez.com/technologies-2/" aria-controls="Technologies" >Technologies</a></li>
	        <li class="at"><a href="https://futureprofilez.com/industries/" aria-controls="Industries" >Industries</a></li>         
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="Services">
               <div class="bannerservice">
                    
               <a href="https://futureprofilez.com/design-development-mobile/">
                    <img src="<?php echo get_template_directory_uri();?>/mobile/images/web-design.png" alt="img">
               </a>
              </div>
          	<div class="bannerservice">
          		
		    	<a href="https://futureprofilez.com/web-development/">
		    		<img src="<?php echo get_template_directory_uri();?>/mobile/images/web-development.webp" alt="img">
		    	</a>
		    </div>
              <div class="bannerservice">
               <a href="https://futureprofilez.com/ecommerce/">
                    <img src="<?php echo get_template_directory_uri();?>/mobile/images/E-business-development.webp" alt="img">
               </a>
              </div>
		    <div class="bannerservice">
		    	<a href="https://futureprofilez.com/mobile-solutions/">
		    		<img src="<?php echo get_template_directory_uri();?>/mobile/images/mobile-application.png" alt="img">
		    	</a>
		    </div>
        <div class="bannerservice">
               <a href="https://futureprofilez.com/digital-marketing-mobile/">
                  <img src="<?php echo get_template_directory_uri();?>/mobile/images/digital-marketing-front.png" alt="img">
               </a>
              </div>
		    
		    
          </div>
    
        </div>     
    </div>
 </div>	 		
  	</div>
 </div>
<?php get_footer('mobile');?>

