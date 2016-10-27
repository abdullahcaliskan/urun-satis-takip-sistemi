<?php
	include("db_connect.php");
	$d_no=$_POST['d_no'];
	$sil=mysql_query("DELETE FROM durusma WHERE nD_no='$d_no'");
	if($sil){
		echo "Duruşma Silindi.";
	}
	else{
		echo "Duruşma Silinemedi. Yöneticinize Danışın";
	}
?>