<?php
/**
 * vinyl Theme Customizer
 *
 * @package vinyl
 * @since vinyl 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vinyl_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'vinyl_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vinyl_customize_preview_js() {
	wp_enqueue_script( 'vinyl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'vinyl_customize_preview_js' );

/**
 * Customizer: Sanization
 */
require get_template_directory() . '/inc/customizer-sanization.php';

/**
 * Customizer Panel: Fonts
 */
require get_template_directory() . '/inc/customizer-fonts.php';

/**
 * Customizer Panel: Typography
 */
require get_template_directory() . '/inc/customizer-typo.php';

/**
 * Customizer
 *
 * @since vinyl 1.0
 */
function vinyl_theme_customizer( $wp_customize ) {
	class Vinyl_Customize_Text_Control extends WP_Customize_Control {
	    public $type = 'text';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	            	<input type="text" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></input>
	            </label>
	        <?php
	    }
	}
	
	class Vinyl_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}
	
	/*--------------------------------------------------------------
		Layout
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'vinyl_layout_section' , array(
	    'title' => __( 'Layout', 'vinyl' ),
	    'priority' => 10,
	    'description' => 'Layout Customization',
	) );

	$wp_customize->add_setting('vinyl_sidebar_position', array(
		'default' => 'left',
		'sanitize_callback' => 'ht_sanitize_sidebar',
	));

	$wp_customize->add_control('vinyl_sidebar_position', array(
		'label' => __('Blog Sidebar Position', 'vinyl'),
		'section' => 'vinyl_layout_section',
		'settings' => 'vinyl_sidebar_position',
		'type' => 'select',
		'choices' => array(
			'right' => 'left',
			'left' => 'right'
		),
	));
	
	/* Excerpt Automatic */
	$wp_customize->add_setting('vinyl_excerpt', array(
		'default' => 'no',
		'sanitize_callback' => 'ht_sanitize_yesno',
	));

	$wp_customize->add_control('vinyl_excerpt', array(
		'label' => __('Excerpt Automatic', 'vinyl'),
		'section' => 'vinyl_layout_section',
		'settings' => 'vinyl_excerpt',
		'type' => 'select',
		'choices' => array(
			'no' => 'No',
			'yes' => 'Yes'
		),
	));
	
	/*--------------------------------------------------------------
		# Slider Option
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'ht_slider_opt_section' , array(
		'title' => __( 'Slider Options', 'vinyl' ),
		'priority' => 20,
	) );

	// slider home page option
	$wp_customize->add_setting('ht_slider_option', array(
		'default' => 'no',
		'sanitize_callback' => 'ht_sanitize_yesno',
	));

	$wp_customize->add_control('ht_slider_option', array(
		'label' => __('Home Page Activated?', 'vinyl'),
		'priority' => 10,
		'section' => 'ht_slider_opt_section',
		'settings' => 'ht_slider_option',
		'type' => 'select',
		'choices' => array(
			'no' => 'No',
			'yes' => 'Yes'
		),
	));

	// slider home page id
	$wp_customize->add_setting( 'ht_slider_home_id', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );
	 
	$wp_customize->add_control(
	    new Vinyl_Customize_Text_Control(
	        $wp_customize,
	        'ht_slider_home_id',
	        array(
	            'label' => 'Meta Slider ID',
	            'priority' => 20,
	            'section' => 'ht_slider_opt_section',
	            'settings' => 'ht_slider_home_id'
	        )
	    )
	);

	/*--------------------------------------------------------------
		Colors
	--------------------------------------------------------------*/
	/* Body Font Color */
    $wp_customize->add_setting( 'vinyl_body_color', array(
        'default' => '#666666',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_body_color', array(
		'label' => __( 'Body Font Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 1,
		'settings' => 'vinyl_body_color',
	) ) );

	/* Link Color */
    $wp_customize->add_setting( 'vinyl_link_color', array(
        'default' => '#666666',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_link_color', array(
		'label' => __( 'Link Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 2,
		'settings' => 'vinyl_link_color',
	) ) );

	/* Link Hover Color */
    $wp_customize->add_setting( 'vinyl_hover_color', array(
        'default' => '#cccccc',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_hover_color', array(
		'label' => __( 'Link Hover Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 3,
		'settings' => 'vinyl_hover_color',
	) ) );

	/* Site Title Font Color */
    $wp_customize->add_setting( 'vinyl_site_title_color', array(
        'default' => '#4d4d54',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_site_title_color', array(
		'label' => __( 'Site Title Font Color', 'vinyl' ),
		'priority' => 4,
		'section' => 'colors',
		'settings' => 'vinyl_site_title_color',
	) ) );

	/* Headings Font Color */
    $wp_customize->add_setting( 'vinyl_heading_color', array(
        'default' => '#666666',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_heading_color', array(
		'label' => __( 'Headings Font Color', 'vinyl' ),
		'priority' => 5,
		'section' => 'colors',
		'settings' => 'vinyl_heading_color',
	) ) );

	/* Main Menu Text Color */
    $wp_customize->add_setting( 'vinyl_nav_text_color', array(
        'default' => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_nav_text_color', array(
		'label' => __( 'Main Menu Text Color', 'vinyl' ),
		'priority' => 6,
		'section' => 'colors',
		'settings' => 'vinyl_nav_text_color',
	) ) );

	/* Main Menu Background Color */
    $wp_customize->add_setting( 'vinyl_nav_bg_color', array(
        'default' => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_nav_bg_color', array(
		'label' => __( 'Main Menu Background Color', 'vinyl' ),
		'priority' => 7,
		'section' => 'colors',
		'settings' => 'vinyl_nav_bg_color',
	) ) );

	/* Post Title Link Color */
    $wp_customize->add_setting( 'vinyl_post_color', array(
        'default' => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_post_color', array(
		'label' => __( 'Post Title Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 8,
		'settings' => 'vinyl_post_color',
	) ) );

	/* Post Title Link Hover Color */
    $wp_customize->add_setting( 'vinyl_post_hover_color', array(
        'default' => '#cccccc',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_post_hover_color', array(
		'label' => __( 'Post Title Hover Color', 'vinyl' ),
		'priority' => 9,
		'section' => 'colors',
		'settings' => 'vinyl_post_hover_color',
	) ) );

	/* Widget Background Color */
    $wp_customize->add_setting( 'vinyl_widget_background_color', array(
        'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_widget_background_color', array(
		'label' => __( 'Widget Background Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 10,
		'settings' => 'vinyl_widget_background_color',
	) ) );

	/* Widget Title Color */
    $wp_customize->add_setting( 'vinyl_widget_title_color', array(
        'default' => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_widget_title_color', array(
		'label' => __( 'Widget Title Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 11,
		'settings' => 'vinyl_widget_title_color',
	) ) );

	/* Icons Color */
    $wp_customize->add_setting( 'vinyl_icons_color', array(
        'default' => '#4d4d54',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_icons_color', array(
		'label' => __( 'Icons Color', 'vinyl' ),
		'section' => 'colors',
		'priority' => 12,
		'settings' => 'vinyl_icons_color',
	) ) );
	
	/* Blockquote Color */
    $wp_customize->add_setting( 'vinyl_blockquote_color', array(
        'default' => '#4d4d54',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_blockquote_color', array(
		'label' => __( 'Blockquote', 'vinyl' ),
		'priority' => 13,
		'section' => 'colors',
		'settings' => 'vinyl_blockquote_color',
	) ) );

	/* Button Color */
    $wp_customize->add_setting( 'vinyl_button_color', array(
        'default' => '#4d4d54',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_button_color', array(
		'label' => __( 'Button', 'vinyl' ),
		'priority' => 14,
		'section' => 'colors',
		'settings' => 'vinyl_button_color',
	) ) );

	/* Button Text Color */
    $wp_customize->add_setting( 'vinyl_button_text_color', array(
        'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_button_text_color', array(
		'label' => __( 'Button Text', 'vinyl' ),
		'priority' => 15,
		'section' => 'colors',
		'settings' => 'vinyl_button_text_color',
	) ) );
	
	/* Pagination Current Color */
    $wp_customize->add_setting( 'vinyl_pagination_current_color', array(
        'default' => '#4d4d54',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_pagination_current_color', array(
		'label' => __( 'Pagination Current', 'vinyl' ),
		'priority' => 24,
		'section' => 'colors',
		'settings' => 'vinyl_pagination_current_color',
	) ) );

	/* Pagination Next Color */
    $wp_customize->add_setting( 'vinyl_pagination_next_color', array(
        'default' => '#cccccc',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_pagination_next_color', array(
		'label' => __( 'Pagination Next', 'vinyl' ),
		'priority' => 25,
		'section' => 'colors',
		'settings' => 'vinyl_pagination_next_color',
	) ) );

	/* Pagination Text Color */
    $wp_customize->add_setting( 'vinyl_pagination_text_color', array(
        'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vinyl_pagination_text_color', array(
		'label' => __( 'Pagination Text', 'vinyl' ),
		'priority' => 26,
		'section' => 'colors',
		'settings' => 'vinyl_pagination_text_color',
	) ) );

	/*--------------------------------------------------------------
		Footer Credits
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'vinyl_footer_section' , array(
	    'title'       => __( 'Footer Credits', 'vinyl' ),
	    'priority' => 70,
	    'description' => 'Custom Footer Credits',
	) );

	$wp_customize->add_setting('vinyl_footer', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );

	$wp_customize->add_control(
	    'vinyl_footer',
	    array(
	        'label' => 'Footer Credits',
	        'section' => 'vinyl_footer_section',
	        'type' => 'text',
	    )
	);

	/*--------------------------------------------------------------
		Custom CSS
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'vinyl_css_section' , array(
	    'title'       => __( 'Custom CSS', 'vinyl' ),
	    'priority'    => 80,
	    'description' => 'You can add your custom CSS',
	) );

	$wp_customize->add_setting( 'vinyl_css', array(
        'sanitize_callback' => 'esc_textarea',
    ) );;
	 
	$wp_customize->add_control(
	    new Vinyl_Customize_Textarea_Control(
	        $wp_customize,
	        'vinyl_css',
	        array(
	            'label' => 'Custom CSS',
	            'section' => 'vinyl_css_section',
	            'settings' => 'vinyl_css'
	        )
	    )
	);

	/*--------------------------------------------------------------
		Google Analytics
	--------------------------------------------------------------*/
	// google analytics section
	$wp_customize->add_section( 'vinyl_footer_analytics_section' , array(
		'title' => __( 'Google Analytics', 'vinyl' ),
		'description' => 'Copy and Paste your Google Analytics Code like UA-XXXXXXXX-X',
		'priority' => 90,
	) );
	
	// google analytics code
	$wp_customize->add_setting( 'vinyl_footer_analytics', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );
	 
	$wp_customize->add_control(
	    new Vinyl_Customize_Text_Control(
	        $wp_customize,
	        'vinyl_footer_analytics',
	        array(
	            'label' => 'Google Analytics Code',
	            'priority' => 10,
	            'section' => 'vinyl_footer_analytics_section',
	            'settings' => 'vinyl_footer_analytics'
	        )
	    )
	);
}
add_action('customize_register', 'vinyl_theme_customizer');

