<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sensible-wp 
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

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sensible-wp' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		
    	
    	<div class="grid grid-pad head-overflow menu-principal">
			<div class="site-branding">
				
				<?php if ( get_theme_mod( 'sensiblewp_logo' ) ) : ?>
                
    				<div class="site-logo">
                     
       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'sensiblewp_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', __( '200', 'sensible-wp' ) )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                    
    				</div><!-- site-logo --> 
                    
				<?php else : ?>
                
    				<hgroup>
       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
    				</hgroup>
                    
				<?php endif; ?>
			
            </div><!-- site-branding -->

			<div class="navigation-container">
				<!-- TELEFONE EM CIMA DO MENU -->
					<div class="telefone-menu">
						<p class="telefone-header">43 3321-9136
						<a target="_blank" href="http://facebook.com.br/FuturusContabilidade"><img align="center" height="50px" width="50px" src="<?php echo esc_url( home_url( '/wp-content/uploads/2016/09/facebook_47004-150x150.png' ) ); ?>"> </a>
						</p>
					</div>
				<!-- ************************ -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
                
					<button class="menu-toggle toggle-menu menu-right push-body"><?php _e( '<i class="fa fa-bars"></i> Menu', 'sensible-wp' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
                    
				</nav><!-- #site-navigation -->
        	</div><!-- navigation-container -->
        
        </div><!-- grid -->
    </header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<h3><?php _e( 'Menu', 'sensible-wp' ); ?></h3> 
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
	</nav>

	<section id="content" class="site-content">
