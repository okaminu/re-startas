<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php if(!ArTema(get_the_ID())):?>
<?php//----------Standartinis POST Stilius----------------?>
		
<div class="PostForma" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="PostAntraste"><?php the_title(); ?></h1>


					<div class="PostTekstas">
						<?php the_content(); ?>
<br><br>
						
					</div><!-- .entry-content -->




				</div><!-- #post-## -->
<div class="clear"> </div>
				
			<?php else:?>
<?php//--------ReStart POST Stilius(skirtingas)----------------?>

            <div class="PostHeader">
			<?php post_icon(get_the_ID()); ?>
			<?php the_title();?>
			</div>
			
			<?php if(get_the_ID()==Klausimai):?>
			
			<br>
					<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/lt_LT/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<fb:comments href="http://re-startas.lt/?page_id=19" num_posts="10" width="530"></fb:comments>
					
					
					
					
					
		
	
					
					
			<?php//----------Patarimai(PAT) Kategorija-----------------?>
			<?php elseif((get_the_ID()==PAT1)||(get_the_ID()==PAT2)||(get_the_ID()==PAT3)||(get_the_ID()==PAT4)||(get_the_ID()==PAT5)):?>
						
			<?php
			
		    $Nuo=0;
			$Iki=0;
			$puslapis=0;
		     if($_GET["page"]==null){
			 $Nuo=1;
			 $Iki=PslPAT;
			 $puslapis=1;
			 }
			 else
			 {
			 $Iki=$_GET["page"]*PslPAT;
			 $Nuo=$Iki-PslPAT;
			 $Nuo++;
			 $puslapis=$_GET["page"];
			 }
		    $uzklausa=array('category' => PAT_IDtoKAT(get_the_ID()), 'order' => 'DESC', 'numberposts' => MAX_POSTS_PER_PAGE);
			
			$postai=get_posts($uzklausa);
			
			$eile=0;
			$eileDisplay=0;
			foreach($postai as $postas):
			$eile++;
			?>
			<?php if(($eile>=$Nuo)&&($eile<=$Iki)): $eileDisplay++;?>
		    <div class="PATForma">
			<p class="PATAntraste"><?php echo $postas->post_title;?></p>
			<p class="PATTekstas"><?php echo $postas->post_excerpt;?></p>
			
			<a class="post_linkasPAT" href=<?php echo $postas->guid;?>>
		    Skaityti daugiau</a>
		    </div>
			

