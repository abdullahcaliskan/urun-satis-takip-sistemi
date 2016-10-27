<?php
	include("db_connect.php");
	$s_no=$_POST['s_no'];
	$sil=mysql_query("DELETE FROM servis WHERE nS_no='$s_no'");
	if($sil){
		echo "Servis Silindi.";
	}
	else{
		echo "Servis Silinemedi. Yöneticinize Danışın";
	}
?>