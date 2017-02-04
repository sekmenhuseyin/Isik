<? include("ust.html");

if ($ogrno<>""){
	@mysql_connect ("localhost","root")||("Ba&#287;lant&#305; gerçekle&#351;medi !");
	@mysql_select_db ("db_okul")||("Veritaban&#305; seçilemedi !");
	$tablo="SELECT * FROM kimlik where numara=$ogrno";
	$sorgu=mysql_query($tablo);	$oku=mysql_fetch_assoc($sorgu);
	$ogr_sayi=mysql_num_rows($sorgu);
	if ($ogr_sayi==0){
		echo "<script language=\"JavaScript\">window.location.href = '?ht=noogr';</script>";
	}else{?>
		<table border="0" width="100%">
			<tr>
				<td align="center"><a title="Kimlik Bilgileri" href="?ogrno=<? echo("$ogrno") ?>&action=kmlk_blg">Kimlik Bilgileri</a></td>
				<td align="center"><a title="Not Bilgileri" href="?ogrno=<? echo("$ogrno") ?>&action=nt_blg">Not Bilgileri</a></td>
				<td align="center"><a title="Devamsýzlýk Bilgileri" href="?ogrno=<? echo("$ogrno") ?>&action=dvm_blg">Devamsýzlýk Bilgileri</a></td>
			</tr>
		</table><hr>
		<table cellpadding="4" width="100%" border="1" cellspacing="0">
			<tr>
				<td align="center"><br>
					<?
					if ($action=="kmlk_blg"){include("add_ons/sorgu/kmlk_bilgi.htm");}
					else if ($action=="nt_blg"){include("add_ons/sorgu/nt_bilgi.htm");}
					else if ($action=="dvm_blg"){include("add_ons/sorgu/dvm_bilgi.htm");}
					else{include("add_ons/sorgu/kmlk_bilgi.htm");};
					?><br>
				</td>
			</tr>
		</table><?
	} 
}else {
	include("add_ons/sorgu/sorgu_login.htm");
	if ($ht=="noogr") { echo("<br><br><center>Böyle bir ö&#287;renci kay&#305;tl&#305; de&#287;il !</center>");}
}
include("alt.html"); ?>
