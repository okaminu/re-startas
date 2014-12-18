<?php
/*
Wordpress temos Re-Startas specialus funkciju rinkinys.
*/
/*---- ApieMus->Paslaugu Page'u Nuorodos----*/
 define("Pasl1", 36);
 define("Pasl2", 43);
 define("Pasl3", 46);
 define("Pasl4", 48);
 define("Pasl5", 50);

/*----Meniu POSTU NUORODOS----*/

 define("ApieMus", 13);
 define("Kainorastis", 15);
 define("DUK1", 17);
 define("DUK2", -1);
 define("DUK3", -1);
 define("DUK4", -1);
 define("DUK5", -1);
 define("Klausimai", 19);
 define("PAT1", 21);
 define("PAT2", 338);
 define("PAT3", 340);
 define("PAT4", -1);
 define("PAT5", 344);
 define("Email", 400);
 define("Misija", 407);
 define("Vizija", 409);
 define("Komanda", 411);
 define("Kontaktai", 413);
 //idejus nauja nari, butina ji itraukti i zemiau esancias funkcijas
 
 
 /*----Kategoriju Nuorodos----*/
 define("KATApieMus", 11);
 define("KATKainorastis", 9);
 define("KATDUK1", 12);
 define("KATDUK2", -1);
 define("KATDUK3", -1);
 define("KATDUK4", -1);
 define("KATDUK5", -1);
 define("KATPAT1", 17);
 define("KATPAT2", 18);
 define("KATPAT3", 19);
 define("KATPAT4", -1);
 define("KATPAT5", 21);

 /*----Postu kiekis puslapije*/
define("MAX_POSTS_PER_PAGE", 100);
define("PslDUK", 9); //nevirsinti 9
define("PslPAT", 5);
 
  /*----Postu kiekis puslapije*/
