<?php
/*
Plugin Name: Hipster Theme Shortcodes
Plugin URI:  http://hipstertheme.com/plugins/shortcodes
Description: This plugin is for Hipster Themes. It offers columns, alerts, dropcap, icons, dividers, archives, etc...
Version:     1.0
Author:      Hipster Theme
Author URI:  http://hipstertheme.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hipstertheme-shortcodes
*/

/**
 * Add stylesheet to the page
 */
function ht_add_stylesheet() {
	wp_enqueue_style( 'ht-style', plugins_url('style.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'ht_add_stylesheet' );

/**
 * Remove <p></p> before and after the shortcode
 *
 * @since ht 1.0
 */
function shortcode_empty_paragraph_fix($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );

    $content = strtr($content, $array);

    return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');

/**
 * Dropcap
 *
 * @since ht 1.0
 */
function ht_dropcap_shortcode( $atts, $content = null ) {
	return '<span class="dropcap">' . $content . '</span>';
}
add_shortcode( 'dropcap', 'ht_dropcap_shortcode' );

/**
 * Columns
 *
 * @since ht 1.0
 */
function ht_columns() {
	add_shortcode('row-start', 'ht_row_start');
	add_shortcode('row-end', 'ht_row_end');
	add_shortcode('half', 'ht_half');
	add_shortcode('one-third', 'ht_one_third');
	add_shortcode('two-thirds', 'ht_two_thirds');
	add_shortcode('one-fourth', 'ht_one_fourth');
	add_shortcode('three-fourths', 'ht_three_fourths');
	add_shortcode('one-fifth', 'ht_one_fifth');
	add_shortcode('four-fifths', 'ht_four_fifths');
	add_shortcode('one-sixth', 'ht_one_sixth');
	add_shortcode('five-sixths', 'ht_five_sixths');
}
add_action( 'wp_head', 'ht_columns' );

function ht_row_start( $atts ) {
	return '<div class="row-shortcode clear">';
}

function ht_row_end( $atts ) {
	return '</div>';
}

function ht_half( $atts, $content = null ) {
	return '<div class="column half">' . do_shortcode($content) . '</div>';
}

function ht_one_third( $atts, $content = null ) {
	return '<div class="column third">' . do_shortcode($content) . '</div>';
}

function ht_two_thirds( $atts, $content = null ) {
	return '<div class="column two-thirds">' . do_shortcode($content) . '</div>';
}

function ht_one_fourth( $atts, $content = null ) {
	return '<div class="column fourth">' . do_shortcode($content) . '</div>';
}

function ht_three_fourths( $atts, $content = null ) {
	return '<div class="column three-fourths">' . do_shortcode($content) . '</div>';
}

function ht_one_fifth( $atts, $content = null ) {
	return '<div class="column fifth">' . do_shortcode($content) . '</div>';
}

function ht_four_fifths( $atts, $content = null ) {
	return '<div class="column four-fifths">' . do_shortcode($content) . '</div>';
}

function ht_one_sixth( $atts, $content = null ) {
	return '<div class="column sixth">' . do_shortcode($content) . '</div>';
}

function ht_five_sixths( $atts, $content = null ) {
	return '<div class="column five-sixths">' . do_shortcode($content) . '</div>';
}

/**
 * Buttons
 *
 * @since ht 1.0
 */
function ht_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'target' => '_self',
		'color' => 'grey',
		'size' => 'small',
		'type' => 'square',
		'display' => '',
		'title' => '',
		'class' => '',
		'rel' => ''
    ), $atts));
	
   return '<a target="'.$target.'" class="button '.$size.' '.$color.' '. $type .' '. $class .' '. $display .'" href="'.$url.'" title="' . $title . '" rel="' . $rel . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'ht_button');

/**
 * Alerts
 *
 * @since ht 1.0
 */
function ht_alert( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color' => 'grey',
		'type' => 'square',
		'text_align' => 'center',
		'width' => '100%'
    ), $atts));
	
   return '<div class="alert '.$color.' '. $type .' '. $text_align .'" style="width:'.$width.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('alert', 'ht_alert');

/**
 * Icons
 *
 * @since ht 1.0
 */
function ht_icon( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'type' => '',
		'size' => '32px'
    ), $atts));
	
   return '<span class="genericon genericon-'.$type.'" style="font-size:'.$size.'; width:'.$size.'; height:'.$size.';">' . do_shortcode($content) . '</span>';
}
add_shortcode('icon', 'ht_icon');

/**
 * Highlights
 *
 * @since ht 1.0
 */
function ht_highlight( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color'	=> 'grey',
		'class'	=> ''
	  ), $atts ));
	  return '<span class="highlight ' . $color . ' ' . $class . '">' . do_shortcode($content) . '</span>';

}
add_shortcode('highlight', 'ht_highlight');

/**
 * Dividers
 *
 * @since ht 1.0
 */
function ht_divider( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color'	=> 'grey',
		'type'	=> 'solid',
		'width'	=> '100%',
		'class'	=> ''
	  ), $atts ));
	  return '<hr class="divider ' . $color . ' ' . $type . ' ' . $class . '" style="width:'.$width.';">' . do_shortcode($content) . '</span>';

}
add_shortcode('divider', 'ht_divider');

/**
 * Archive
 *
 * @since ht 1.0
 */
function ht_archive_shortcode($atts, $content = null){
   	
   	extract(shortcode_atts(
   		array(
			'posts' => '',
			'cat' => '',
			'tag' => '',
			'orderby' => '',
			'order' => ''
		), 
	$atts));

	$loop = new WP_Query(
		array( 
			'orderby' => $orderby,
			'order' => $order, 
			'showposts' => $posts, 
			'category_name' => $cat,
			'tag' => $tag
		)
	);

	$list = '<h3 class="shortcode-content">' . $content . '</h3><ul class="shortcode-archive">';

	if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post();

	$list .= '<li><span class="shortcode-archive-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></span><span class="shortcode-date">' . get_the_date() . '</span></li>';

	endwhile;
	
	wp_reset_query();
	
	return $list . '</ul>';

	endif;

}
add_shortcode('archive', 'ht_archive_shortcode');
?>
