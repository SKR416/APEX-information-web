<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        .wi {

            margin-left: 5vw;
            margin-right: 5vw;
        }

        .mid {
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -50px;
        }

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
</head>

<body bgcolor="#FFF4C1">

    <div class="bg" style="overflow: hidden">
        <img src="background3.jpg">
    </div>
    <div class="box">
        <P Align="center">
            <font color="white" size=6 face="Microsoft JhengHei Light"><b>新增武器可用彈藥</b></font>
        </P>
        <form action="adduse.php" method="POST">

            <P Align="center">

                <div style= "font-size: 16px; color: white; font-weight: light;" >選擇武器</div><select name='weapon' class="button">

            <div class="wi">
                <?php
                include("conn.php");

                $SQL1 = "SELECT * FROM weapon";
                $result = mysqli_query($link, $SQL1);
                if (!$result) {
                    print(mysqli_error($link));
                    exit();
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row["wid"] . "'>" . $row["wname"] . "</option>";
                }
                ?>

            </div>
            </select>
            <div style= "font-size: 16px; color: white; font-weight: light;" >選擇彈藥</div><select name='ammo' class="button">
            <div class="wi">
                <?php
                include("conn.php");

                $SQL2 = "SELECT * FROM  ammo";
                $result = mysqli_query($link, $SQL2);
                if (!$result) {
                    print(mysqli_error($link));
                    exit();
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row["ammoid"] . "'>" . $row["amname"] . "</option>";
                }

                ?>
                </select>
                <center><input type='submit' class="button" value="新增"></center>
            </div>
            </P>


        </form>

    </div>
    <div class="box2">
        <input type="button " class="button button2" onclick="location.href='addnew.php'" value="回上一頁">
        <input type="button " class="button button3" onclick="location.href='index.php'" value="APEX武器資訊">
        <img class="titleimg" src="title.png">
    </div>



</html>