define("statcionariu", 782);
define("technines", 797);
define("pagrindin", 800);
define("ekranu", 803);
define("operaciniu", 806);
define("virusu", 809);
define("dulkiu", 816);
define("sulietu", 821);
define("rasalin", 825);
define("rasalin2", 827);
define("lazarin", 829);
define("profilakt", 831);
define("konsult", 834);
define("tinklo", 839);
define("konfigur", 841);
define("konsult2", 843);
define("projektor", 847);
define("pagal", 851);
define("superkame", 854);
 //---------Re-Startas Funkcijos-------------------
 
 function KoksTitulinis($id)
 {
 switch($id)
 {
 case ApieMus:
 echo "Kompiuteriu taisykla Kaune,  kompiuteriu remontas Kaune | Re-Startas ";
 break;
 
 case statcionariu:
 echo "Kompiuteriu taisymas Kaune, Kompiuteriu taisykla Kaune | Re-Startas ";
 break;
 
 case technines:
 echo "Kompiuteriu diagnostika Kaune, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case pagrindin:
 echo "Kompiuteriu ploksciu litavimas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case ekranu:
 echo "Kompiuteriu ekranu taisymas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case operaciniu:
 echo "Windows irasymas Kaune, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case virusu:
 echo "Kompiuteriniu virusu salinimas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case dulkiu:
 echo "Profilaktinis dulkiu valymas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case sulietu:
 echo "Sulietu kompiuteriu valymas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case rasalin:
 echo "Spausdintuvu kaseciu pildymas, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case rasalin2:
 echo "Rasaliniu spausdintuvu kaseciu pildymas Kaune | Re-Startas";
 break;
 
 case lazarin:
 echo "Lazeriniu spausdintuvu kaseciu pildymas Kaune | Re-Startas";
 break;
 
 case profilakt:
 echo "Profilaktiniai spausdintuvu valymo darbai Kaune | Re-Startas";
 break;
 
 case konsult:
 echo "Konsultacijos spausdintuvu isigijimo klausimais Kaune | Re-Startas";
 break;
 
 case tinklo:
 echo "Tinklo įrangos konfiguravimas Kaune, Kompiuteriu taisymas | Re-Startas";
 break;
 
 case konfigur:
 echo "Tinklo įrangos konfiguravimas Kaune, Kompiuteriu taisymas | Re-Startas";
 break;
 
 case konsult2:
 echo "Konsultacijos tinklu diegimo klausimais Kaune | Re-Startas";
 break;
 
 case projektor:
 echo "Projektoriu nuoma  Kaune, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case pagal:
 echo "Kompiuteriu remontas namuse, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 case superkame:
 echo "Kompiuteriu supirkimas Kaune, Kompiuteriu taisykla Kaune | Re-Startas";
 break;
 
 default: echo "Klaida";
 break;
 
 
 
 
 
 
 
 
 }
 
 
 
 
 
 }
 
 
 
 
 
 function ArTitulinis($id){

 
if(($id==ApieMus)||($id==statcionariu)||($id==technines)||($id==pagrindin)||($id==ekranu)||($id==operaciniu)
||($id==virusu)||($id==dulkiu)||($id==sulietu)||($id==rasalin)||($id==rasalin2)||($id==lazarin)||($id==profilakt)
||($id==konsult)||($id==tinklo)||($id==konfigur)||($id==konsult2)||($id==projektor)||($id==pagal)||($id==superkame)){
return true;}
else{
return false;
}
}
 
 
 
 
 
 
 
 
 function PAT_IDtoKAT($id)
 {
 $kategorija;
			
			switch($id)
			{
			case PAT1:
			$kategorija=KATPAT1;
			break;
			case PAT2:
			$kategorija=KATPAT2;
			break;
			case PAT3:
			$kategorija=KATPAT3;
			break;
			case PAT4:
			$kategorija=KATPAT4;
			break;
			case PAT5:
			$kategorija=KATPAT5;
			break;
			default:
			$kategorija=KATPAT1;
			break;
			}
 return $kategorija; 
 }
 
 
 
 
 
 
 
 
 
 function PATSidebarText($id){


if($id==PAT1)
{ 
echo "<a class='PATSidebarTekstasTRUE' href=".get_permalink(PAT1).">";
}
else
{
echo "<a class='PATSidebarTekstasFALSE' href=".get_permalink(PAT1).">";
}
echo "• Patarimai apie nešiojamus kompiuterius</a><br>";

if($id==PAT2)
{ 
echo "<a class='PATSidebarTekstasTRUE' href=".get_permalink(PAT2).">";
}
else
{
echo "<a class='PATSidebarTekstasFALSE' href=".get_permalink(PAT2).">";
}
echo "• Patarimai apie stalinius kompiuterius</a><br>";

if($id==PAT3)
{ 
echo "<a class='PATSidebarTekstasTRUE' href=".get_permalink(PAT3).">";
}
else
{
echo "<a class='PATSidebarTekstasFALSE' href=".get_permalink(PAT3).">";
}
echo "• Patarimai apie mobiliuosius telefonus</a><br>";

 if($id==PAT4)
 {
 
 }


if($id==PAT5)
{ 
echo "<a class='PATSidebarTekstasTRUE' href=".get_permalink(PAT5).">";
}
else
{
echo "<a class='PATSidebarTekstasFALSE' href=".get_permalink(PAT5).">";
}
echo "• Blogas</a><br>";

}
 
 
 
 
 
 
 
function DUK_IDtoKAT($id)
 {
 $kategorija;
			
			switch($id)
			{
			case DUK1:
			$kategorija=KATDUK1;
			break;
			case DUK2:
			$kategorija=KATDUK2;
			break;
			case DUK3:
			$kategorija=KATDUK3;
			break;
			case DUK4:
			$kategorija=KATDUK4;
			break;
			case DUK5:
			$kategorija=KATDUK5;
			break;
			default:
			$kategorija=KATDUK1;
			break;
			}
 return $kategorija; 
 }
  
 
