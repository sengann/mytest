<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skacero Pro
 */

$image_full_featured = get_theme_mod( 'article_image_display', 'image_full_featured' );
$image_smallfeatured = get_theme_mod( 'article_image_display', 'image_smallfeatured' );
?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
	<div class="somkhan-fb">	
		<div class="fb-like" data-href="<?php echo wp_get_attachment_url();?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
</div>

<br/>
<!--Audience Network-->
<div style="display:none; position: relative;">
  <iframe style="display:none;"></iframe>
  <script type="text/javascript">
    var data = {
      placementid: '274313959617403_274348476280618',
      format: '300x250',
      testmode: false,
      onAdLoaded: function(element) {
        console.log('Audience Network ad loaded');
        element.style.display = 'block';
      },
      onAdError: function(errorCode, errorMessage) {
        console.log('Audience Network error (' + errorCode + ') ' + errorMessage);
      }
    };
    (function(w,l,d,t){var a=t();var b=d.currentScript||(function(){var c=d.getElementsByTagName('script');return c[c.length-1];})();var e=b.parentElement;e.dataset.placementid=data.placementid;var f=function(v){try{return v.document.referrer;}catch(e){}return'';};var g=function(h){var i=h.indexOf('/',h.indexOf('://')+3);if(i===-1){return h;}return h.substring(0,i);};var j=[l.href];var k=false;var m=false;if(w!==w.parent){var n;var o=w;while(o!==n){var h;try{m=m||(o.$sf&&o.$sf.ext);h=o.location.href;}catch(e){k=true;}j.push(h||f(n));n=o;o=o.parent;}}var p=l.ancestorOrigins;if(p){if(p.length>0){data.domain=p[p.length-1];}else{data.domain=g(j[j.length-1]);}}data.url=j[j.length-1];data.channel=g(j[0]);data.width=screen.width;data.height=screen.height;data.pixelratio=w.devicePixelRatio;data.placementindex=w.ADNW&&w.ADNW.Ads?w.ADNW.Ads.length:0;data.crossdomain=k;data.safeframe=!!m;var q={};q.iframe=e.firstElementChild;var r='https://www.facebook.com/audiencenetwork/web/?sdk=5.3';for(var s in data){q[s]=data[s];if(typeof(data[s])!=='function'){r+='&'+s+'='+encodeURIComponent(data[s]);}}q.iframe.src=r;q.tagJsInitTime=a;q.rootElement=e;q.events=[];w.addEventListener('message',function(u){if(u.source!==q.iframe.contentWindow){return;}u.data.receivedTimestamp=t();if(this.sdkEventHandler){this.sdkEventHandler(u.data);}else{this.events.push(u.data);}}.bind(q),false);q.tagJsIframeAppendedTime=t();w.ADNW=w.ADNW||{};w.ADNW.Ads=w.ADNW.Ads||[];w.ADNW.Ads.push(q);w.ADNW.init&&w.ADNW.init(q);})(window,location,document,Date.now||function(){return+new Date;});
  </script>
  <script type="text/javascript" src="https://connect.facebook.net/en_US/fbadnw.js" async></script>
</div>

<!-- End Audience Network-->
 <b>Cambodian musicians:</b></br>
