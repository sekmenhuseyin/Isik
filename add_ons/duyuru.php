<? Before_Caption(); ?>Duyurular<? After_Caption(); ?>                        
		<marquee width=139 height=250 direction="up" onMouseOver="this.stop;" onMouseOut="this.start;" bgcolor="#FFFFF9" scrollamount="4" scrolldelay="90">
			<?	@mysql_connect ("localhost","root")||("Baðlantý gerçekleþmedi !");
			@mysql_select_db ("$db_name")||("Veritabaný seçilemedi !");
			$tablo="SELECT * FROM duyuru ORDER by tarih";
			$sorgu=mysql_query($tablo);
			while($oku=mysql_fetch_assoc($sorgu)){
				echo "<p style='margin:2px;'><br><b>$oku[title]</b><br>[$oku[tarih]]<br>$oku[msg]</p>";
			} ?>	
		</marquee>
<? After_Content(); ?>