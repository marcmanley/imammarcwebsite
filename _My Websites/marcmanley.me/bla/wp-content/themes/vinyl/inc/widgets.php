<?php
/**
 * Custom Widgets
 *
 * @package vinyl
 * @since vinyl 1.0
 */

/**
 * Social Links
 *
 * @since vinyl 1.0
 */
class social_vinyl extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-social', 'description' => 'Show Icons of your Social Links.', 'vinyl' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'social_vinyl' );

		/* Create the widget. */
		parent::__construct( 'social_vinyl', 'Social Links (vinyl)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$feed = $instance['feed'];
		$email = $instance['email'];
		$linkedin = $instance['linkedin'];
		$bloglovin = $instance['bloglovin'];
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$googleplus = $instance['googleplus'];
		$pinterest = $instance['pinterest'];
		$instagram = $instance['instagram'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		$dribbble = $instance['dribbble'];
		$behance = $instance['behance'];
		$github = $instance['github'];
		$skype = $instance['skype'];
		$tumblr = $instance['tumblr'];
		$wordpress = $instance['wordpress'];


		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $feed )
			echo '<span><a href="' . $feed . '" title="' . __( 'Feed', 'vinyl' ) . '" class="' . __( 'social social-feed', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $email )
			echo '<span><a href="mailto:' . $email . '" title="' . __( 'Email', 'vinyl' ) . '" class="' . __( 'social social-email', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $linkedin )
			echo '<span><a href="' . $linkedin . '" title="' . __( 'Linkedin', 'vinyl' ) . '" class="' . __( 'social social-linkedin', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';
		
		if ( $bloglovin )
			echo '<span><a href="' . $bloglovin . '" title="' . __( 'Bloglovin', 'vinyl' ) . '" class="' . __( 'social social-bloglovin', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $twitter )
			echo '<span><a href="' . $twitter . '" title="' . __( 'Twitter', 'vinyl' ) . '" class="' . __( 'social social-twitter', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $facebook )
			echo '<span><a href="' . $facebook . '" title="' . __( 'Facebook', 'vinyl' ) . '" class="' . __( 'social social-facebook', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $googleplus )
			echo '<span><a href="' . $googleplus . '" title="' . __( 'Googleplus', 'vinyl' ) . '" class="' . __( 'social social-googleplus', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $pinterest )
			echo '<span><a href="' . $pinterest . '" title="' . __( 'Pinterest', 'vinyl' ) . '" class="' . __( 'social social-pinterest', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $instagram )
			echo '<span><a href="' . $instagram . '" title="' . __( 'Instagram', 'vinyl' ) . '" class="' . __( 'social social-instagram', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $flickr )
			echo '<span><a href="' . $flickr . '" title="' . __( 'Flickr', 'vinyl' ) . '" class="' . __( 'social social-flickr', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $youtube )
			echo '<span><a href="' . $youtube . '" title="' . __( 'Youtube', 'vinyl' ) . '" class="' . __( 'social social-youtube', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $vimeo )
			echo '<span><a href="' . $vimeo . '" title="' . __( 'Vimeo', 'vinyl' ) . '" class="' . __( 'social social-vimeo', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $dribbble )
			echo '<span><a href="' . $dribbble . '" title="' . __( 'Dribbble', 'vinyl' ) . '" class="' . __( 'social social-dribbble', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $behance )
			echo '<span><a href="' . $behance . '" title="' . __( 'Behance', 'vinyl' ) . '" class="' . __( 'social-fontello social-behance', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $github )
			echo '<span><a href="' . $github . '" title="' . __( 'Github', 'vinyl' ) . '" class="' . __( 'social social-github', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $skype )
			echo '<span><a href="' . $skype . '" title="' . __( 'Skype', 'vinyl' ) . '" class="' . __( 'social social-skype', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $tumblr )
			echo '<span><a href="' . $tumblr . '" title="' . __( 'Tumblr', 'vinyl' ) . '" class="' . __( 'social social-tumblr', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';

		if ( $wordpress )
			echo '<span><a href="' . $wordpress . '" title="' . __( 'Wordpress', 'vinyl' ) . '" class="' . __( 'social social-wordpress', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>';
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['feed'] = $new_instance['feed'];
		$instance['email'] = $new_instance['email'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['bloglovin'] = $new_instance['bloglovin'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['dribbble'] = $new_instance['dribbble'];
		$instance['behance'] = $new_instance['behance'];
		$instance['github'] = $new_instance['github'];
		$instance['skype'] = $new_instance['skype'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['wordpress'] = $new_instance['wordpress'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Social Links', 
						'feed' => 'http://www.website.com/feed/',
						'email' => '', 
						'linkedin' => '',
						'bloglovin' => '',
						'twitter' => '',
						'facebook' => '',
						'googleplus' => '',
						'pinterest' => '',
						'instagram' => '',
						'flickr' => '',
						'youtube' => '',
						'vimeo' => '',
						'dribbble' => '',
						'behance' => '',
						'github' => '',
						'skype' => '',
						'tumblr' => '',
						'tumblr' => ''
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e('Feed:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" value="<?php echo $instance['feed']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('Email:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'bloglovin' ); ?>"><?php _e('Bloglovin:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'bloglovin' ); ?>" name="<?php echo $this->get_field_name( 'bloglovin' ); ?>" value="<?php echo $instance['bloglovin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Googleplus:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e('Github:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo $instance['github']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function register_social_vinyl() {
    register_widget( 'social_vinyl' );
}
add_action( 'widgets_init', 'register_social_vinyl' );

/**
 * About Widget
 *
 * @since vinyl 1.0
 */
class about_vinyl extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-about', 'description' => 'About Widget with your image and description.', 'vinyl' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'about_vinyl' );

		/* Create the widget. */
		parent::__construct( 'about_vinyl', 'About (vinyl)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$imageurl = $instance['imageurl'];
		$imagealt = $instance['imagealt'];
		$imagewidth = $instance['imagewidth'];
		$imageheight = $instance['imageheight'];
		$aboutdescription = $instance['aboutdescription'];
		$feed = $instance['feed'];
		$email = $instance['email'];
		$linkedin = $instance['linkedin'];
		$bloglovin = $instance['bloglovin'];
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$googleplus = $instance['googleplus'];
		$pinterest = $instance['pinterest'];
		$instagram = $instance['instagram'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		$dribbble = $instance['dribbble'];
		$behance = $instance['behance'];
		$github = $instance['github'];
		$skype = $instance['skype'];
		$tumblr = $instance['tumblr'];
		$wordpress = $instance['wordpress'];

		echo $before_widget; 
		?>

			<div class="about">
				<?php if($title != '') echo '<h5 class="widget-title">'.$title.'</h5>'; ?>

				<div class="about-image">
					<img src="<?php echo $imageurl; ?>" width="<?php echo $imagewidth; ?>" height="<?php echo $imageheight; ?>" class="about-img" alt="<?php echo $imagealt; ?>">
				</div>
				
				<div class="about-description">
					<p><?php echo $aboutdescription; ?></p>
					<p class="about-social">
						<?php if($feed != '') echo '<span><a href="' . $feed . '" title="' . __( 'Feed', 'vinyl' ) . '" class="' . __( 'social social-feed', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($email != '') echo '<span><a href="mailto:' . $email . '" title="' . __( 'Email', 'vinyl' ) . '" class="' . __( 'social social-email', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($linkedin != '') echo '<span><a href="' . $linkedin . '" title="' . __( 'Linkedin', 'vinyl' ) . '" class="' . __( 'social social-linkedin', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($bloglovin != '') echo '<span><a href="' . $bloglovin . '" title="' . __( 'Bloglovin', 'vinyl' ) . '" class="' . __( 'social social-bloglovin', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($twitter != '') echo '<span><a href="' . $twitter . '" title="' . __( 'Twitter', 'vinyl' ) . '" class="' . __( 'social social-twitter', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($facebook != '') echo '<span><a href="' . $facebook . '" title="' . __( 'Facebook', 'vinyl' ) . '" class="' . __( 'social social-facebook', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($googleplus != '') echo '<span><a href="' . $googleplus . '" title="' . __( 'Googleplus', 'vinyl' ) . '" class="' . __( 'social social-googleplus', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($pinterest != '') echo '<span><a href="' . $pinterest . '" title="' . __( 'Pinterest', 'vinyl' ) . '" class="' . __( 'social social-pinterest', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($instagram != '') echo '<span><a href="' . $instagram . '" title="' . __( 'Instagram', 'vinyl' ) . '" class="' . __( 'social social-instagram', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($flickr != '') echo '<span><a href="' . $flickr . '" title="' . __( 'Flickr', 'vinyl' ) . '" class="' . __( 'social social-flickr', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($youtube != '') echo '<span><a href="' . $youtube . '" title="' . __( 'Youtube', 'vinyl' ) . '" class="' . __( 'social social-youtube', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($vimeo != '') echo '<span><a href="' . $vimeo . '" title="' . __( 'Vimeo', 'vinyl' ) . '" class="' . __( 'social social-vimeo', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($dribbble != '') echo '<span><a href="' . $dribbble . '" title="' . __( 'Dribbble', 'vinyl' ) . '" class="' . __( 'social social-dribbble', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($behance != '') echo '<span><a href="' . $behance . '" title="' . __( 'Behance', 'vinyl' ) . '" class="' . __( 'social-fontello social-behance', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($github != '') echo '<span><a href="' . $github . '" title="' . __( 'Github', 'vinyl' ) . '" class="' . __( 'social social-github', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($skype != '') echo '<span><a href="' . $skype . '" title="' . __( 'Skype', 'vinyl' ) . '" class="' . __( 'social social-skype', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($tumblr != '') echo '<span><a href="' . $tumblr . '" title="' . __( 'Tumblr', 'vinyl' ) . '" class="' . __( 'social social-tumblr', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
						<?php if($wordpress != '') echo '<span><a href="' . $wordpress . '" title="' . __( 'Wordpress', 'vinyl' ) . '" class="' . __( 'social social-wordpress', 'vinyl' ) . '" target="' . __( '_blank', 'vinyl' ) . '"></a></span>'; ?>
					</p>
				</div>
			</div>

		<?php
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['imageurl'] = $new_instance['imageurl'];
		$instance['imagealt'] = $new_instance['imagealt'];
		$instance['imagewidth'] = $new_instance['imagewidth'];
		$instance['imageheight'] = $new_instance['imageheight'];
		$instance['aboutdescription'] = $new_instance['aboutdescription'];
		$instance['feed'] = $new_instance['feed'];
		$instance['email'] = $new_instance['email'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['bloglovin'] = $new_instance['bloglovin'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['dribbble'] = $new_instance['dribbble'];
		$instance['behance'] = $new_instance['behance'];
		$instance['github'] = $new_instance['github'];
		$instance['skype'] = $new_instance['skype'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['wordpress'] = $new_instance['wordpress'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'About Me', 
						'imageurl' => 'http://...', 
						'imagealt' => '',  
						'imagewidth' => '230', 
						'imageheight' => '230',
						'aboutdescription' => '',
						'feed' => 'http://www.website.com/feed/',
						'email' => '',
						'linkedin' => '',
						'bloglovin' => '',
						'twitter' => '',
						'facebook' => '',
						'googleplus' => '',
						'pinterest' => '',
						'instagram' => '',
						'flickr' => '',
						'youtube' => '',
						'vimeo' => '',
						'dribbble' => '',
						'behance' => '',
						'github' => '',
						'skype' => '',
						'tumblr' => '',
						'tumblr' => ''
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imageurl' ); ?>"><?php _e('Image URL:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imageurl' ); ?>" name="<?php echo $this->get_field_name( 'imageurl' ); ?>" value="<?php echo $instance['imageurl']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imagealt' ); ?>"><?php _e('Image ALT:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imagealt' ); ?>" name="<?php echo $this->get_field_name( 'imagealt' ); ?>" value="<?php echo $instance['imagealt']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imagewidth' ); ?>"><?php _e('Image Width:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imagewidth' ); ?>" name="<?php echo $this->get_field_name( 'imagewidth' ); ?>" value="<?php echo $instance['imagewidth']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imageheight' ); ?>"><?php _e('Image Height:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imageheight' ); ?>" name="<?php echo $this->get_field_name( 'imageheight' ); ?>" value="<?php echo $instance['imageheight']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'aboutdescription' ); ?>"><?php _e('About Description:','vinyl'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'aboutdescription' ); ?>" name="<?php echo $this->get_field_name( 'aboutdescription' ); ?>" rows="12" cols="20" style="width:100%;"><?php echo $instance['aboutdescription']; ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e('Feed:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" value="<?php echo $instance['feed']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('Email:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'bloglovin' ); ?>"><?php _e('Bloglovin:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'bloglovin' ); ?>" name="<?php echo $this->get_field_name( 'bloglovin' ); ?>" value="<?php echo $instance['bloglovin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Googleplus:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e('Github:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo $instance['github']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress:','vinyl'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function register_about_vinyl() {
    register_widget( 'about_vinyl' );
}
add_action( 'widgets_init', 'register_about_vinyl' );