Sinn Sisamouth (1953–1975), The Father of Modern Khmer Music, King of Khmer Music,
Ros Sereysothea	(1962–1975), Pan Ron (	1963–1975 ), So Savoeun	(1960s–1970s), Huoy Meas (1960s–1970s)		
Chea Saren ( 1950s–unknown ), In Yeng, Sos Math, Keo Sarath, Has Salan, Meas Samon ...		
</p>
<!--FB Audience -->
<div style="display:none; position: relative;">
  <iframe style="display:none;"></iframe>
  <script type="text/javascript">
    var data = {
      placementid: '274313959617403_274314636284002',
      format: '300x250',
      testmode: false,
      onAdLoaded: function(element) {
        console.log('Audience Network ad loaded');
        element.style.display = 'block';
      },
      onAdError: function(errorCode, errorMessage) {
        console.log('Audience Network error (' + errorCode + ') ' + errorMessage);
      }
    };
    (function(w,l,d,t){var a=t();var b=d.currentScript||(function(){var c=d.getElementsByTagName('script');return c[c.length-1];})();var e=b.parentElement;e.dataset.placementid=data.placementid;var f=function(v){try{return v.document.referrer;}catch(e){}return'';};var g=function(h){var i=h.indexOf('/',h.indexOf('://')+3);if(i===-1){return h;}return h.substring(0,i);};var j=[l.href];var k=false;var m=false;if(w!==w.parent){var n;var o=w;while(o!==n){var h;try{m=m||(o.$sf&&o.$sf.ext);h=o.location.href;}catch(e){k=true;}j.push(h||f(n));n=o;o=o.parent;}}var p=l.ancestorOrigins;if(p){if(p.length>0){data.domain=p[p.length-1];}else{data.domain=g(j[j.length-1]);}}data.url=j[j.length-1];data.channel=g(j[0]);data.width=screen.width;data.height=screen.height;data.pixelratio=w.devicePixelRatio;data.placementindex=w.ADNW&&w.ADNW.Ads?w.ADNW.Ads.length:0;data.crossdomain=k;data.safeframe=!!m;var q={};q.iframe=e.firstElementChild;var r='https://www.facebook.com/audiencenetwork/web/?sdk=5.3';for(var s in data){q[s]=data[s];if(typeof(data[s])!=='function'){r+='&'+s+'='+encodeURIComponent(data[s]);}}q.iframe.src=r;q.tagJsInitTime=a;q.rootElement=e;q.events=[];w.addEventListener('message',function(u){if(u.source!==q.iframe.contentWindow){return;}u.data.receivedTimestamp=t();if(this.sdkEventHandler){this.sdkEventHandler(u.data);}else{this.events.push(u.data);}}.bind(q),false);q.tagJsIframeAppendedTime=t();w.ADNW=w.ADNW||{};w.ADNW.Ads=w.ADNW.Ads||[];w.ADNW.Ads.push(q);w.ADNW.init&&w.ADNW.init(q);})(window,location,document,Date.now||function(){return+new Date;});
  </script>
  <script type="text/javascript" src="https://connect.facebook.net/en_US/fbadnw.js" async></script>
</div>


<!-- End FB Audience-->
<article id="post-<?php the_ID(); ?>" <?php post_class('hentry-content'); ?>>

<?php if ( get_theme_mod('featured_image_hide') != 'off' ) { ?>
	<header class="entry-header">

	
		<?php if (  $image_full_featured && $image_full_featured === 'image_full_featured' ) { ?>
			<div class="post-image"><!--Featured Image-->
				<?php if ( has_post_thumbnail() ) : ?>
					<?php //the_post_thumbnail('big'); ?>
				<?php endif; ?>
			</div>
		
		
		
		
		<div class="entry-meta">
			<?php //skacero_pro_post_meta(); ?>
		</div><!-- .entry-meta -->
		<?php } else { ?>
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="entry-meta">
			<?php skacero_pro_post_meta(); ?>
		</div><!-- .entry-meta -->
		<?php// if ( $image_smallfeatured && $image_smallfeatured === 'image_smallfeatured' ) { ?>
			<div class="post-image" style="float: left; width: 50%; padding: 20px 10px 5px 0;">		<!--Featured Image-->
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</div>
		<?php } ?>
		
	</header><!-- .entry-header -->
<?php } else { ?>
	<header class="entry-header">
		

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php //skacero_pro_post_meta(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skacero-pro' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<blockquote>
sisamut.com will try our best to find the classic, romantic, sweet and love song for your entertainment. 
Especially our goldend voice, Sinn Sisamuth, The king of khmer song.
</blockquote>

<div id="SC_TBlock_141897" class="SC_TBlock">loading...</div> 

<p>
Sinn Sisamouth ( 23 August 1932 – 18 June 1976) was a famed and extremely prolific Cambodian singer-songwriter from the 1950s to the 1970s.
Widely thought of the "King of Khmer music," Sin Sisamouth, at the side of Ros Sereysothea, Pan Ron, Mao Sareth and alternative Khmer artists, was a part of a thriving pop scene in Pnom Penh that mingling components of Khmer ancient music with the sounds of rhythm and blues and rock and roll to create a Westernized sound appreciate psychedelic or garage rock. Sisamouth died throughout the Communist Party of Kampuchea regime underneath circumstances that are unclear.
</p>



	<div class="entry-tags">
		<?php skacero_pro_entry_tags(); ?>
	</div><!-- .entry-footer -->
	
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit This Post', 'skacero-pro' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	
		
	<?php 
		if ( get_theme_mod( 'related_posts' ) != 'off' ) { 
			get_template_part('functions/related-posts'); 
		} 
	?>
	
	<nav class="navigation post-navigation" role="navigation">
		<?php skacero_pro_next_prev_post(); ?>
	</nav><!-- .navigation -->
	
	<?php skacero_pro_author_box(); ?>
</article><!-- #post-## -->