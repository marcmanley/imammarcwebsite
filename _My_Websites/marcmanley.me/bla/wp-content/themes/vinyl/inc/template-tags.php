<?php
/**
 * Custom template tags for vinyl
 *
 * @package vinyl
 * @since vinyl 1.0
 */

if ( ! function_exists( 'vinyl_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function vinyl_paging_nav() {
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
	}
    $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );
      if ( isset( $url_parts[1] ) ) {
        wp_parse_str( $url_parts[1], $query_args );
      }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
    $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

    $links = paginate_links( array(
      'base'			=> @add_query_arg( 'paged','%#%' ),
      'format'		=> '?paged=%#%',
      'current'		=> $paged,
      'total'			=> $GLOBALS['wp_query']->max_num_pages,
      'prev_next'	=> true,
      'prev_text'	=> __( 'Previous','vinyl' ),
      'next_text'	=> __( 'Next','vinyl' ),
    ) );
    if ( $links ) :
    ?>
      <nav class="pagination">
        <p><?php echo $links; ?></p>
      </nav>
    <?php endif;
}
endif;

if ( ! function_exists( 'vinyl_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function vinyl_comment( $comment, $args, $depth ) {
	global $post;
	$GLOBALS['comment'] = $comment;

	if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="comment-body">
			<?php _e( 'Pingback:', 'vinyl' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'vinyl' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	<?php else : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body clear<?php if ( '' == get_avatar( $comment ) ) echo ' no-avatar'; ?>">
			<?php if ( '' != get_avatar( $comment ) ) : ?>
			<div class="comment-author vcard">
				<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			</div><!-- .comment-author -->
			<?php endif; ?>

			<div class="comment-content">
				<footer class="comment-meta">
					<div>
						<?php printf( '<cite class="fn">%s</cite>', get_comment_author_link() ); ?>
					</div>
					<div class="comment-meta-details">
						<span class="comment-meta-time"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php comment_time( 'c' ); ?>"><?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'vinyl' ), get_comment_date(), get_comment_time() ); ?></time></a></span>
						<?php
							if ( $comment->user_id === $post->post_author ) {
								echo '<span class="comment-bypostauthor">' . __( 'Author', 'vinyl' ) . '</span>';
							}
						?>
						<?php
							comment_reply_link( array_merge( $args, array(
								'add_below'  => 'div-comment',
								'depth'      => $depth,
								'max_depth'  => $args['max_depth'],
								'before'     => '<span class="reply">',
								'after'      => '</span>',
							) ) );
						?>
						<?php edit_comment_link( __( 'Edit', 'vinyl' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</footer><!-- .comment-meta -->
				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'vinyl' ); ?></p>
				<?php endif; ?>
				<?php comment_text(); ?>
			</div><!-- .comment-content -->
		</article><!-- .comment-body -->

	<?php
	endif;
}
endif; // ends check for vinyl_comment()

if ( ! function_exists( 'vinyl_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function vinyl_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'vinyl' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'vinyl' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'vinyl' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'vinyl_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function vinyl_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	printf( __( '<span class="posted-on">%1$s</span><span class="byline"> - %2$s</span>', 'vinyl' ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/**
 * Flush out the transients used in vinyl_categorized_blog.
 */
function vinyl_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'vinyl_categories' );
}
add_action( 'edit_category', 'vinyl_category_transient_flusher' );
add_action( 'save_post',     'vinyl_category_transient_flusher' );
