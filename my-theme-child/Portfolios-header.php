<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My-Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'my-theme' ); ?></a>
<div class="header-content">
	<header id="masthead" class="site-header">
	<div class="logo-content">
		
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$my_theme_description = get_bloginfo( 'description', 'display' );
			if ( $my_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $my_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</div>
		<div class="nav-content">	
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'my-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		
		</div>
		<div class="search-content">

		<?php get_search_form();
	?>
	</div>
	<!-- #site-navigation -->
			<div class="feature-bar" >

		<div class="feature-box">
			
			<div class="feature-image feature-image-advertismnet"></div>
			<div class="feature-data"> 
	<div class="feature-head">Advertising</div>
				<div class="feature-text">is a long established fact that a readers tebnkbvshfbjdbhsgf </div>
		</div>
	</div>

		<div class="feature-box">
			<div class="feature-image feature-image-media"></div>
			<div class="feature-data"> 
				<div class="feature-head">Multimedia</div>
				<div class="feature-text">is a long established fact that a readers tebnkbvshfbjdbhsgf </div>



			 </div>
		</div>

		<div class="feature-box">
			<div class="feature-image feature-image-photograpy"></div>
			<div class="feature-data"> 
				<div class="feature-head">Photography</div>
				<div class="feature-text">is a long established fact that a readers tebnkbvshfbjdbhsgf </div>

				</div>
	</div>
	</header>
	<?php get_template_part('top');?>



	<!-- #masthead -->
	<div id="content" class="site-content">
		
