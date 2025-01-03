<!DOCTYPE HTML>

<html>
<title>關鍵字搜尋</title>
<style>
	.button {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 12px;
	}

	.button1 {
		font-size: 16px;
	}

	.button2 {
		font-size: 6px;
	}
</style>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFF4C1">
	<P Align="center">
		<font color="black" size="8" face="Microsoft JhengHei Light"><b>歡迎使用搜尋功能</b></font>
	</P>
	<?php
	include_once "conn.php";
	function create_reserveForm()
	{

		//department表單
		echo "選擇分類";
		echo "<form method='GET' action=''>";
		echo "<select name='table' onchange='this.form.submit()'>";
		echo "<option value=''>選擇分類</option>";
		echo "<option value='" . "weapon" . "'>" . "武器" . "</option>";
		echo "<option value='" . "type" . "'>" . "武器分類" . "</option>";
		echo "<option value='" . "ammo" . "'>" . "彈藥" . "</option>";
		echo "<option value='" . "attachments" . "'>" . "配件" . "</option>";
		echo "</select></br>";
		echo "</form>";
		//醫生表單  
		#print_r($_GET["department"]);
		if (!empty($_GET["table"])) {
			echo $_GET["table"] . "</br>";
			$table = $_GET["table"];

			echo "<form name='search' action='result.php' method='POST' >";
			echo " <select name='search'  onchange='this.form.submit()'>";
			echo "請選擇內容";
			$sql = null;
			if ($table == "weapon") {
				$sql = sprintf("Select w.wname as name From weapon as w");
			}
			if ($table == "type") {
				$sql = sprintf("Select t.tname as name From type as t");
			}
			if ($table == "ammo") {
				$sql = sprintf("Select a.amname as name From ammo  as a");
			}
			if ($table == "attachments") {
				$sql = sprintf("Select att.atname as name From attachments as  att");
			}
			$result = $GLOBALS["link"]->query($sql);

			
			echo "<option value=''>請選擇內容</option>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value='".$row["name"]."'>" . $row["name"] ."</option>";
			}
				
			
			echo "</select></br>";
			echo "</form>";
			//--------
			//---------

		}
	}
	create_reserveForm();
	?>
	<P Align="center">
		<input type="button" onclick="location.href='index.php'" value="回上一頁">
	</P>
</body>

</html>