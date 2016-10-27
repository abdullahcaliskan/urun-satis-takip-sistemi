<!DOCTYPE html>
<html>
<?php
@session_start();
?>
<head>
<meta charset="utf-8">
<title>ANCSoft Takip Sistem</title>
</head>
<body style="background-color:#d2d2d2">
<div align="center"><br><br><br><br><br><br><br><br><br><br>
<form action="index.php" method="POST" name="giris">
<table>
<tr>
<td>Kullanıcı Adı</td>
<td> : <input type="text" name="user_id"/></td>
</tr>

<tr>
<td>Şifre</td>
<td> : <input type="password" name="user_pw"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="giris" value="Giriş Yap" style="width:100%; position:relative;"></td>
</tr>
</table>
</form>
<?php 
if (isset($_POST['giris'])) {
	include("db_connect.php");
	if( empty($_POST['user_id']) or empty($_POST['user_pw'])){
		echo "Tüm Alanları Doldurunuz.";
	}
	else{
		$user_id=$_POST['user_id'];
		$user_pw=$_POST['user_pw'];
		$giris=mysql_query("SELECT * FROM admin WHERE user_id='$user_id' and user_pw='$user_pw'");
		if(mysql_num_rows($giris)!=1){
			echo "Giriş Yapılamaz";
		}
		else{

			$_SESSION['user']=$user_id;
			echo "<script>window.location.href='default.php';</script>";
		}
	}
	

}
?>
</div>

</body>
</html>