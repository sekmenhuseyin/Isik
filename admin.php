<? session_start();
include("ust.html");
	    
if ( $_SESSION["admin_pass"]<>$password_admin ) {
 	if ( $pass<>$password_admin ) {
		include("add_ons/admin/admin_login.htm");
	}else{
		$_SESSION["admin_pass"] = $password_admin;
		echo "<script language=\"JavaScript\">window.location.href = 'admin.php';</script>";
	}
}else{ ?>
	<table border="0" width="100%">
		<tr>
			<td align="center"><a title="Kimlik ��lemleri" href="admin.php?action=kmlk_lst">Kimlik ��lemleri</a></td>
			<td align="center"><a title="Not ��lemleri" href="admin.php?action=nt_lst">Not ��lemleri</a></td>
			<td align="center"><a title="Duyuru ��lemleri" href="admin.php?action=dyr_lst">Duyuru ��lemleri</a></td>
			<td align="center"><a title="�ifre De�i�tir" href="admin.php?action=pass_ch">�ifre De�i�tir</a></td>
			<td align="center"><a title="G�venli ��k��" href="admin.php?action=logout">G�venli ��k��</a></td>
		</tr>
	</table><hr>
	<table cellpadding="4" width="100%" border="1" cellspacing="0">
		<tr>
			<td align="center"><br>
				<?
				if ($action=="kmlk_yn"){include("add_ons/admin/kmlk_yeni.htm");}
				else if ($action=="kmlk_dzn"){include("add_ons/admin/kmlk_duzenle.htm");}
				else if ($action=="kmlk_sl"){include("add_ons/admin/kmlk_sil.htm");}
				else if ($action=="kmlk_lst"){include("add_ons/admin/kmlk_list.htm");}
				else if ($action=="nt_yn"){include("add_ons/admin/not_yeni.htm");}
				else if ($action=="nt_dzn"){include("add_ons/admin/not_duzenle.htm");}
				else if ($action=="nt_sl"){include("add_ons/admin/not_sil.htm");}
				else if ($action=="nt_lst"){include("add_ons/admin/not_list.htm");}
				else if ($action=="dyr_yn"){include("add_ons/admin/duyuru_yeni.htm");}
				else if ($action=="dyr_dzn"){include("add_ons/admin/duyuru_duzenle.htm");}
				else if ($action=="dyr_sl"){include("add_ons/admin/duyuru_sil.htm");}
				else if ($action=="dyr_lst"){include("add_ons/admin/duyuru_list.htm");}
				else if ($action=="pass_ch"){include("add_ons/admin/admin_pass_change.htm");}
				else if ($action=="logout"){include("add_ons/admin/admin_logout.htm");}
				else{include("add_ons/admin/kmlk_list.htm");};
				?><br>
			</td>
		</tr>
	</table><?
}
include("alt.html"); ?>
