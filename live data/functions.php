<?php 

/*####Your wordpress project new page contact form#######################*/

defined( 'ABSPATH' ) or die( 'No script available please!' );  
if(!isset($_SESSION)) { session_start(); }
function fptheme_widgets_init() {
    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'before_widget' => '<li id="%1$s" class="ske-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="ske-title">',
        'after_title' => '</h3>',
    ));
    
}
add_action( 'widgets_init', 'fptheme_widgets_init' );

function fptheme_theme_setup() {
    add_editor_style(); 

    add_post_type_support( 'project', 'excerpt' ); 
    add_post_type_support( 'project', 'page-attributes' );


    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'automatic-feed-links' ); 
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('custom-background'); 

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array('video', 'gallery', 'quote', 'audio' ) );

    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu', 'content-sharing' ),
        'footer' => __( 'Footer Menu', 'content-sharing' ),    
        'footer_1' => __( 'Footer Menu 2', 'content-sharing' ),    
    )
  ); 
}
add_action( 'after_setup_theme', 'fptheme_theme_setup' ); 
function fptheme_add_body_class( $classes ) {
    if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
        $classes[] = 'front-page';
    }
    
    return $classes;
}
add_filter( 'body_class','fptheme_add_body_class' ); 

add_filter('the_title', 'fptheme_untitled');
function fptheme_untitled($title) {
    if ($title == '') {
        return __('Untitled','fptheme');
    } else {
        return $title;
    }
}

$fptheme_shortname = 'futureprofilez';  
$fptheme_themename='FP';

require_once get_template_directory() . '/includes/enqueue-scripts.php';

require_once get_template_directory() . '/includes/custom-metabox.php';
require_once get_template_directory() . '/includes/shortcodes/shortcodes.php';
require_once get_template_directory() . '/includes/custom-function.php';
require_once get_template_directory() . '/includes/questioner-function.php';
require_once get_template_directory() . '/includes/custom-post-types.php';
require_once get_template_directory() . '/includes/send-emails.php';
require_once get_template_directory() . '/includes/custom-widgets.php';
require_once(get_template_directory().'/theme-options/theme-options.php');

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

function custom_excerpt_futureprofile( $length ) {
    return 35;
}

add_filter( 'excerpt_length', 'custom_excerpt_futureprofile', 999 );

//add_filter( 'script_loader_tag', 'fp_script_loader_tag', 9, 3);
function fp_script_loader_tag($html, $handle, $src){
    if(!is_admin()){ 
        if($handle != 'jquery-core'){
            return $tag = str_replace("<script ", '<script defer="defer" ', $html);
        }else{
            return $html;
        } 
    }else{
        return $html;
    }    
} 

add_action( 'wp', 'fp_force_404' );
function fp_force_404() {
    global $wp_query; 
    if(is_attachment()){
        status_header( 404 );
        nocache_headers();
        include( get_query_template( '404' ) );
        die();
    }
} 

/*  custom logo */
add_action('login_head', 'fp_custom_login_logo'); 
add_filter('login_headerurl','fp_custom_login_logo_url');
function fp_custom_login_logo() { 
    echo '<style>body.login h1 a { background-image:url('.get_template_directory_uri().'/assets/images/logo31.png) !important;width: 100%;background-size: contain;} </style>';
}
function fp_custom_login_logo_url($url) {
    return $url= site_url();
}  

//add_action( 'wpcf7_mail_sent','fp_message_wpcf7_mail_sent_function'); 
function fp_message_wpcf7_mail_sent_function($contact_form){
    $posted_data = $contact_form->posted_data;  
    $_SESSION['wpcf7_mail_sent_data']=$_REQUEST;
} 

function getCurlData($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    $curlData = curl_exec($curl);
    curl_close($curl);
    return $curlData;
}  