<?php endif;?>
			<?php endforeach; ?>

			<div class="clear"></div>

			<?php if($eile>$Iki):?>
			<a class="next" href="http://re-startas.lt/?page_id=<?php echo get_the_ID();?>&page=<?php echo $puslapis+1;?>">Sekantis</a>
			<?php endif;?>

			<a class="middle">-- <?php echo $puslapis; ?> --</a>
			
            <?php if($puslapis!=1): ?>			
			<a class="previous" href="http://re-startas.lt/?page_id=<?php echo get_the_ID();?>&page=<?php echo $puslapis-1;?>">Praeitas</a>				
			<?php endif;?>			
			<div class="clear"></div>
			

			<?php//----------DUK Kategorija-----------------?>
			<?php elseif((get_the_ID()==DUK1)||(get_the_ID()==DUK2)||(get_the_ID()==DUK3)||(get_the_ID()==DUK4)||(get_the_ID()==DUK5)):?>
						
			<?php
			$Nuo=0;
			$Iki=0;
			$puslapis=0;
		     if($_GET["page"]==null){
			 $Nuo=1;
			 $Iki=PslDUK;
			 $puslapis=1;
			 }
			 else
			 {
			 $Iki=$_GET["page"]*PslDUK;
			 $Nuo=$Iki-PslDUK;
			 $Nuo++;
			 $puslapis=$_GET["page"];
			 }
		
		
		    $uzklausa=array('category' => DUK_IDtoKAT(get_the_ID()), 'order' => 'DESC', 'numberposts' => MAX_POSTS_PER_PAGE);
			
			$postai=get_posts($uzklausa);
			
			$eile=0;
			$eileDisplay=0;
			foreach($postai as $postas):
			$eile++;
			?>
				
			<?php if(($eile>=$Nuo)&&($eile<=$Iki)): $eileDisplay++;?>
		    <div class="DUKForma">
			<p class="DUKKlausimas"><?php echo $postas->post_title;?></p>
			<p class="DUKNumeris"><?php echo $eileDisplay;?></p>
			<p class="DUKAtsakymas"><?php echo $postas->post_content;?></p>
			</div>
			<?php endif;?>
			
			
			
			
			<?php endforeach; ?>
			
			<div class="clear"></div>
			<?php if($eile>$Iki):?>
			<a class="next" href="http://re-startas.lt/?page_id=<?php echo get_the_ID();?>&page=<?php echo $puslapis+1;?>">Sekantis</a>
			<?php endif;?>

			<a class="middle">-- <?php echo $puslapis; ?> --</a>
			
            <?php if($puslapis!=1): ?>			
			<a class="previous" href="http://re-startas.lt/?page_id=<?php echo get_the_ID();?>&page=<?php echo $puslapis-1;?>">Praeitas</a>				
			<?php endif;?>
			<div class="clear"></div>
			
			
		<?php//-------------Kainorastis Kategorija---------------------?>
			<?php elseif(get_the_ID()==Kainorastis):?>
			
			<?php 
			$uzklausa=array('category' => KATKainorastis, 'order' => 'ASC');
			$postai=get_posts($uzklausa);
			
			foreach($postai as $postas):?>
			<div class="TaisymoKainos">
			<p class="TaisymoKainosAntraste">
			<?php echo $postas->post_title; ?>
			</p>
			
			<p class="TaisymoKainosTekstas">
			<?php echo $postas->post_content; ?>
			</p>
			</div>
			
			
			<?php endforeach;	?>
			
			

			
			
    <?php//---------------Apie Mus Kategorija---------------------------?>	
    <?php elseif(get_the_ID()==ApieMus):?>

	<div id="PaslaugosForma">
			<div id="PaslaugosAntraste">


             <?//---Paslaugu meniu antrastes---?>
			<?php for($i=1; $i<=5; $i++):?>
			
			<a id='Pasl<?php echo $i;?>Ant' class=<?php PaslAktyvus($i); ?> onmousedown="return false;" onselectstart="return false;" OnClick="AktyvuotiPaslauga('Pasl<?php echo $i;?>', false)">
			<?php PaslaugosAntraste($i);?></a>
			
			<?php endfor; ?>
			</div>
			<?php //----Paslaugu Meniu Aprasymai---?>
			
			
			<?php for($i=1; $i<=5; $i++):?>
			<div id='Pasl<?php echo $i;?>Apr' class="PaslaugosAprasymas">
			<?php PaslaugosAprasymas($i); ?></div>	
			<?php endfor;?>
			
			</div>
			<?php//uzdaroma Aprasymo forma?>
			
			<?php //Vieta ir Seip tekstas?>
		<div class="vieta">
		<span id="antraste">Mus galite rasti<br></span>
		<div id="aprasymas">Kauno hyper MAXIMA, infoterminale<br>Mob. tel. +370 603 62242 &nbsp&nbsp <span style="color:#d50200;">Darbo laikas: I-VII, 10:00 - 21:00</span></div>
		</div>
			
		<!---<p id="tekstas">	
		</p>--->
			
		
		<?php   
		$uzklausa=array('category' => 11, 'order' => 'DESC', 'numberposts' => 1);
			
			$postai=get_posts($uzklausa);
			

			foreach($postai as $postas):

			?>
						
		    <div class="ApieForma">
			<p class="ApieAntraste"><?php echo $postas->post_title;?></p>
			<p class="ApieTekstas"><?php echo $postas->post_excerpt;?></p>

		    </div>
			
			<?php endforeach; ?>
		
		
		
		<?php //ApieMusStraipsniai();?>
		<?php else:?>
		<br>
		<?php the_content();?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php endif;?>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
<?php//--------ReStart POST Stilius(skirtingas) END----------------?>		
<?php endif;?>

<?php endwhile; // end of the loop. ?>