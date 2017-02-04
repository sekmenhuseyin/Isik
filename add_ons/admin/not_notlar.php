<?
@mysql_connect ("localhost","root")||("Ba&#287;lant&#305; gerçekle&#351;medi !");
@mysql_select_db ("db_okul")||("Veritaban&#305; seçilemedi !");
$tablo="SELECT * FROM dersler ORDER by name";
$sorgu=mysql_query($tablo);	
while($oku=mysql_fetch_assoc($sorgu)){
	$tablo2="SELECT * FROM $oku[lakap] where numara='$ogr_no'";
	$sorgu2=mysql_query($tablo2);	$oku2=mysql_fetch_assoc($sorgu2);
	$sat_num=mysql_num_rows($sorgu2);
  	if ($sat_num<>0) {
	?>
		<tr>
			<td>
			  <? echo("$ogr_name"); ?>&nbsp;<? echo("$ogr_surname"); ?>
			</td>
			<td><? echo("$oku[name]"); ?></td>
			<td align="center"><? echo("$oku2[ortalama]"); ?></td>
	        <td width="10%" align="center">
	          <a href="?action=nt_dzn&id=<? echo("$oku2[id]"); ?>"><img src="images/dzn.gif" border="0" alt="Düzenle"></a>
			</td>
	        <td width="10%" align="center">
			  <a href="?action=nt_sl&id=<? echo("$oku2[id]"); ?>" OnClick="return confirm('------- &nbsp;&nbsp;U y a r &#305;&nbsp;&nbsp; -------------------------------------------------------------------------- \n\n\<? echo("$oku[name]"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dersi notlar&#305;n&#305; silmek istediginizden emin misiniz?')"><img src="images/sl.gif" alt="Sil"  border="0"></a>
			</td>
		</tr>
<?   }
 }?>