<?php
/**
 * vinyl functions and definitions
 *
 * @package vinyl
 * @since vinyl 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 630; /* pixels */
}

if ( ! function_exists( 'vinyl_setup' ) ) :
	
	function vinyl_setup() {
	
	// Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'vinyl', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' ); 

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vinyl' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'quote', 'audio' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vinyl_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
	
	// Enable support Title Tag
	add_theme_support( "title-tag" );
}
endif; // vinyl_setup
add_action( 'after_setup_theme', 'vinyl_setup' );

/**
 * Custom Editor Style
 *
 * @since vinyl 1.0
 */
function vinyl_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'vinyl_add_editor_styles' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vinyl_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vinyl' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'vinyl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vinyl_scripts() {
	wp_enqueue_style( 'vinyl-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vinyl-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), '1.1' );

	wp_enqueue_script( 'vinyl-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20120206', true );

	wp_enqueue_script( 'vinyl-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vinyl_scripts' );

/**
 * Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Theme Updates
 */
require get_template_directory() . '/inc/updates/theme-update-checker.php';
require get_template_directory() . '/inc/updates/theme-update-settings.php';

/**
 * Include the TGM_Plugin_Activation class.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function vinyl_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => 'HipsterTheme Shortcodes',
			'slug'               => 'hipstertheme-shortcodes',
			'source'             => get_template_directory() . '/inc/plugins/hipstertheme-shortcodes.zip',
			'required'           => true,
			'version'            => '1.0',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
		),

		array(
			'name'      => 'WP Instagram Widget',
			'slug'      => 'wp-instagram-widget',
			'required'  => false,
		),
		
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		
		array(
			'name'      => 'Jetpack',
			'slug'      => 'jetpack',
			'required'  => false,
		),
		
		array(
			'name'      => 'Meta Slider',
			'slug'      => 'ml-slider',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'vinyl',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vinyl_register_required_plugins' );

/**
 * Print the attached image with a link to the next attached image.
 *
 * @since vinyl 1.0
 */
if ( ! function_exists( 'vinyl_the_attached_image' ) ) :
function vinyl_the_attached_image() {
	$post                = get_post();
	/**
	 *
	 * @since vinyl 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'vinyl_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns a "Read more" link for excerpts
 *
 * @since vinyl 1.0
 */
function vinyl_excerpt_more( $more ) {
	return '<a class="more-link" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read more', 'vinyl' ) . '</a>';
}
add_filter( 'excerpt_more', 'vinyl_excerpt_more' );


/**
 * Remove Code from Header
 *
 * http://www.themelab.com/remove-code-wordpress-header/
 *
 * @since vinyl 1.0
 */
remove_action('wp_head', 'wp_generator'); //Version of Wordpress
remove_action('wp_head', 'adjacent_posts_rel_link'); //Next and Prev Posts

/**
 * Add Google Analytics
 */
function vinyl_analytics() {
?>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo get_theme_mod( 'vinyl_footer_analytics' ); ?>', 'auto');
  ga('send', 'pageview');

</script>
<!-- /Google Analytics -->
<?php
}
add_action('wp_head', 'vinyl_analytics',99);

/**
 * Add to scroll top
 *
 * @since vinyl 1.0
 */
function scroll_to_top() {
?>
<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
<?php
}
add_action('wp_footer', 'scroll_to_top');