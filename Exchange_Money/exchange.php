<!DOCTYPE>
<html>
<head>
<meta content="text/html; charset=utf-8" />
<title>Exchange</title>
</head>

<body>
<div class="moneyexchange" align="center">
   
   <h1>Your Money Exchange</h1>
   <hr color="#F2F5A9" width="400 px"> <br>
<?php
	switch ($_POST['cata']) {
		case 'usd':
			$money = $_POST['money']*0.03;
			$money = $money."  ดอลล่าสหรัส(USD)";
			break;
		case 'kor':
			$money = $_POST['money']*32.55;
			$money = $money."  วอน(WON)";
			break;
		case 'hkd':
			$money = $_POST['money']*0.22;
			$money = $money."  ดอลลาร์ฮ่องกง(HKD)";
			break;
		
		default:
			break;
	}
    echo "<p> ".$money." </p><br>";
    echo "<h2><a href='index.html'><input class='btn'type='submit' name='Submit2' value='Return'></a></h2>";
    // echo "<h2><a href='index.html'>Return</a></h2>";
	?>
</div>
</body>
</html>

<style type="text/css">
body{
	background: #F7BE81;
}
.moneyexchange{
	border-radius: 20px;
	background-color: #FAAC58;
	width: 600px;
	height: 320px;
	margin: auto;
}
.btn{
	width: 95px;
	height: 35px;
	background-color: #00BFFF;
	font-size: 18px;
	font-family: sans-serif;
	color: #fff;
	border-radius: 10px;
}
.btn:hover{
	background-color: #FE2E2E;
}
p{
	color: #FF4000;
	font-family: sans-serif;
	font-size: 26px;
	background-color: #fff;
	width: 450px;
	height: 45px;
	border-radius: 10px;
	padding-top: 10px;
}
h1{
	font-family: sans-serif;
	font-size: 30px;
	color: #fff;
	margin-top: 50px;
	padding-top: 20px;
}
h2{
	font-family: sans-serif;
	font-size: 18px;
	color: pink;
	margin-left: 20px;
}
h2,a:hover{
	color: red;
}
</style>