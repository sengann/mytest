<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package xMag
 * @since xMag 1.0
 */
?>
		
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="footer widget-area" role="complementary">
			<div class="container">
				<div class="row">
					<div class="col-4" id="footer-area-left">
						<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
							<?php dynamic_sidebar( 'footer-1' ); ?>
						<?php endif; // end footer widget area left ?>
					</div>	
					<div class="col-4" id="footer-area-center">
						<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-2' ); ?>
						<?php endif; // end footer widget area center ?>
					</div>
					<div class="col-4" id="footer-area-right">
						<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
							<?php dynamic_sidebar( 'footer-3' ); ?>
						<?php endif; // end footer widget area right ?>
					</div>
				</div><!-- .row -->
			</div>
		</div>
		
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="site-info">
							<?php xmag_credits(); ?>
							<span class="sep">/</span>
							<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'xmag' ) ); ?>"><?php printf( __( 'Powered by %s', 'xmag' ), 'WordPress' ); ?></a>
							<span class="sep"> / </span>
							<a href="<?php echo esc_url( __( 'http://www.designlabthemes.com/', 'xmag' ) ); ?>"><?php printf( __( 'Theme by %s', 'xmag' ), 'Design Lab' ); ?></a>
						</div>
					</div>
					<div class="col-6">
						<?php if ( has_nav_menu( 'footer_navigation' ) ) { ?>
							<?php wp_nav_menu( array( 'theme_location' => 'footer_navigation', 'menu_class' => 'footer-menu', 'container_class' => 'footer-navigation', 'depth' => 1 ) ); ?>
						<?php } ?>
					</div>
				</div><!-- .row -->
			</div>
		</div>
	</footer><!-- #colophon -->
	
	<?php if ( get_theme_mod('xmag_scroll_up') ) { ?>
		<a href="#masthead" id="scroll-up"><span class="icon-arrow-up"></span></a>
	<?php } ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23103560-1', 'auto');
  ga('send', 'pageview');

</script>



<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "141897",
    domain : "n.ads3-adnow.com"
  });
</script>
<script type="text/javascript" src="//st-n.ads3-adnow.com/js/adv_out.js"></script>

</body>
</html>