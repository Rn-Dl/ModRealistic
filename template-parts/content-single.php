<?php
/**
 * Template part for displaying single posts.
 *
 * @package ModRealistic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col'); ?>>
	<div class="breadcrumb mdl-color-text--grey-500 mdl-cell mdl-cell--12-col" xmlns:v="http://rdf.data-vocabulary.org/#"><?php realistic_breadcrumb(); ?></div>   
	<header class="entry-header mdl-cell mdl-cell--12-col">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php realistic_post_meta(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content mdl-cell mdl-cell--12-col">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'modrealistic' ),
				'after'  => '</div>',
			) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php realistic_related_posts(); ?>
<?php realistic_next_prev_post(); ?>
<?php realistic_author_box(); ?> 
