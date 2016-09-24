<?php
/**
 * Template part for displaying single posts.
 *
 * @package ModRealistic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col'); ?>>
	<div class="breadcrumb mdl-color-text--grey-500" xmlns:v="http://rdf.data-vocabulary.org/#"><?php realistic_breadcrumb(); ?></div>   
	<header class="entry-header">
		<?php 
		_e(' in ', 'realistic');
		$category = get_the_category();
		echo '<span class="category"><a class="mdl-button mdl-js-button" href="' . get_category_link( $category[0]->term_id ) . '" title="' . sprintf( __( "View all posts in %s", "realistic" ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a></span>';
		the_title( '<h1 class="entry-title post-title">', '</h1>' ); ?>
		<?php realistic_post_meta(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'realistic' ),
				'after'  => '</div>',
			) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php realistic_related_posts(); ?>
<?php realistic_next_prev_post(); ?>
<?php realistic_author_box(); ?> 