add_filter('style_loader_tag', 'fptheme_remove_css_attr', 99, 2);
add_filter('script_loader_tag', 'fptheme_remove_script_attr', 99, 2); 
function fptheme_remove_script_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript)['\"]/", '', $tag );
}  
function fptheme_remove_css_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(css)['\"]/", '', $tag );
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// function to count views.
function setPostViews($postID) {
    if(!isset($_SESSION['id'])){
        $_SESSION['id'] = array();
    }
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if(! in_array($postID,$_SESSION['id'])){
        $count++;
        update_post_meta($postID, $count_key, $count);
        $_SESSION['id'] = array($postID);
    }
}

//SHORTCODE FOR WHATSAPP BUTTON IN CF7
function cf7_custom_shorcode() {
    $check = wp_is_mobile()?'api':'web';
    return '<a href="https://'.$check.'.whatsapp.com/send?phone=919983333334&text=Hello FP Team,I would like to discuss my project with you" target="_blank"><span><img src="'.get_stylesheet_directory_uri().'/assets/images/pop-whtsapp.png" alt="logo" width="26" height="27" /></span><strong>+91-9983333334</strong></a>';
}
add_shortcode('fp_custom_whatsapp','cf7_custom_shorcode');

// EXECUTING OUR CUSTOM SHORTCODE IN CF7
add_filter( 'wpcf7_form_elements', 'fptheme_wpcf7_form_elements' );

function fptheme_wpcf7_form_elements( $form ) {
    $form = do_shortcode( $form );
    return $form;
}

// Replacing templates
add_filter( 'template_include', 'fptheme_page_template_replace', 99 );
function fptheme_page_template_replace( $template ){
    global $post;
    if( wp_is_mobile() ) {
        if( is_front_page() ){
            $template = locate_template( array( 'front-page-mobile.php' ) ); 
        }elseif( is_tax('industry') ){
            $template = get_template_directory().'/mobile/taxonomy-industry-mobile.php';
        }elseif( is_tax('project_category') ){
            $template = get_template_directory().'/mobile/taxonomy-project_category-mobile.php';
        }elseif( is_singular('project') ){
            $template = get_template_directory().'/mobile/single-project-mobile.php';           
        }elseif( is_singular('post') ){ 
            $template = get_template_directory().'/mobile/single-post-mobile.php';
        }elseif( is_singular('hire') ){ 
            $template = get_template_directory().'/single-hire.php';
        }elseif( is_404() ){ 
            $template = get_template_directory().'/404.php';
        }
        elseif( is_page('start-your-wordpress-project') ){ 
            $template = get_template_directory().'/template/template-start-your-wordpress-project.php';
        }
        elseif( is_page('make-payment-here') ){ 
            $template = get_template_directory().'/mobile/templates-mobile-general.php';
        }
        elseif( is_page('start-your-seo-project') ){ 
            $template = get_template_directory().'/template/template-start-your-seo-project.php';
        }

        elseif( is_page('start-your-php-project') ){ 
            $template = get_template_directory().'/template/template-start-your-php-project.php';
        }

        elseif( is_page('christmas-new-year') ){ 
            $template = get_template_directory().'/promotion/Christmas-and-New-Year.php';
        }

        else{
           $mobile_temp = get_field('mobile_template', $post->ID);
           $template = get_template_directory().'/mobile/'.$mobile_temp;
       }

   }else{
    if( is_singular('project') ){
        $post_idd = get_the_id();
        $term_ids = array();
        $terms = get_the_terms( $post_idd, 'project_category' );
        foreach( $terms as $termm ){
            $term_ids[] = $termm->term_id;
        }
        if( !empty($term_ids) && in_array(132, $term_ids) ){
            $template = get_template_directory().'/single-project-redesigns.php';
        }
    }
    if(is_page('ecommerce-2')){

        wp_redirect('ecommerce');


    }
    if(is_page('industries')){

        wp_redirect('all-industries');


    }
}

return $template;
}

/* Restrict Spam Emails */

add_filter('wp_mail','fp_restriction_spam_mail_filter',9999);
function fp_restriction_spam_mail_filter( $args ) {  
    $to_email = strtolower($args['to']); 
    $message_cehck =  strtolower($args['message']); 

    $find_spam_words = array('test','demo','temp'); 
    foreach($find_spam_words as $keyword){ 
        $find_location = strripos($to_email,$keyword);
        if($find_location!==false){
            $to_email ='';
        }
    }

    $finds_span = array('sex','sexy','fuck','porn','301 moved permanently','ows.my','gtp motorsports','918indo.com','918kiss','[url','[url=','[/url]'); 
    foreach($finds_span as $keyword){ 
        $find_location = strripos($message_cehck,$keyword); 
        if($find_location!==false){
            $to_email ='';
        }
    }  

    if($to_email==''){$args['to']='';} 
    return $args;
} 

function comment_validation_init() {
    if(is_single() && comments_open() ) { ?>  
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>      
        <script>
            jQuery(document).ready(function() {
                jQuery('#commentform').validate({

                    rules: {
                        author: {
                            required: true,
                            minlength: 2
                        },

                        email: {
                            required: true,
                            email: true
                        },

                        comment: {
                            required: true,
                            minlength: 2
                        }
                    },

                    messages: {
                        author: "Please fills the required field",
                        email: "Please enter a valid email address.",
                        comment: "Please fill the required field"
                    },

                    errorElement: "div",
                    errorPlacement: function(error, element) {
                        element.after(error);
                    }

                });
            });
        </script>
        <?php
    }
}
if( wp_is_mobile() ){
    add_action('wp_footer', 'comment_validation_init');
}

function wp_67472455() {
    if( !is_admin() ){
        wp_dequeue_style( 'wp-block-library' );
    }   
}
add_action( 'wp_print_styles', 'wp_67472455', 100 );

// Avatar
add_filter( 'pre_get_avatar_data', 'fp_set_avatar_based_on_user_meta', 10, 2 );
function fp_set_avatar_based_on_user_meta( $args, $id_or_email ){
    $user_avatar_meta_key = 'profile_avtar';  
    if( is_object( $id_or_email ) && isset( $id_or_email->comment_ID ) ){
        $id_or_email = get_comment( $id_or_email );
    }if( $id_or_email instanceof WP_Post ){
        $user_id = $id_or_email->post_author;
    }if( $id_or_email instanceof WP_Comment ){
        if( ! empty( $id_or_email->user_id ) ){
            $user_id = $id_or_email->user_id;
        } elseif( ! empty( $id_or_email->comment_author_email ) ){
            $id_or_email = $id_or_email->comment_author_email;
        }
    }if( is_numeric( $id_or_email ) ){
        $user_id = $id_or_email;
    }elseif( is_string( $id_or_email ) && strpos( $id_or_email, '@' ) ){
        $id_or_email = get_user_by( 'email', $id_or_email );
    }if( $id_or_email instanceof WP_User ){
        $user_id = $id_or_email->ID;
    }if( ! empty( $user_id ) && is_numeric( $user_id ) ){
        $meta_val = get_field($user_avatar_meta_key,'user_' . $user_id);
        if( ! empty( $meta_val ) ){
            if( is_array( $meta_val ) && ! empty( $meta_val[0] ) ){
                $meta_val = $meta_val[0];
            }
            if( filter_var( $meta_val, FILTER_VALIDATE_URL ) ){
                $args['url'] = $meta_val;
            }
        }
    }

    return $args;
}  


//Disable gutenberg editor

add_filter('use_block_editor_for_post', '__return_false');

//add custom captcha in popup
function fp_captcha_string( $length = 6, $special_chars = true, $extra_special_chars = false ) {

 $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   //if ($special_chars) $chars .= '!@#$%^&*()';
 if ($extra_special_chars)  $chars .= '-_ []{}<>~`+=,.;:/?|';

 $string = '';

 for ($i = 0; $i < $length; $i++) {

     /* WordPress uses wp_rand() rather than mt_rand() */
     $string .= substr($chars, wp_rand(0, strlen($chars) - 1), 1);

 }

 return $string;
}


function replace_content($text)
{
    $alt = get_the_author_meta( 'display_name' );
    $text = str_replace('alt=\'\'', 'alt=\'Avatar for '.$alt.'\' title=\'Gravatar for '.$alt.'\'',$text);
    return $text;
}
add_filter('get_avatar','replace_content');




add_action( 'wp_ajax_set_form', 'set_form' );    
add_action( 'wp_ajax_nopriv_set_form', 'set_form'); 

function set_form(){
    $wstheme_options = get_wstheme_options();
    $form_response = array('status'=>'','field_name'=>'','error_code'=>'');
    $admin = $wstheme_options['form_admin_email'];//get_option('admin_email');
    
    $ywp_name = $_POST['Ywp_Name'];
    $ywp_email = $_POST['Ywp_Email'];
    $ywp_phone = $_POST['Ywp_Phone'];
    $ywp_company = $_POST['Ywp_Company'];
    $ywp_notes = $_POST['Ywp_Notes'];
    $cptcha_rand_pop = $_POST['cptcha_rand_pop'];
    $catch_val_pop = $_POST['catch_val_pop'];

    if($ywp_name == '' && $ywp_email == '' && $ywp_phone == ''){
        $form_response['status'] = 'error';
        $form_response['field_name'] = 'All';

    }elseif($ywp_name == ''){

        $form_response['status'] = 'error';
        $form_response['field_name']= 'Name';

    }elseif($ywp_email == ''){

        $form_response['status'] = 'error';
        $form_response['field_name']= 'Email';

    }elseif($ywp_phone == ''){

        $form_response['status'] = 'error';
        $form_response['field_name'] = 'Phone';

    }elseif(!filter_var($ywp_email, FILTER_VALIDATE_EMAIL)){

        $form_response['status'] = 'error';
        $form_response['error_code'] = 'Invalid Email';
        $form_response['field_name']= 'Email';

    }elseif(!preg_match('/^[0-9]/', $ywp_phone)){

        $form_response['status'] = 'error';
        $form_response['error_code'] = 'Invalid Phone Number';
        $form_response['field_name']= 'Phone';

    }elseif($cptcha_rand_pop !== $catch_val_pop){

        $form_response['status'] = 'error';
        $form_response['error_code'] = 'Captcha error';
        $form_response['field_name']= 'Captcha';

    }else{

        $form_response['status'] = 'success';
        
        $message ='<body style="background:#727272;">
        <div style="width:100%;">
        <table width="100%" cellspacing="10" cellpadding="0" style="background:#ebf0f6; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;">
        <tr>
        <td style="padding:0 0 10px 0; width:600px;"><img src="'.esc_url( home_url() ).'/wp-content/uploads/2014/06/logo31.png" alt="Future Profilez logo"></td>
        </tr>
        <tr>
        <td><div>
        <table align="center" border="0" cellpadding="10" style="background:#FFF; border-radius: 20px; font-size: 12px;">
        <tr>
        <td style="color:#00abff; font-family:Verdana, Geneva, sans-serif; padding-top:30px;"><strong>Hello WP Landing Page Team, </strong></td>
        </tr>
        <tr>
        <td style="padding-top:0px; font-family:Verdana, Geneva, sans-serif; line-height: 18px;">'.$ywp_name.', has filled in "Start Your Project" form on your website. Kindly review the details provided below and respond accordingly.
        </td>
        </tr>
        <tr><td><table border="0" cellpadding="7" style="background:#FFF; border-radius: 20px; font-size: 12px;">
        <tr><td>Full Name:</td><td>'.$ywp_name.'</td></tr><tr><td> E-Mail:</td><td>'.$ywp_email.'</td>
        </tr><tr><td> Phone:</td><td>'.$ywp_phone.'</td></tr><tr><td> Company:</td><td>'.$ywp_company.'</td>
        </tr><tr><td> Notes:</td><td>'.$ywp_notes.'</td></tr></table></td></tr><tr><td style="color:#00abff; font-family:Verdana, Geneva, sans-serif;"><strong>Thanks & Regards<br>'.$ywp_name.'</strong></td></tr>
        <tr><td><span></span></td></tr></table></div></td></tr></table></div></body>';
        
        $to_admin =$admin;
        $subject = 'Start Your Project!';
        $header = "From:info@futureprofilez.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        //$headers = array('Content-Type: text/html; charset=UTF-8');
        //wp_mail($to_admin, $subject, $message, $headers );
        mail ($to_admin,$subject,$message,$header);

        $message_user = '<body style="background:#727272;">
        <div style="width:100%;">
        <table width="100%" cellspacing="10"  cellpadding="0" style="background:#ebf0f6; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;">
        <tr>
        <td style="padding:0 0 10px 0; width:600px;"><a href="#"><img src="'.esc_url( home_url() ).'/wp-content/uploads/2014/06/logo31.png" alt="Future Profilez logo" /></a></td>
        </tr>
        <tr>
        <td><div>
        <table align="center" border="0" cellpadding="10" style="background:#FFF; border-radius: 20px;">

        <tr>
        <td style="color:#00abff; font-family:Verdana, Geneva, sans-serif; padding-top:30px;"><strong>Hello '.$ywp_name.',</strong></td>
        </tr>
        <tr>
        <td style="padding-top:0px; font-family:Verdana, Geneva, sans-serif;">Thanks for contacting us and showing interest in Hiring our developer. We have received your request successfully and our Marketing Manager will contact you shortly!</td>
        </tr>
        <tr>
        <td style="padding-top:0px; font-family:Verdana, Geneva, sans-serif;">Hopefully we will work together and will establish a healthy business synergy. If you need a faster response then you can also contact us onto below details.
        <br><br>
        Email: info@futureprofilez.com<br>
        Chat ID :- vishal.soolanki for (Skype, Hangout)<br>
        Personal Number :- 91-9983333334 (You can also use this number for whatsapp) 
        </td>
        </tr>
        <tr>
        <td style="line-height:33px; font-family:Verdana, Geneva, sans-serif;"><center><strong>Meantime you can visit our website onto below given link.</strong></center></td>
        </tr>
        <tr>
        <td style="font-size:16px; font-family:Verdana, Geneva, sans-serif;"><center><a style="padding:14px 30px 15px; border: 1px solid transparent; text-decoration:none;background: #00abff; border-radius: 4px; color: #fff;"  href="http://futureprofilez.com/">Visit Future Profilez</a></center></td>
        </tr>
        <tr>
        <td style="font-family:Verdana, Geneva, sans-serif;color:#00abff;"><strong>Best Regards !</strong> <br>
        <span style="color:#00abff; font-family:Verdana, Geneva, sans-serif;"><strong>WP Landing Page Team</strong></span>
        </td>
        </tr>
        <tr>
        <td><span></span></td>
        </tr>
        <tr>
        <td><span></span></td>
        </tr>
        </table>
        </div></td>
        </tr>
        </table>
        </div>
        </body>';   

        $subject_user = 'Start Your Project!';
        //$headers_user = array('Content-Type: text/html; charset=UTF-8');
        $headers_user = "From:info@futureprofilez.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
        $headers_user .= "MIME-Version: 1.0\r\n";
        $headers_user .= "Content-type: text/html\r\n";
        //$headers = array('Content-Type: text/html; charset=UTF-8');
        //wp_mail($to_admin, $subject, $message, $headers );
        mail ($ywp_email,$subject_user,$message_user,$headers_user);
        //wp_mail($ywp_email, $subject_user, $message_user, $headers_user );

    }

    echo json_encode($form_response);
    die();

}


// New fp site code#####################################################################################################

// Add class to nav 
add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1 );

