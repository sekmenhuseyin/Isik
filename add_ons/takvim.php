<?
$aylar=array("Ocak","Subat","Mart","Nisan","Mayis","Haziran","Temmuz","Agustos","Eylül","Ekim","Kasim","Aralik");
$gunler=array("Pazar","Pazartesi","Sali","Çarsamba","Persembe","Cuma","Cumartesi");
?>
<table width="100%"  border="0" cellspacing="0" cellpadding="2" align="center">
  <tr bgcolor="#5183D0">
    <td colspan="7" align="center">
		Bugün : <b><?
		echo $gunler[date("w")] . " <br>" ;
		echo date("j") . (date("j")==1 ? " ": " ");
		echo $aylar[date("n")-1]." ".date("Y");
		?></b>
	</td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
</table>
