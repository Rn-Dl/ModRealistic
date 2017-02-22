<?php
/**
 * Template part for displaying posts.
 *
 * @package ModRealistic
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-box mdl-card mdl-shadow--2dp mdl-grid mdl-cell mdl-cell--12-col'); ?>>
		<?php if ( is_sticky() ) {
			echo '<div class="featured"><i class="icon icon-star"></i></div>';
		} ?>	
		<div class="post-data mdlmod-cell mdl-cell--4-col-tablet mdl-cell--4-col-phone">
		
			<?php if ( current_user_can( 'edit_posts' ) ) { ?>
				<button id="post-actions<?php the_ID(); ?>" class="post-actions mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">more_vert</i>
				</button>	
				<ul class="post-actions-menu mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="post-actions<?php the_ID(); ?>">
					<?php edit_post_link( __( 'Edit', 'modrealistic' ), '<li class="mdl-menu__item">', '</li>'); ?>
					<?php $post_type = get_post_type($post);
					$delLink = wp_nonce_url( admin_url() . "post.php?post=" . $post->ID . "&action=delete", 'delete-' . $post_type . '_' . $post->ID); ?>
					<li class="mdl-menu__item">
						<a href="<?php echo $delLink; ?>"><?php _e( 'Delete', 'modrealistic' ); ?></a>
					</li>
				</ul>
			<?php }
	
			the_title( sprintf( '<h2 class="entry-title post-title mdl-card__title-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
			<?php realistic_archives_meta(); ?>
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Read more %s <span class="meta-nav">&rarr;</span>', 'modrealistic' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
			</div><!-- .entry-content -->
			<div class="entry-footer">
				<?php modrealistic_leave_comments(); ?>
			</div><!-- .entry-footer -->
		</div><!-- .post-data -->
	</article><!-- #post-## -->