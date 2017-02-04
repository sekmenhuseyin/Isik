<? 
@mysql_connect ("localhost","root")||("Ba&#287;lant&#305; gerçekle&#351;medi !");
@mysql_select_db ("db_okul")||("Veritaban&#305; seçilemedi !");
$tablo="SELECT * FROM dersler ORDER by name DESC";
$sorgu=mysql_query($tablo);
while($oku=mysql_fetch_assoc($sorgu)){
	$tablo2="SELECT * FROM $oku[lakap] where numara='$ogrno'";
	$sorgu2=mysql_query($tablo2);	$oku2=mysql_fetch_assoc($sorgu2);
	$sat_num=mysql_num_rows($sorgu2);
  	if ($sat_num<>0) {
	?>
		<tr>
			<td><? echo("$oku[name]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz1]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz2]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz3]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz4]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz5]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[yaz6]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[kanaat]"); ?>&nbsp;</td>
			<td align="center"><? echo("$oku2[ortalama]"); ?>&nbsp;</td>
		</tr>
<?   }
 }?>