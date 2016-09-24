<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Realistic
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header id="masthead" class="site-header mdl-layout__header" role="banner">
		<div class="site-branding mdl-layout__header-row">
			<span class="site-title mdl-layout-title">
				<?php realistic_logo(); ?>
			</span>

			<span class="site-tagline" style="display: none;"><?php bloginfo( 'description' ); ?></span>

			<div class="mdl-layout-spacer"></div>

			<nav id="site-navigation" class="main-navigation mdl-navigation mdl-layout--large-screen-only" role="navigation">
				<?php if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => '' ) );
				}else { 
					if ( current_user_can( 'edit_theme_options' ) ) { ?>
						<div class="no-menu-msg"><a href="<?php echo get_site_url() .'/wp-admin/nav-menus.php'; ?>"><?php _e('Add Menu', 'realistic'); ?></a></div>
					<?php } else { ?>
						<div class="no-menu-msg"><?php _e('Go to Appearance => Menus and assign a Menu to this location.', 'realistic'); ?></div>
					<?php }
				} ?>
			</nav>

			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width is-upgraded">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="search-form mdl-textfield__expandable-holder">
                        <input class="search-field mdl-textfield__input" type="search" id="search-field" name="s" value="">
                    </div>
				</div>
			</form>

		</div>
	</header>

	<div class="mdl-layout__drawer">
			<nav id="site-navigation" class="mobile-navigation mdl-navigation" role="navigation">
			<?php if ( has_nav_menu( 'mobile-menu' ) ) {
				wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu', 'container' => '' ) ); 
			}else { 
				if ( current_user_can( 'edit_theme_options' ) ) { ?>
					<div class="no-menu-msg"><a href="<?php echo get_site_url() .'/wp-admin/nav-menus.php'; ?>"><?php _e('Add Menu', 'realistic'); ?></a></div>
				<?php } else { ?>
					<div class="no-menu-msg"><?php _e('Go to Appearance => Menus and assign a Menu to this location.', 'realistic'); ?></div>
				<?php }
			} ?>
		</nav><!-- #site-navigation -->
	</div>
	<div id="content" class="site-content mdl-layout__content mdl-grid">