/**
 * Customizer Apply Style
 *
 * @since vinyl 1.0
 */
if ( ! function_exists( 'vinyl_apply_style' ) ) :
  	
  	function vinyl_apply_style() {	
		if ( get_theme_mod('vinyl_sidebar_position') || 
			 get_theme_mod('vinyl_body_color') || 
			 get_theme_mod('vinyl_link_color') || 
			 get_theme_mod('vinyl_hover_color') || 
			 get_theme_mod('vinyl_site_title_color') || 
			 get_theme_mod('vinyl_heading_color') || 
			 get_theme_mod('vinyl_nav_text_color') || 
			 get_theme_mod('vinyl_nav_bg_color') || 
			 get_theme_mod('vinyl_post_color') || 
			 get_theme_mod('vinyl_post_hover_color') || 
			 get_theme_mod('vinyl_widget_background_color') || 
			 get_theme_mod('vinyl_widget_title_color') || 
			 get_theme_mod('vinyl_icons_color') || 
			 get_theme_mod('vinyl_blockquote_color') || 
			 get_theme_mod('vinyl_button_color') || 
			 get_theme_mod('vinyl_button_text_color') || 
			 get_theme_mod('vinyl_pagination_current_color') || 
			 get_theme_mod('vinyl_pagination_next_color') || 
			 get_theme_mod('vinyl_pagination_text_color') || 
			 get_theme_mod('vinyl_css')
		) { 
		?>
			<style id="vinyl-layout-settings">
				<?php if ( get_theme_mod('vinyl_sidebar_position') ) : ?>
					@media (min-width: 1024px) {
						.blog .column,
						.single .column {
							float: <?php echo get_theme_mod('vinyl_sidebar_position'); ?>;
						}
					}
				<?php endif; ?>
			</style>
			<style id="vinyl-style-settings">
				<?php if ( get_theme_mod('vinyl_body_color') ) : ?>
					body,
					button,
					input,
					select,
					textarea {
						color: <?php echo get_theme_mod('vinyl_body_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_site_title_color') ) : ?>
					.site-title a {
						color: <?php echo get_theme_mod('vinyl_site_title_color');  ?>;
					}
					.site-description {
						color: <?php echo get_theme_mod('vinyl_site_title_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_heading_color') ) : ?>
					h1, h2, h3, h4, h5, h6 {
						color: <?php echo get_theme_mod('vinyl_heading_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_link_color') ) : ?>
					a,
					a:visited {
						color: <?php echo get_theme_mod('vinyl_link_color');  ?>;
					}
				<?php endif; ?>
			
				<?php if ( get_theme_mod('vinyl_hover_color') ) : ?>
					a:hover,
					a:focus,
					a:active {
						color: <?php echo get_theme_mod('vinyl_hover_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_post_color') ) : ?>
					.entry-title,
					.entry-title a {
						color: <?php echo get_theme_mod('vinyl_post_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_post_hover_color') ) : ?>
					.entry-title a:hover {
						color: <?php echo get_theme_mod('vinyl_post_hover_color');  ?> !important;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_nav_text_color') ) : ?>
					.main-navigation a {
						color: <?php echo get_theme_mod('vinyl_nav_text_color');  ?> !important;
					}
					@media screen and (max-width: 1023px) {
						button.menu-toggle {
							color: <?php echo get_theme_mod('vinyl_nav_text_color');  ?>;
						}
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_nav_bg_color') ) : ?>
					.main-navigation {
						background-color: <?php echo get_theme_mod('vinyl_nav_bg_color');  ?>;
					}

					.main-navigation ul ul {
						background-color: <?php echo get_theme_mod('vinyl_nav_bg_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_widget_title_color') ) : ?>
					.widget-title {
						color: <?php echo get_theme_mod('vinyl_widget_title_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_widget_background_color') ) : ?>
					.widget-area {
						background: <?php echo get_theme_mod('vinyl_widget_background_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_icons_color') ) : ?>
					.social,
					.social-fontello {
						background-color: <?php echo get_theme_mod('vinyl_icons_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_blockquote_color') ) : ?>
					blockquote {
						border-left: 5px solid <?php echo get_theme_mod('vinyl_blockquote_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_button_color') || get_theme_mod('vinyl_button_text_color') ) : ?>
					button, 
					input[type="button"], 
					input[type="reset"], 
					input[type="submit"] {
						border: 1px solid <?php echo get_theme_mod('vinyl_button_color');  ?>;
						background: <?php echo get_theme_mod('vinyl_button_color');  ?>;
						color: <?php echo get_theme_mod('vinyl_button_text_color');  ?>;
					}
				<?php endif; ?>
				
				<?php if ( get_theme_mod('vinyl_pagination_current_color') ) : ?>
					.pagination a:hover, 
					.pagination .current {
						background: <?php echo get_theme_mod('vinyl_pagination_current_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_pagination_next_color') ) : ?>
					.pagination a {
						background: <?php echo get_theme_mod('vinyl_pagination_next_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('vinyl_pagination_text_color') ) : ?>
					.pagination a:hover, 
					.pagination .current,
					.pagination a {
						color: <?php echo get_theme_mod('vinyl_pagination_text_color');  ?>;
					}
				<?php endif; ?>
			</style>
			<style id="vinyl-custom-css">
				<?php if ( get_theme_mod('vinyl_css') ) : ?>
					<?php echo get_theme_mod('vinyl_css');  ?>;
				<?php endif; ?>
			</style>
		<?php
    }
}
endif;
add_action( 'wp_head', 'vinyl_apply_style' );