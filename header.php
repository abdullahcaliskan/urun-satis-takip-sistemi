<?php include("function.php"); include("db_connect.php"); 
session_start();
if(empty($_SESSION['user']))
{
	echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.riaxe.com/marketplace/thin-admin/dynamic_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2015 12:10:55 GMT -->
<head>
<title>ANCSoft Satış Takip | BSP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/thin-admin.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.css" rel="stylesheet" media="screen">
<link href="style/style.css" rel="stylesheet">
<link href="style/dashboard.css" rel="stylesheet">
<script src="myjs.js"></script>
<META http-equiv=content-type content=text/html;charset=utf-8>
<link rel="stylesheet" type="text/css" href="style/jquery.jqplot.min.css" />
<script class="include" type="text/javascript" src="javascript/pie-test.js"></script> 
<link href="css/demo_page.css" rel="stylesheet">
<link href="css/demo_table.css" rel="stylesheet">
<script src="jsDatePick.min.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="jsDatePick_ltr.min.css"/>
<link href="style/fullcalendar.css" rel="stylesheet" />
<link href="style/fullcalendar.print.css" rel="stylesheet" media="print"/>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
		});
		new JsDatePick({
			useMode:2,
			target:"inputField2",
			dateFormat:"%Y-%m-%d"
		});
	};

</script>
</head>
<body>