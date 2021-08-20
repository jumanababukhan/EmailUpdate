<?php
add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );

	function tt_child_enqueue_parent_styles() {
	   wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );
	}
	
function pwwp_enqueue_my_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
      $ajaxSend = array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'ajaxSaveOption' => wp_create_nonce('saveppsubmissionOption'. $userId ),
            );
        wp_register_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), true);
        wp_localize_script( 'custom-js', 'the_ajax_script', $ajaxSend );
        wp_enqueue_script('custom-js');
    
   
      wp_enqueue_script( 'bootstrappoper-js', get_stylesheet_directory_uri() . '/assets/js/popper.js', array('jquery'), true);
    // wp_enqueue_script( 'custom-js',  get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_scripts');

function pwwp_enqueue_my_styles() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
     wp_enqueue_style( 'fontawsome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    // this will add the stylesheet from it's default theme location if your theme doesn't already
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'pwwp_enqueue_my_styles');

add_action('wp_ajax_user_email_change','user_email_change');
add_action('wp_ajax_nopriv_user_email_change', 'user_email_change');
function user_email_change() {
    
    // Do some minor form validation to make sure there is content
    if (isset ($_POST['oldEmail'])) {
      $oldEmail =  sanitize_text_field($_POST['oldEmail']);
    } 
    
    
    if (isset ($_POST['email_id'])) {
      $email_id =  sanitize_text_field($_POST['email_id']);
    }

   $current_user = wp_get_current_user();
 
   if($oldEmail == $current_user->user_email){
        $args = array(
            'ID'         => $current_user->id,
            'user_email' => $email_id
        );
       $msg = wp_update_user( $args );
       
       // echo 'Email Updated';
        die('Email Updated');
   }
   else {
      // return 'Old Email Entered is incorrect';
      // echo 'Old Email Entered is incorrect';
       die('Old Email Entered is incorrect');
       
   
   }
    
}

	  	
