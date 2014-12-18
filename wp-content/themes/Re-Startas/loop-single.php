<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



				

				<div class="PostForma" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="PostAntraste"><?php the_title(); ?></h1>


					<div class="PostTekstas">
						<?php the_content(); ?>

						
					</div><!-- .entry-content -->




				</div><!-- #post-## -->
<div class="clear"> </div>

<?php endwhile; // end of the loop. ?>