function DUKSidebarText($id){


if($id==DUK1)
{ 
echo "<a class='DUKSidebarTekstasTRUE' href=".get_permalink(DUK1).">";
}
else
{
echo "<a class='DUKSidebarTekstasFALSE' href=".get_permalink(DUK1).">";
}
echo "• Klausimai apie nešiojamus kompiuterius</a><br>";

if($id==DUK2)
{ 
echo "<a class='DUKSidebarTekstasTRUE' href=".get_permalink(DUK2).">";
}
else
{
echo "<a class='DUKSidebarTekstasFALSE' href=".get_permalink(DUK2).">";
}
echo "• Klausimai apie stalinius kompiuterius</a><br>";

 if($id==DUK3)
{ 
echo "<a class='DUKSidebarTekstasTRUE' href=".get_permalink(DUK3).">";
}
else
{
echo "<a class='DUKSidebarTekstasFALSE' href=".get_permalink(DUK3).">";
}
echo "• Klausimai apie mobiliuosius telefonus</a><br>";

 if($id==DUK4)
{ 
echo "<a class='DUKSidebarTekstasTRUE' href=".get_permalink(DUK4).">";
}
else
{
echo "<a class='DUKSidebarTekstasFALSE' href=".get_permalink(DUK4).">";
}
echo "• Klausimai apie periferinius įrenginius</a><br>";

if($id==DUK5)
{ 
echo "<a class='DUKSidebarTekstasTRUE' href=".get_permalink(DUK5).">";
}
else
{
echo "<a class='DUKSidebarTekstasFALSE' href=".get_permalink(DUK5).">";
}
echo "• Kiti klausimai</a><br>";

}
 
 
 function PaslAktyvus($r){
 if($r==1)
 {
 echo "PaslAktyvus";
 }
 else{
 echo "PaslNeAktyvus";
 }
}
 
 function ApieMusStraipsniai(){
		$UzklauMas=array('numberposts'=> 2, 'category' => KATApieMus,'order' => 'DESC');
		$pirmas=true;
		$myposts=get_posts($UzklauMas);
		foreach($myposts as $postas){
		$ids=$postas->ID;
		echo "<div class='PostForma'>";
		echo "<div class='ApieMusTitle'>".$postas->post_title."</div>";		
		echo "<div class='ApieMusExcerpt'>".$postas->post_excerpt;	
		echo "<br><a class='post_linkas' href=".$postas->guid;
		echo ">Skaityti daugiau</a></div>";
		echo "</div>";
		
		//----------------------------------
		
		$size = thumbnail;
	if($images = get_posts(array(
		'post_parent'    => $postas->ID,
		'post_type'      => 'attachment',
		'numberposts'    => -1, // show all
		'post_status'    => null,
		'post_mime_type' => 'image',
                'orderby'        => 'menu_order',
                'order'           => 'ASC',
	))) {
		foreach($images as $image) {
			$attimg   = wp_get_attachment_image($image->ID,$size);
echo "<div class='remas'>";
echo $attimg;
echo "</div>";

		}
	}
		//----------------------------------

		
		if($pirmas){
		echo "<div class='skyrimas'></div>";
		$pirmas=false;
		}
		
		}
		
		}
