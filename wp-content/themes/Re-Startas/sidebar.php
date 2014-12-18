<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary">
		
		
		
		<?php //---------------Patarimai(PAT) Sidebar----------------------?>
		<?php if((get_the_ID()==PAT1)||(get_the_ID()==PAT2)||(get_the_ID()==PAT3)||(get_the_ID()==PAT4)||(get_the_ID()==PAT5)):?>

		<div class="PATSidebarForma">
		<img src="wp-content/themes/Re-Startas/images/PAT/PATS_ikona.png">
		<p class="PATSidebarAntraste">Pagalbinis meniu</p>
		<div class="PATSidebarLinija"></div>
<?php
PATSidebarText(get_the_ID());
?>
</div>		
		
		
<?php //---------------DUK Sidebar----------------------?>
		<?php elseif((get_the_ID()==DUK1)||(get_the_ID()==DUK2)||(get_the_ID()==DUK3)||(get_the_ID()==DUK4)||(get_the_ID()==DUK5)):?>

		<?php /*<div class="DUKSidebarForma">
		<img src="wp-content/themes/Re-Startas/images/DUK/DUKS_ikona.png">
		<p class="DUKSidebarAntraste">Pagalbinis meniu</p>
		<div class="DUKSidebarLinija"></div>
		*/?>
<?php
//DUKSidebarText(get_the_ID()); 
//naikinamas soninis meniu, mes jo aisku nenaikinsim
//bet tiesiog nerodysim, o gali buti kad pacios kategorijos bus istrintos
//tai jei kas nors cia skaito, tai zinokit reikia nurodyti naujos kategorijos id


//</div>
		
		
		?>
	<?php //----------------ApieMus-------------------------------?>
<?php elseif(get_the_ID()==ApieMus):?>		
		<div class="Kainos">
		<img src="wp-content/themes/Re-Startas/images/Kainos/Kain_ikona.png">
		<p class="KainosHeader">Taisymo kainos</p>
		<div class="KainosLinija"></div>
		<p class="KainosTekstas">


    
    
     
     
     
• Gedimo nustatymas – <span style="color:#d50200; font-weight:bold;">NEMOKAMAI</span><br>
• Windows perrašymas: –<span style="font-weight:bold;"> 70 lt. </span><br>
• Matricos keitimas:<span style="font-weight:bold;"> 250 – 350 lt</span><br>
• Neįsijungiančių, daužtų nešiojamųjų kompiuterių remontas:<span style="font-weight:bold;">  nuo 50 iki 400 lt</span><br>
• Pakrovėjų remontas, keičiant arba taisant kištuką: 
<span style="font-weight:bold;">40 lt</span><br>
• Sulūžusio krovimo lizdo remontas:<span style="font-weight:bold;">  iki 150 lt</span><br>
• Apipiltų kompiuterių plovimas ir džiovinimas:<span style="font-weight:bold;">  nuo 70 lt iki 100 lt</span><br>
<br>
<span style="font-weight:bold;">
Naudojame tik legalias programas.<br>
Visiems darbams yra suteikiama garantija.<br>
		</span>
		</p>
		</div>
		<?php endif;?>
		
		
		<div class="facebook">
		<div class="FacebookHeader">
		<img src='/wp-content/themes/Re-Startas/images/facebook.png'><p>			Mes Facebook'e			</p>
		</div>
		
		<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<fb:like-box href="http://www.facebook.com/pages/Re-Startas/192070010860103" width="317" height="270" show_faces="false" stream="true" header="false"></fb:like-box>
		
		
		</div>
		
		
		
		
		
		
		
		
		</div><!-- #primary .widget-area -->


