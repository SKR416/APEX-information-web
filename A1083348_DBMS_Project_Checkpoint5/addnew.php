<!DOCTYPE HTML>
<html>

<head>
	<title>新增內容選擇</title>
	<meta charset="utf-8" />
	<style>
		.inner {
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -150px;
			margin-left: -150px;

		}

		.button {

			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 1vh 1.5vw;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			cursor: pointer;
			border-radius: 12px;
			font-size: 16px;
		}

		.button1 {
			margin: auto 13%;
		}

		.button2 {
			padding: 1vh 1vw;
			background-color: transparent;
			position: absolute;
			font-size: 18px;
			font-weight: bold;
			top: 0.2vh;
			right: 0px;
		}

		.button3 {
			padding: 1vh 1vw;
			background-color: transparent;
			position: absolute;
			font-size: 18px;
			font-weight: bold;
			top: 0.2vh;
			left: 0px;
		}

		.place1 {
			position: absolute;
			top: 35vh;
		}

		.place2 {
			position: absolute;
			top: 25vh;
		}

		.place3 {
			position: absolute;
			top: 30vh;
		}

		.left {
			left: 40vw;
		}

		.right {
			right: 40vw;
		}

		.bg {
			position: fixed;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			z-index: -999;
		}

		.bg img {
			min-height: 100%;
			width: 100%;
		}

		.box {
			position: absolute;
			background: rgb(211, 211, 211);
			opacity: 0.8;
			text-align: center;
			top: 15vh;
			left: 37.5vw;
			width: 25vw;
			height: auto;
			margin: 0 auto;
			/*區塊置中*/
			border-radius: 12px;
		}

		.box2 {
			position: fixed;
			background: rgba(0, 0, 0, 0.8);
			text-align: center;
			top: 0vh;
			left: 0vw;
			width: 100vw;
			height: 5vh;
			margin: 0 0;
			/*區塊置中*/
		}

		.titleimg {
			position: fixed;
			top: 0.1vh;
			left: 47.5vw;
			width: 5vw;
			height: 4.8vh;

		}
	</style>
	<div class="box">
		<font color="black" size="7" face="Microsoft JhengHei Light"><b>選擇你要新增的類別</b></font>
	</div>
</head>

<body bgcolor="	#FFF4C1">
	<div class="bg" style="overflow: hidden">
		<img src="background2.jpg">
	</div>
	<center>
		<input type="button " class="button button1 place2 left" onclick="location.href='addweapon.php'" value="武器資料">
		<input type="button " class="button button1 place2 right" onclick="location.href='addammo.php'" value="彈藥資料"><br />
		<input type="button " class="button button1 place3 left" onclick="location.href='addattachment.php'" value="配件資料">
		<input type="button " class="button button1 place3 right" onclick="location.href='addtype.php'" value="類別清單"><br />
		<input type="button " class="button button1 place1 left" onclick="location.href='addweaamm.php'" value="武器可用彈藥">
		<input type="button " class="button button1 place1 right" onclick="location.href='addweaatt.php'" value="武器可用配件"><br />
	</center>
	</div>
	<div class="box2">
		<input type="button " class="button button2" onclick="location.href='index.php'" value="回上一頁">
		<input type="button " class="button button3" onclick="location.href='index.php'" value="APEX武器資訊">
		<img class="titleimg" src="title.png">
	</div>
</body>

</html>