<?php
include('TemosFunkcijos.php');
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta property="fb:admins" content="{100002547071196}"/>
					<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/lt_LT/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>




 <script type="text/javascript" src="jquery.js"></script>          

<link rel="icon" href="http://re-startas.lt/wp-content/themes/Re-Startas/images/Favicon/favicon.ico" type="image/x-icon"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php if(ArTitulinis(get_the_ID())){

KoksTitulinis(get_the_id());




}
else{

	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo "  $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
}
	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="/wp-content/themes/Re-Startas/JavaScriptUp.js">
</script>
<!--- Google Analytics --->
<script type="text/javascript">

 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-25869840-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();

</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28105299-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?> onLoad=bodyInit()>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			
				
				

				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" usemap="#LogoLink" />
						
						<map name="LogoLink">
						<area shape="rect" href="http://re-startas.lt" coords="80,0,305,110" title="Re-Startas">
						</map>
					<?php endif; ?>

<?php	
$dabar1=$post->ID;

MeniuSistema($dabar1);

?>

	
<form role="search" method="get" id="searchform" action="http://re-startas.lt/" >
<div class="paieska">
	<input type="text" value="Ieškoti..." name="s" id="s" OnClick=PaieskaTuscia() />
	<input type="submit" id="searchsubmit" value="" />
	</div>
	</form>




			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
