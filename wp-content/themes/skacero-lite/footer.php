<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skacero Pro
 */

?>

	</div><!-- #content -->
	
	
	<?php skacero_pro_footer_ads_area(); ?><!--Footer Ads Widget-->
	
	<?php // Footer Columns Area Widgets
			$column = 4;
			if ( get_theme_mod( 'footer_column_widgets' ) != 'off' ) {		
				$column = get_theme_mod( 'footer_column_widgets' );
				if( $column == 1) $class = 'col-md-12 col-sm-6';
				if( $column == 2) $class = 'col-md-6 col-sm-6';
				if( $column == 3) $class = 'col-md-4 col-sm-6';
				if( $column == 4) $class = 'col-md-3 col-sm-4';
				}
				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $column > 0 ) 
		{ ?>		
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="foot-top">
					<?php $i = 0; while ( $i < $column ) { $i++; ?>
						<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
					
							<div class="<?php echo $class; ?>">
								<?php dynamic_sidebar( 'footer-' . $i ); ?>
							</div>
					
						<?php } ?>
					<?php } ?>
				</div>		
			</footer><!-- #colophon -->
		<?php }?>
		
		<?php skacero_pro_copyright(); ?><!--Copyright-->
</div><!-- #page -->


<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79391613-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
var infolinks_pid = 2629110;
var infolinks_wsid = 1;
</script>
<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>



</body>
<script type="text/javascript">var SC_CId = "141897",SC_Domain="n.ads2-adnow.com";SC_Start_141897=(new Date).getTime();</script>
<script type="text/javascript" src="//st-n.ads2-adnow.com/js/adv_out.js"></script>
</html>
