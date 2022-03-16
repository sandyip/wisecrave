<?php 
function royal_customize_register($wp_customize){

	//header section

	$wp_customize-> add_section('royal_header_section', [
		'title' => __('Header Section', 'royal'),
		'priority' => 30,
	]);

	

	$wp_customize -> add_setting('royal_facebook_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_facebook_handle_input', array(
		'label' => __('Facebook Link', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_facebook_handle',
		'description' => __('please enter your facebook link'),
		
	)));

	$wp_customize -> add_setting('royal_insta_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_insta_handle_input', array(
		'label' => __('Instagram Link', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_insta_handle',
		'description' => __('please enter your twitter link')
	)));

	$wp_customize -> add_setting('royal_youtube_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_youtube_handle_input', array(
		'label' => __('Youtube Link', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_youtube_handle',
		'description' => __('please enter your youtube plus link')
	)));
	
	
	
	
		$wp_customize -> add_setting('royal_linkedin_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_linkedin_handle_input', array(
		'label' => __('Linkedin Link', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_linkedin_handle',
		'description' => __('please enter your linkedin link')
	)));



	$wp_customize -> add_setting('royal_twitter_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_twitter_handle_input', array(
		'label' => __('Twitter Link', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_twitter_handle',
		'description' => __('please enter your twitter link')
	)));



	$wp_customize -> add_setting('royal_phone_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_phone_handle_input', array(
		'label' => __('Phone Number', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_phone_handle',
		'description' => __('please enter your phone number')
	)));

	$wp_customize -> add_setting('royal_email_handle',[
		'default' => ''
	]);

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_email_handle_input', array(
		'label' => __('Email Address', 'royal'),
		'section' => 'royal_header_section',
		'settings' => 'royal_email_handle',
		'description' => __('please enter your email address')
	)));

	

	 $wp_customize -> add_panel('royal',[
		'title'=>__('Footer Section', 'royal'),
		'priority' => 40
	 ]);
	$wp_customize-> add_section('royal_front_section', [
		'title' => __('Contact Details', 'royal'),
		'priority' => 40,
		'panel' =>  'royal'
	]);
	//Address
	$wp_customize -> add_setting('royal_address_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_address_handle_input', array(
		'label' => __('Address', 'royal'),
		'section' => 'royal_front_section',
		'settings' => 'royal_address_handle',
		'type' => 'text'
	)));
	//Phone
	$wp_customize -> add_setting('royal_phone_content_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_phone_content_handle_input', array(
		'label' => __('Phone Number', 'royal'),
		'section' => 'royal_front_section',
		'settings' => 'royal_phone_content_handle',
		'type' => 'text'
	)));

	//Email
	$wp_customize -> add_setting('royal_email_content_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_email_content_handle_input', array(
		'label' => __('Email', 'royal'),
		'section' => 'royal_front_section',
		'settings' => 'royal_email_content_handle',
		'type' => 'email'
	)));

	// Images

	$wp_customize-> add_section('royal_images_section', [
		'title' => __('Footer Logo', 'royal'),
		'priority' => 50,
		'panel' =>  'royal'
	]);

	//image
	$wp_customize -> add_setting('royal_img_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'royal_img_handle_input', array(
		'label' => __('Logo Image', 'royal'),
		'section' => 'royal_images_section',
		'settings' => 'royal_img_handle',
		
	)));

	$wp_customize -> add_setting('royal_img1_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'royal_img1_handle_input', array(
		'label' => __('Developed by Image', 'royal'),
		'section' => 'royal_images_section',
		'settings' => 'royal_img1_handle',
		
	)));

	//copyright  section
	$wp_customize -> add_setting('royal_copyright_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_copyright_handle_input', array(
		'label' => __('Copyright', 'royal'),
		'section' => 'royal_front_section',
		'settings' => 'royal_copyright_handle',
		'type' => 'textarea'
	)));

	//Modal Setting
	$wp_customize-> add_section('royal_modal_section', [
		'title' => __('Modal ', 'royal'),
		'priority' => 20,
	]);

	$wp_customize -> add_setting('royal_modal_img_handle',[
		'transport' => 'refresh',
		'height' => 320
	]);
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'royal_modal_img_handle_input', array(
		'label' => __('Logo Image', 'royal'),
		'section' => 'royal_modal_section',
		'settings' => 'royal_modal_img_handle',
		
	)));

	$wp_customize -> add_setting('royal_modal_title_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_modal_title_handle_input', array(
		'label' => __('Modal Title', 'royal'),
		'section' => 'royal_modal_section',
		'settings' => 'royal_modal_title_handle',
		'type'     => 'textarea',
		
	)));

	$wp_customize -> add_setting('royal_modal_regards_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_modal_regards_handle_input', array(
		'label' => __('Modal Regards', 'royal'),
		'section' => 'royal_modal_section',
		'settings' => 'royal_modal_regards_handle',
		'type'     => 'textarea',
		
	)));

	$wp_customize -> add_setting('royal_modal_phone_number_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_modal_phone_number_handle_input', array(
		'label' => __('Modal Contact', 'royal'),
		'section' => 'royal_modal_section',
		'settings' => 'royal_modal_phone_number_handle',
		
		
	)));

	$wp_customize -> add_setting('royal_modal_email_add_handle',[
		'default' => ''
	]);
	$wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'royal_modal_email_add_handle_input', array(
		'label' => __('Modal Email', 'royal'),
		'section' => 'royal_modal_section',
		'settings' => 'royal_modal_email_add_handle',
		'type'     => 'email',
		
	)));
	

}
add_action('customize_register', 'royal_customize_register');

?>