// Add class to li main menu
add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}



// Get headings section
function get_headings($get_page_id){
    $page_sub_heading = get_field('page_sub_heading',$get_page_id);
    $page_main_heading = get_field('page_main_heading',$get_page_id);

    if(!empty($page_sub_heading) || !empty($page_main_heading)):
        ?>
    <!-- contact section -->
    <div class="page-head inner-page">
        <div class="container">
            <p><?php echo $page_sub_heading;?></p>
            <h1><?php echo $page_main_heading;?></h1>
        </div>
    </div>
    <!-- breadcrumb -->
    <?php
endif;
}

// Get page breadcrumb
function get_breadcrumb(){
    ?>
    <section class="breadcrumb-outer">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <?php echo get_the_title();?></li>
                </ol>
            </nav>
        </div>
    </section>
    <?
}

//allow svg image upload
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function get_current_classs($slug,$tax='',$submenu=false){

    if( !empty($slug) ){
        $return_class = ( is_page($slug) || is_single($slug) ) ?'active':'';
    }
    if( !empty($slug) && !empty($tax) ){
        $return_class = is_tax($tax,$slug)?'active':'';
    }
    if( $submenu && !empty($slug) ){
        $return_class = ( is_page($slug) && !isset($_REQUEST['submenu']) )?'active':'';
    }

    echo $return_class;
}

