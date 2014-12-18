<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><div class="clear"></div>
	</div><!-- #main -->

	<footer id="Footeris" role="contentinfo">
		<div id="FooterisVidus">

		<?php //---Apie mus---?>
		<div class="FooterHead">
		<img src='/wp-content/themes/Re-Startas/images/Footer/Apie.png'>
		<p>Apie mus<p>
		<div style="position:relative; margin-bottom:14px;"></div>
		
		<div class="FooterLine"></div>
		<a class="FooterText" href="http://re-startas.lt/?page_id=407">• Misija</a>
		<div class="FooterLine"></div>
		<a class="FooterText" href="http://re-startas.lt/?page_id=409">• Vizija</a>
		<div class="FooterLine"></div>
		<a class="FooterText" href="http://re-startas.lt/?page_id=411">• Komanda</a>
		<div class="FooterLine"></div>
		<a class="FooterText" href="http://re-startas.lt/?page_id=413">• Kontaktai</a>
		</div>
		
		<?php //---Draugauk su mumis---?>
		
		<div class="FooterHead">
		<img src='/wp-content/themes/Re-Startas/images/Footer/draugauk.png'>
		<p>Draugauk su mumis<p>
		<div style="position:relative; margin-bottom:14px;"></div>
		
		<div class="FooterLine"></div>
		<img src='/wp-content/themes/Re-Startas/images/Footer/facebook.png' class="FooterSocial">
		<a class="FooterText" href="http://www.facebook.com/pages/Re-Startas/192070010860103">Facebook</a>
		<div class="FooterLine"></div>
		<img src='/wp-content/themes/Re-Startas/images/Footer/twitter.png' class="FooterSocial">
		<a class="FooterText" href="tuscia.html">Twitter</a>
		<div class="FooterLine"></div>
		<img src='/wp-content/themes/Re-Startas/images/Footer/google+.png' class="FooterSocial">
		<a class="FooterText" href="tuscia.html">Google+</a>
		</div>
		
		<?php //---Naujienlaiskis---?>
		<div class="FooterHeadNaujien">
		<img src='/wp-content/themes/Re-Startas/images/Footer/naujien.png'>
		<p>Užsisakyk naujienlaiškį<p>
		<div style="position:relative; margin-bottom:-12px;"></div>
		
				<form action="http://re-startas.lt/wp-comments-post.php" method="post"  >
<div class="NaujienLaiskis">
	<input type="text" value="El, pašto adresas" name="comment" id="s2" OnClick=NaujienTuscia() />
	<input type="submit" id="searchsubmit" value="" />
	<input type='hidden' name='comment_post_ID' value="400" id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
	</div>
	</form>
</div>
		
				<div class="copyright">
		<p>©  2011 Visos teisės saugomos. UAB „Regsita“</p>
		</div>
		<div class="credits">
		<p>Programavimas: AurimasDGT (aurimasdgt@gmail.com)</p>
		</div>
		

		</div><!-- #FooterVidus -->
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
