<?php
/**
 * vinyl Theme Customizer: Typography
 *
 * @package vinyl
 */

/**
 * Customizer
 */
function ht_theme_customizer_typo( $wp_customize ) {
	/*--------------------------------------------------------------
		# Load font list
	--------------------------------------------------------------*/	
	$fonts = ht_fonts();
	$weight = ht_weight();
	$size = ht_size();
	$text_align = ht_text_align();
	$text_transform = ht_text_transform();
	$letter_spacing = ht_letter_spacing();
	$font_style = ht_font_style();

	/*--------------------------------------------------------------
		# Typography Panel
	--------------------------------------------------------------*/
	$wp_customize->add_panel( 'ht_typography_panel', array(
	    'title' => 'Typography',
	    'description' => 'You can customize the Typography.',
	    'priority' => 30,
	) );

	/*--------------------------------------------------------------
		## Sections
	--------------------------------------------------------------*/
	// body
	$wp_customize->add_section( 'ht_body_font_section' , array(
		'title' => __( 'Body Font', 'vinyl' ),
		'priority' => 10,
		'panel' => 'ht_typography_panel',
	) );

	// headings
	$wp_customize->add_section( 'ht_headings_font_section' , array(
		'title' => __( 'Headings Font', 'vinyl' ),
		'priority' => 20,
		'panel' => 'ht_typography_panel',
	) );

	// site title
	$wp_customize->add_section( 'ht_site_title_font_section' , array(
		'title' => __( 'Site Title Font', 'vinyl' ),
		'priority' => 30,
		'panel' => 'ht_typography_panel',
	) );

	// tagline
	$wp_customize->add_section( 'ht_tagline_font_section' , array(
		'title' => __( 'Tagline Font', 'vinyl' ),
		'priority' => 40,
		'panel' => 'ht_typography_panel',
	) );

	// post/page title
	$wp_customize->add_section( 'ht_post_title_font_section' , array(
		'title' => __( 'Post/Page Title Font', 'vinyl' ),
		'priority' => 50,
		'panel' => 'ht_typography_panel',
	) );

	// meta
	$wp_customize->add_section( 'ht_meta_font_section' , array(
		'title' => __( 'Meta Font', 'vinyl' ),
		'priority' => 60,
		'panel' => 'ht_typography_panel',
	) );

	// menu
	$wp_customize->add_section( 'ht_menu_font_section' , array(
		'title' => __( 'Menu Font', 'vinyl' ),
		'priority' => 70,
		'panel' => 'ht_typography_panel',
	) );

	// widget title
	$wp_customize->add_section( 'ht_widget_title_font_section' , array(
		'title' => __( 'Widget Title Font', 'vinyl' ),
		'priority' => 80,
		'panel' => 'ht_typography_panel',
	) );

	/*--------------------------------------------------------------
		### Body Font
	--------------------------------------------------------------*/
    // font
    $wp_customize->add_setting('ht_body_font', array(
        'default' => 'Lato',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_body_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_body_font_section',
        'settings' => 'ht_body_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// font size
	$wp_customize->add_setting( 'ht_body_font_size', array(
        'default' => '14',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_body_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_body_font_section',
        'settings' => 'ht_body_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_body_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_body_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_body_font_section',
		'settings' => 'ht_body_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	/*--------------------------------------------------------------
		### Headings Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_headings_font', array(
        'default' => 'Playfair Display',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_headings_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// weight
	$wp_customize->add_setting('ht_headings_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_headings_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 20,
		'section' => 'ht_headings_font_section',
		'settings' => 'ht_headings_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_headings_font_style', array(
		'default' => 'normal',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_headings_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_headings_font_section',
		'settings' => 'ht_headings_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_headings_letter_spacing', array(
        'default' => '0',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_headings_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_headings_font_section',
		'settings' => 'ht_headings_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_headings_text_align', array(
		'default' => 'left',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_headings_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_headings_font_section',
		'settings' => 'ht_headings_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_headings_text_transform', array(
		'default' => 'none',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_headings_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_headings_font_section',
		'settings' => 'ht_headings_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	// font sizes
	// h1
	$wp_customize->add_setting( 'ht_headings_h1_font_size', array(
        'default' => '36',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h1_font_size', array(
        'type' => 'select',
        'label' => __('H1 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h1_font_size',
        'priority' => 70,
        'choices' => $size
      )
    );

   	// h2
	$wp_customize->add_setting( 'ht_headings_h2_font_size', array(
        'default' => '30',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h2_font_size', array(
        'type' => 'select',
        'label' => __('H2 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h2_font_size',
        'priority' => 80,
        'choices' => $size
      )
    );

    // h3
	$wp_customize->add_setting( 'ht_headings_h3_font_size', array(
        'default' => '24',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h3_font_size', array(
        'type' => 'select',
        'label' => __('H3 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h3_font_size',
        'priority' => 90,
        'choices' => $size
      )
    );

    // h4
	$wp_customize->add_setting( 'ht_headings_h4_font_size', array(
        'default' => '18',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h4_font_size', array(
        'type' => 'select',
        'label' => __('H4 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h4_font_size',
        'priority' => 100,
        'choices' => $size
      )
    );

    // h5
	$wp_customize->add_setting( 'ht_headings_h5_font_size', array(
        'default' => '14',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h5_font_size', array(
        'type' => 'select',
        'label' => __('H5 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h5_font_size',
        'priority' => 110,
        'choices' => $size
      )
    );

    // h6
	$wp_customize->add_setting( 'ht_headings_h6_font_size', array(
        'default' => '12',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_headings_h6_font_size', array(
        'type' => 'select',
        'label' => __('H6 Font Size', 'vinyl'),
        'section' => 'ht_headings_font_section',
        'settings' => 'ht_headings_h6_font_size',
        'priority' => 120,
        'choices' => $size
      )
    );

	/*--------------------------------------------------------------
		### Site Title Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_site_title_font', array(
        'default' => 'Dancing Script',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_site_title_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_site_title_font_section',
        'settings' => 'ht_site_title_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_site_title_font_size', array(
        'default' => '60',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_site_title_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_site_title_font_section',
        'settings' => 'ht_site_title_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_site_title_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_site_title_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_site_title_font_section',
		'settings' => 'ht_site_title_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_site_title_font_style', array(
		'default' => 'normal',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_site_title_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_site_title_font_section',
		'settings' => 'ht_site_title_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_site_title_letter_spacing', array(
        'default' => '2',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_site_title_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_site_title_font_section',
		'settings' => 'ht_site_title_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_site_title_text_align', array(
		'default' => 'center',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_site_title_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_site_title_font_section',
		'settings' => 'ht_site_title_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_site_title_text_transform', array(
		'default' => 'capitalize',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_site_title_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_site_title_font_section',
		'settings' => 'ht_site_title_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	/*--------------------------------------------------------------
		### Tagline Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_tagline_font', array(
        'default' => 'Raleway',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_tagline_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_tagline_font_section',
        'settings' => 'ht_tagline_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_tagline_font_size', array(
        'default' => '14',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_tagline_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_tagline_font_section',
        'settings' => 'ht_tagline_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_tagline_font_weight', array(
		'default' => '300',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_tagline_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_tagline_font_section',
		'settings' => 'ht_tagline_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_tagline_font_style', array(
		'default' => 'italic',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_tagline_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_tagline_font_section',
		'settings' => 'ht_tagline_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_tagline_letter_spacing', array(
        'default' => '0',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_tagline_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_tagline_font_section',
		'settings' => 'ht_tagline_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_tagline_text_align', array(
		'default' => 'center',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_tagline_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_tagline_font_section',
		'settings' => 'ht_tagline_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_tagline_text_transform', array(
		'default' => 'none',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_tagline_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_tagline_font_section',
		'settings' => 'ht_tagline_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	/*--------------------------------------------------------------
		### Post Title Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_post_title_font', array(
        'default' => 'Playfair Display',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_post_title_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_post_title_font_section',
        'settings' => 'ht_post_title_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_post_title_font_size', array(
        'default' => '20',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_post_title_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_post_title_font_section',
        'settings' => 'ht_post_title_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_post_title_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_post_title_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_post_title_font_section',
		'settings' => 'ht_post_title_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_post_title_font_style', array(
		'default' => 'normal',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_post_title_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_post_title_font_section',
		'settings' => 'ht_post_title_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_post_title_letter_spacing', array(
        'default' => '0',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_post_title_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_post_title_font_section',
		'settings' => 'ht_post_title_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_post_title_text_align', array(
		'default' => 'left',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_post_title_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_post_title_font_section',
		'settings' => 'ht_post_title_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_post_title_text_transform', array(
		'default' => 'uppercase',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_post_title_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_post_title_font_section',
		'settings' => 'ht_post_title_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	/*--------------------------------------------------------------
		### Meta Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_meta_font', array(
        'default' => 'Lato',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_meta_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_meta_font_section',
        'settings' => 'ht_meta_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_meta_font_size', array(
        'default' => '12',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_meta_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_meta_font_section',
        'settings' => 'ht_meta_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_meta_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_meta_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_meta_font_section',
		'settings' => 'ht_meta_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_meta_font_style', array(
		'default' => 'italic',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_meta_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_meta_font_section',
		'settings' => 'ht_meta_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_meta_letter_spacing', array(
        'default' => '0',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_meta_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_meta_font_section',
		'settings' => 'ht_meta_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_meta_text_align', array(
		'default' => 'left',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_meta_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_meta_font_section',
		'settings' => 'ht_meta_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_meta_text_transform', array(
		'default' => 'none',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_meta_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_meta_font_section',
		'settings' => 'ht_meta_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	/*--------------------------------------------------------------
		### Menu Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_menu_font', array(
        'default' => 'Raleway',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_menu_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_menu_font_section',
        'settings' => 'ht_menu_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_menu_font_size', array(
        'default' => '12',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_menu_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_menu_font_section',
        'settings' => 'ht_menu_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_menu_font_weight', array(
		'default' => '300',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_menu_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_menu_font_section',
		'settings' => 'ht_menu_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_menu_font_style', array(
		'default' => 'normal',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_menu_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_menu_font_section',
		'settings' => 'ht_menu_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_menu_letter_spacing', array(
        'default' => '3',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_menu_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_menu_font_section',
		'settings' => 'ht_menu_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text transform
	$wp_customize->add_setting('ht_menu_text_transform', array(
		'default' => 'uppercase',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_menu_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_menu_font_section',
		'settings' => 'ht_menu_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));

	/*--------------------------------------------------------------
		### Widget Title Font
	--------------------------------------------------------------*/
	// font
    $wp_customize->add_setting('ht_widget_title_font', array(
        'default' => 'Playfair Display',
        'sanitize_callback' => 'ht_sanitize_fonts',
    ));
    $wp_customize->add_control('ht_widget_title_font', array(
        'type' => 'select',
        'label' => __('Font', 'vinyl'),
        'section' => 'ht_widget_title_font_section',
        'settings' => 'ht_widget_title_font',
        'priority' => 10,
        'choices' => $fonts
      )
    );

	// size
	$wp_customize->add_setting( 'ht_widget_title_font_size', array(
        'default' => '14',
        'sanitize_callback' => 'ht_sanitize_font_size',
    ) );

    $wp_customize->add_control('ht_widget_title_font_size', array(
        'type' => 'select',
        'label' => __('Font Size', 'vinyl'),
        'section' => 'ht_widget_title_font_section',
        'settings' => 'ht_widget_title_font_size',
        'priority' => 20,
        'choices' => $size
      )
    );

	// weight
	$wp_customize->add_setting('ht_widget_title_font_weight', array(
		'default' => '400',
		'sanitize_callback' => 'ht_sanitize_font_weight',
	));

	$wp_customize->add_control('ht_widget_title_font_weight', array(
		'label' => __('Weight', 'vinyl'),
		'priority' => 30,
		'section' => 'ht_widget_title_font_section',
		'settings' => 'ht_widget_title_font_weight',
		'type' => 'select',
		'choices' => $weight
	));

	// font style
	$wp_customize->add_setting('ht_widget_title_font_style', array(
		'default' => 'normal',
		'sanitize_callback' => 'ht_sanitize_font_style',
	));

	$wp_customize->add_control('ht_widget_title_font_style', array(
		'label' => __('Font Style', 'vinyl'),
		'priority' => 40,
		'section' => 'ht_widget_title_font_section',
		'settings' => 'ht_widget_title_font_style',
		'type' => 'select',
		'choices' => $font_style
	));

	// letter spacing
	$wp_customize->add_setting( 'ht_widget_title_letter_spacing', array(
        'default' => '5',
        'sanitize_callback' => 'ht_sanitize_letter_spacing',
    ) );

	$wp_customize->add_control('ht_widget_title_letter_spacing', array(
		'label' => __('Letter Spacing', 'vinyl'),
		'priority' => 50,
		'section' => 'ht_widget_title_font_section',
		'settings' => 'ht_widget_title_letter_spacing',
		'type' => 'select',
		'choices' => $letter_spacing
	));

	// text align
	$wp_customize->add_setting('ht_widget_title_text_align', array(
		'default' => 'center',
		'sanitize_callback' => 'ht_sanitize_text_align',
	));

	$wp_customize->add_control('ht_widget_title_text_align', array(
		'label' => __('Text Align', 'vinyl'),
		'priority' => 60,
		'section' => 'ht_widget_title_font_section',
		'settings' => 'ht_widget_title_text_align',
		'type' => 'select',
		'choices' => $text_align
	));

	// text transform
	$wp_customize->add_setting('ht_widget_title_text_transform', array(
		'default' => 'uppercase',
		'sanitize_callback' => 'ht_sanitize_text_transform',
	));

	$wp_customize->add_control('ht_widget_title_text_transform', array(
		'label' => __('Text Transform', 'vinyl'),
		'priority' => 70,
		'section' => 'ht_widget_title_font_section',
		'settings' => 'ht_widget_title_text_transform',
		'type' => 'select',
		'choices' => $text_transform
	));
}
add_action('customize_register', 'ht_theme_customizer_typo');

/**
 * Customizer Apply CSS to Head
 */
if ( ! function_exists( 'ht_apply_typo_font' ) ) :
  	
  	function ht_apply_typo_font() {	
	{ 
		?>
			<style>
			<?php if( get_theme_mod( 'ht_body_font' ) != 'default') { ?>
				body { font-family: '<?php echo get_theme_mod('ht_body_font', 'Lato');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_headings_font' ) != 'default') { ?>
			h1, h2, h3, h4, h5, h6 { font-family: '<?php echo get_theme_mod('ht_headings_font', 'Playfair Display');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_site_title_font' ) != 'default') { ?>
			.site-title { font-family: '<?php echo get_theme_mod('ht_site_title_font', 'Dancing Script');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_tagline_font' ) != 'default') { ?>
			.site-description { font-family: '<?php echo get_theme_mod('ht_tagline_font', 'Raleway');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_post_title_font' ) != 'default') { ?>
			.entry-title { font-family: '<?php echo get_theme_mod('ht_post_title_font', 'Playfair Display');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_meta_font' ) != 'default') { ?>
			.entry-meta, .cat-links, .tags-links, .comments-link, .edit-link { font-family: '<?php echo get_theme_mod('ht_meta_font', 'Lato');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_menu_font' ) != 'default') { ?>
			.main-navigation { font-family: '<?php echo get_theme_mod('ht_menu_font', 'Raleway');  ?>'; }
			<?php } // end if ?>

			<?php if( get_theme_mod( 'ht_widget_title_font' ) != 'default') { ?>
			.widget-title { font-family: '<?php echo get_theme_mod('ht_widget_title_font', 'Playfair Display');  ?>' !important; }
			<?php } // end if ?>
			</style>
		<?php
    }
}
endif;
add_action( 'wp_head', 'ht_apply_typo_font' );

if ( ! function_exists( 'ht_apply_typo_style' ) ) :
  	
  	function ht_apply_typo_style() {	
	{ 
		?>
			<style>
			body { 
				font-size: <?php echo get_theme_mod('ht_body_font_size', '14');  ?>px;
				font-weight: <?php echo get_theme_mod('ht_body_font_weight', '400'); ?>;
			}

			h1,
			h2,
			h3,
			h4,
			h5,
			h6 {
				font-style: <?php echo get_theme_mod('ht_headings_font_style', 'normal'); ?>;
				font-weight: <?php echo get_theme_mod('ht_headings_font_weight', '400'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_headings_letter_spacing', '0'); ?>px;
				text-align: <?php echo get_theme_mod('ht_headings_text_align', 'left'); ?>;
				text-transform: <?php echo get_theme_mod('ht_headings_text_transform', 'none'); ?>;
			}

			h1 { font-size: <?php echo get_theme_mod('ht_headings_h1_font_size', '36'); ?>px; }
			h2 { font-size: <?php echo get_theme_mod('ht_headings_h2_font_size', '30'); ?>px; }
			h3 { font-size: <?php echo get_theme_mod('ht_headings_h3_font_size', '24'); ?>px; }
			h4 { font-size: <?php echo get_theme_mod('ht_headings_h4_font_size', '18'); ?>px; }
			h5 { font-size: <?php echo get_theme_mod('ht_headings_h5_font_size', '14'); ?>px; }
			h6 { font-size: <?php echo get_theme_mod('ht_headings_h6_font_size', '12'); ?>px; }

			.site-title {
				font-size: <?php echo get_theme_mod('ht_site_title_font_size', '60');  ?>px;
				font-style: <?php echo get_theme_mod('ht_site_title_font_style', 'normal'); ?>;
				font-weight: <?php echo get_theme_mod('ht_site_title_font_weight', '400'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_site_title_letter_spacing', '2'); ?>px;
				text-align: <?php echo get_theme_mod('ht_site_title_text_align', 'center'); ?>;
				text-transform: <?php echo get_theme_mod('ht_site_title_text_transform', 'capitalize'); ?>;
			}

			.site-description {
				font-size: <?php echo get_theme_mod('ht_tagline_font_size', '14');  ?>px;
				font-style: <?php echo get_theme_mod('ht_tagline_font_style', 'italic'); ?>;
				font-weight: <?php echo get_theme_mod('ht_tagline_font_weight', '300'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_tagline_letter_spacing', '0'); ?>px;
				text-align: <?php echo get_theme_mod('ht_tagline_text_align', 'center'); ?>;
				text-transform: <?php echo get_theme_mod('ht_tagline_text_transform', 'none'); ?>;
			}

			.entry-title {
				font-size: <?php echo get_theme_mod('ht_post_title_font_size', '20');  ?>px;
				font-style: <?php echo get_theme_mod('ht_post_title_font_style', 'normal'); ?>;
				font-weight: <?php echo get_theme_mod('ht_post_title_font_weight', '400'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_post_title_letter_spacing', '0'); ?>px;
				text-align: <?php echo get_theme_mod('ht_post_title_text_align', 'left'); ?>;
				text-transform: <?php echo get_theme_mod('ht_post_title_text_transform', 'uppercase'); ?>;
			}

			.entry-meta, 
			.cat-links, 
			.tags-links, 
			.comments-link, 
			.edit-link {
				font-size: <?php echo get_theme_mod('ht_meta_font_size', '12');  ?>px;
				font-style: <?php echo get_theme_mod('ht_meta_font_style', 'italic'); ?>;
				font-weight: <?php echo get_theme_mod('ht_meta_font_weight', '400'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_meta_letter_spacing', '0'); ?>px;
				text-align: <?php echo get_theme_mod('ht_meta_text_align', 'left'); ?>;
				text-transform: <?php echo get_theme_mod('ht_meta_text_transform', 'none'); ?>;
			}

			.main-navigation {
				font-size: <?php echo get_theme_mod('ht_menu_font_size', '12');  ?>px;
				font-style: <?php echo get_theme_mod('ht_menu_font_style', 'normal'); ?>;
				font-weight: <?php echo get_theme_mod('ht_menu_font_weight', '300'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_menu_letter_spacing', '3'); ?>px;
				text-transform: <?php echo get_theme_mod('ht_menu_text_transform', 'uppercase'); ?>;
			}

			.widget-title {
				font-size: <?php echo get_theme_mod('ht_widget_title_font_size', '14');  ?>px;
				font-style: <?php echo get_theme_mod('ht_widget_title_font_style', 'normal'); ?>;
				font-weight: <?php echo get_theme_mod('ht_widget_title_font_weight', '400'); ?>;
				letter-spacing: <?php echo get_theme_mod('ht_widget_title_letter_spacing', '5'); ?>px;
				text-align: <?php echo get_theme_mod('ht_widget_title_text_align', 'center'); ?>;
				text-transform: <?php echo get_theme_mod('ht_widget_title_text_transform', 'uppercase'); ?>;
			}
			</style>
		<?php
    }
}
endif;
add_action( 'wp_head', 'ht_apply_typo_style' );