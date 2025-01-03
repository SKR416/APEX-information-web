<!DOCTYPE HTML>
<html>

<head>
	<title>彈藥資料總覽</title>
	<meta charset="utf-8" />

	<style>
		.wi {

			margin-left: 5vw;
			margin-right: 5vw;
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
			top: 20vh;
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

		.table-outbox {
			margin: 10px;
			/* 添加外距 */
			box-shadow: 0px 35px 50px rgba(27, 31, 49, 0.1);
			/* 添加表格陰影 */
		}

		/*  table
             *  ------------------------------------- */
		table {
			border-collapse: collapse;
			/* 表格邊框合併 */
			width: 100%;
			/* 寬度 100% */
			background-color: white;
			/* 背景白色 */
			margin-bottom: 2vh;
		}

		table thead th {
			color: #ffffff;
			/* 表頭文字白色 */
			background: #2f4961;
			/* 表頭背景白色 */
		}

		table td,
		table th {
			text-align: center;
			/* 文字置中顯示 */
			padding: 10px;
			/* 添加內距 */
		}

		table td {
			border-right: 1px solid #f1f1f1;
			/* 表格 td 右邊框顏色 */
		}

		table tr:nth-child(even) {
			background: #f8f8f8;
			/* 表格偶數 tr 灰色背景 */
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
			background-color: rgba(106, 106, 255, 0.6);
			opacity: 0.9;
			text-align: center;
			top: 8vh;
			left: 29vw;
			width: 42vw;
			height: auto;
			margin: auto auto;
			/*區塊置中*/
			padding: 0 0;
			border-radius: 12px;
		}

		.titleimg {
			position: fixed;
			top: 0.1vh;
			left: 47.5vw;
			width: 5vw;
			height: 4.8vh;

		}
	</style>
</head>

<body bgcolor="#FFF4C1">
	<div class="bg" style="overflow: hidden">
		<img src="background3.jpg">
	</div>
	<div class="box">
		<P Align="center">
			<font color="white" size="8" face="Microsoft JhengHei Light"><b>彈藥資料總覽</b></font>
		</P>
		<div class="wi">
			<?php
			include("conn.php");

			$SQL = "SELECT * FROM ammo ";
			$result = mysqli_query($link, $SQL);
			echo "<table border='1'>";
			echo "<tr><th>彈藥名</th><th>背包一格可攜帶的數量</th></tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<th>" . $row["amname"] . "</th><th>" . $row["quantity"] . "</th>";
				echo "</tr>";
			}
			echo "</table>";
			?>
		</div>
	</div>
	<div class="box2">
		<input type="button " class="button button2" onclick="location.href='viewchoose.php'" value="回上一頁">
		<input type="button " class="button button3" onclick="location.href='index.php'" value="APEX武器資訊">
		<img class="titleimg" src="title.png">
	</div>

</body>

</html>