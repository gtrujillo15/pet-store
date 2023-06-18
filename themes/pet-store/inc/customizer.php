<?php
/**
 * Pet Store Theme Customizer
 *
 * @package Pet_Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pet_store_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'pet_store_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'pet_store_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'pet_store_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pet_store_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pet_store_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pet_store_customize_preview_js() {
	wp_enqueue_script( 'pet-store-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'pet_store_customize_preview_js' );

// FUSD FOUNDATIONS CUSTOMIZE
function fusd_customize_register( $wp_customize ) {
	// FOOTER
	$wp_customize->add_section('pet_store_footer', array(
        'title' => 'Footer Information',
        'priority' => 150,
	));
	// Street Address
	$wp_customize->add_setting( 'footer_street_address_textfield', array(
		'sanitize_callback' => 'sanitize_textarea_field',
	));
	$wp_customize->add_control( 'footer_street_address_textfield', array(
		'type' => 'textfield',
		'section' => 'pet_store_footer',
		'label' => __( 'Street Address Text Field' ),
	));
	// City, State Address
	$wp_customize->add_setting( 'footer_city_state_address_textfield', array(
		'sanitize_callback' => 'sanitize_textarea_field',
	));
	$wp_customize->add_control( 'footer_city_state_address_textfield', array(
		'type' => 'textfield',
		'section' => 'pet_store_footer',
		'label' => __( 'City, State Address' ),
	));
	// Email Text Field
	$wp_customize->add_setting( 'footer_email_textfield', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_email',
	));
	$wp_customize->add_control( 'footer_email_textfield', array(
		'type' => 'email',
		'section' => 'pet_store_footer',
		'label' => __( 'Email Text Field' ),
		'description' => __( 'Enter the email to appear in the footer.' ),
	));
	// Phone Number Text Field
	$wp_customize->add_setting( 'footer_phone_textfield', array(
		'sanitize_callback' => 'sanitize_textarea_field',
	));
	$wp_customize->add_control( 'footer_phone_textfield', array(
		'type' => 'textfield',
		'section' => 'pet_store_footer',
		'label' => __( 'Phone Number Text Field' ),
		'description' => __( 'Enter the phone number to appear in the footer.' ),
	));


	// SOCIAL MEDIA
	$wp_customize->add_section('pet_store_social_media', array(
        'title' => 'Social Media Links',
        'priority' => 160,
	));
	// Twitter Link
	$wp_customize->add_setting( 'footer_twitter_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_twitter_url', array(
		'type' => 'url',
		'section' => 'pet_store_social_media',
		'label' => __( 'Twitter Link' ),
		'description' => __( 'Enter in the URL for Twitter.' ),
	));
	// Facebook Link
	$wp_customize->add_setting( 'footer_facebook_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_facebook_url', array(
		'type' => 'url',
		'section' => 'pet_store_social_media',
		'label' => __( 'Facebook Link' ),
		'description' => __( 'Enter in the URL for Facebook.' ),
	));
	// LinkedIn Link
	$wp_customize->add_setting( 'footer_linkedin_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_linkedin_url', array(
		'type' => 'url',
		'section' => 'pet_store_social_media',
		'label' => __( 'LinkedIn Link' ),
		'description' => __( 'Enter in the URL for LinkedIn.' ),
	));
	// Instagram Link
	$wp_customize->add_setting( 'footer_instagram_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'footer_instagram_url', array(
		'type' => 'url',
		'section' => 'pet_store_social_media',
		'label' => __( 'Instagram Link' ),
		'description' => __( 'Enter in the URL for Instagram.' ),
	));

}
add_action( 'customize_register', 'fusd_customize_register' );