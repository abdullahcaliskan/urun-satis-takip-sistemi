<?php 
include("db_connect.php");

function teknisyenListele(){
	echo "<select name='teknisyen'>";
	echo "<option value='Vedat Kavala'>Vedat Kavala</option>";
	echo "<option value='Hasan Tatar'>Hasan Tatar</option>";
	echo "<option value='Soner Tutar'>Soner Tutar</option>";
	echo "<option value='H İbrahim Coşkun'>H. İbrahim Coşkun</option>";
	echo "<option value='Sefa Deniz'>Sefa Deniz</option>";
	echo "<option value='Ali Ateş'>Ali Ateş</option>";
	echo "<option value='Ali Dönmez'>Ali Dönmez</option>";
	echo "<option value='Yakup Türkmen'>Yakup Türkmen</option>";
	echo "<option value='Koray'>Koray</option>";
	echo "</select>";
}

function turListele(){
	echo "<select name='tur'>";
	echo "<option value='Arıza'>Arıza</option>";
	echo "<option value='Montaj'>Montaj</option>";
	echo "<option value='Klima-Montaj'>Klima-Montaj</option>";
	echo "<option value='Tanıtım'>Tanıtım</option>";
	echo "<option value='Ek Garanti'>Ek Garanti</option>";
	echo "<option value='Aksesuar Satış'>Aksesuar Satış</option>";
	echo "<option value='Nakliye'>Nakliye</option>";
	echo "</select>";
}
function sayi_top($kosul,$bas,$bit,$tek){

	if($kosul=="yok"){
		$sorgu=mysql_query("SELECT * FROM servis WHERE dS_tarih BETWEEN '$bas' and '$bit'");
	}
	else if($kosul=="all"){
		$sorgu=mysql_query("SELECT * FROM servis WHERE dS_tarih BETWEEN '$bas' and '$bit' and tS_teknisyen='$tek'");	
	}
	else{
	$sorgu=mysql_query("SELECT * FROM servis WHERE dS_tarih BETWEEN '$bas' and '$bit' and tS_teknisyen='$tek' and tS_yapilan='$kosul'");	
	}
	$sayi=mysql_num_rows($sorgu);
	echo $sayi;
}
function sayi_ver($kosul,$teknisyen){
	if($kosul=="yok"){
		$sorgu=mysql_query("SELECT * FROM servis");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;
	}
	else if($kosul=="all"){
		$sorgu=mysql_query("SELECT * FROM servis WHERE tS_teknisyen='$teknisyen'");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;
	}
	else{
		$sorgu=mysql_query("SELECT * FROM servis WHERE tS_yapilan='$kosul' and tS_teknisyen='$teknisyen'");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;
	}
}
function sys($kosul){
	if($kosul=="yok"){
		$sorgu=mysql_query("SELECT * FROM servis");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;
	}
	else if($kosul=="borc"){
		$durum="1";
		$sorgu=mysql_query("SELECT * FROM servis WHERE tO_durum='$durum'");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;

	}
	else{
		$sorgu=mysql_query("SELECT * FROM servis WHERE tS_yapilan='$kosul'");
		$sayi=mysql_num_rows($sorgu);
		echo $sayi;
	}
}
?>