function PaslaugosAprasymas($pasl){
 
 
 switch($pasl){
 case 1: $Paslauga=Pasl1;
 break;
 case 2: $Paslauga=Pasl2;
 break;
 case 3: $Paslauga=Pasl3;
 break;
 case 4: $Paslauga=Pasl4;
 break;
 case 5: $Paslauga=Pasl5;
 break;
 case 6: $Paslauga=Pasl6;
 break;
 case 7: $Paslauga=Pasl7;
 break;
 case 8: $Paslauga=Pasl8;
 break;
 case 9: $Paslauga=Pasl9;
 break;
 case 10: $Paslauga=Pasl10;
 break;
 default: $Paslauga=0;
 break; 
 }
 $postas=get_page($Paslauga);
 echo $postas->post_content;
 
 }
 
 
 
 
 function PaslaugosAntraste($pasl){
 
 
 switch($pasl){
 case 1: $Paslauga=Pasl1;
 break;
 case 2: $Paslauga=Pasl2;
 break;
 case 3: $Paslauga=Pasl3;
 break;
 case 4: $Paslauga=Pasl4;
 break;
 case 5: $Paslauga=Pasl5;
 break;
 case 6: $Paslauga=Pasl6;
 break;
 case 7: $Paslauga=Pasl7;
 break;
 case 8: $Paslauga=Pasl8;
 break;
 case 9: $Paslauga=Pasl9;
 break;
 case 10: $Paslauga=Pasl10;
 break;
 default: $Paslauga=0;
 break; 
 }
 $postas=get_page($Paslauga);
 echo $postas->post_title;
 
 }
 
 
 
 
 
 
 
 
 
 function post_icon($id){
 switch($id){
 case ApieMus:
 echo "<img src='/wp-content/themes/Re-Startas/images/Post/ApieMus.png'>";
 break;
 case Kainorastis:
 echo "<img src='/wp-content/themes/Re-Startas/images/Post/Kainorastis.png'>";
 break;
 case DUK1;
 case DUK2;
 case DUK3;
 case DUK4;
 case DUK5:
 echo "<img src='/wp-content/themes/Re-Startas/images/Post/DUK.png'>";
 break;
 case Klausimai:
 echo "<img src='/wp-content/themes/Re-Startas/images/Post/Klausimai.png'>";
 break;
 case PAT1;
 case PAT2;
 case PAT3;
 case PAT4;
 case PAT5:
 echo "<img src='/wp-content/themes/Re-Startas/images/Post/Patarimai.png'>";
 break;
 default:
 echo " ";
 break;
 } 
 
 }
 
 
 
 
function ArTema($id){
if(($id!=ApieMus)&&($id!=Kainorastis)&&($id!=DUK1)&&($id!=DUK2)&&($id!=DUK3)&&($id!=DUK4)&&($id!=DUK5)&&($id!=Klausimai)&&($id!=PAT1)&&($id!=PAT2)&&($id!=PAT3)&&($id!=PAT4)&&($id!=PAT5)&&($id!=Email)&&($id!=Misija)&&($id!=Vizija)&&($id!=Komanda)&&($id!=Kontaktai)){
return false;}
else{
return true;
}
}

function MeniuSistema($dabar){
 switch($dabar){

case ApieMus:
echo "<div class='ApieMus'>";
echo "<a class='MenuActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuUnActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuUnActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuUnActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuUnActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;

case Kainorastis:
echo "<div class='Kainorastis'>";
echo "<a class='MenuUnActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuUnActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuUnActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuUnActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;

case DUK5;
case DUK4;
case DUK3;
case DUK2;
case DUK1:
echo "<div class='DUK'>";
echo "<a class='MenuUnActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuUnActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuUnActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuUnActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;


case Klausimai:
echo "<div class='Klausimai'>";
echo "<a class='MenuUnActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuUnActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuUnActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuUnActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;

case PAT1;
case PAT2;
case PAT3;
case PAT4;
case PAT5:
echo "<div class='Patarimai'>";
echo "<a class='MenuUnActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuUnActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuUnActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuUnActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;

default:
echo "<div class='Niekas'>";
echo "<a class='MenuUnActive' href='?page_id=".ApieMus."' style='left:12px; padding:25px 7px 25px 21px'>Paslaugos</a>";
echo "<a class='MenuUnActive' href='?page_id=".Kainorastis."' style='left:10px; padding:25px 12px 25px 12px'>Kainoraštis</a>";
echo "<a class='MenuUnActive' href='?page_id=".DUK1."' style='left:0px; padding:25px 30px 25px 30px'>D.U.K</a>";
echo "<a class='MenuUnActive' href='?page_id=".Klausimai."' style='left:-8px; padding:25px 10px 25px 6px'>Gyvi klausimai</a>";
echo "<a class='MenuUnActive' href='?page_id=".PAT1."' style='left:-23px; padding:25px 17px 25px 17px;'>Patarimai</a>";
echo "</div>";
break;
}
}
 
 
 
 
 
 
 
 //-----------Re-Startas Funkcijos Pabaiga-----------------
 ?>