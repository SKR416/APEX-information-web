<!DOCTYPE HTML>
<html>

<head>
    <title>Apex武器資訊</title>
    <meta charset="utf-8" />
    <style>
        .inner {
            position: absolute;
            width: 20vw;
            bottom: 5vh;
            margin: auto;
            left:5vw;
        }

        .inner2 {
            position: absolute;
            width: 20vw;
            bottom: 5vh;
            margin: auto;
            left:30vw;
        }
        .inner3 {
            position: absolute;
            width: 20vw;
            bottom: 5vh;
            margin: auto;
            left:55vw;
        }
        .inner4 {
            position: absolute;
            width: 20vw;
            bottom: 5vh;
            margin: auto;
            left:80vw;
        }
        .button {
            background-color: #FF4500;
            border: none;
            color: white;
            padding: 5vh 5vw;
            text-align: justify;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 0vh 0vw;
            cursor: pointer;
            border-radius: 12px;
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
    </style>
</head>

<body bgcolor="#FFF4C1">


    <div class="bg" style="overflow: hidden">
        <img src="background.jpg">
    </div>
    <div class="inner" style="overflow: hidden">
        <input type="button" class="button" onclick="location.href='viewchoose.php'" value="前往瀏覽頁面">
    </div>
    <div class="inner2" style="overflow: hidden">
        <input type="button" class="button" onclick="location.href='search.php'" value="前往搜尋頁面">
    </div>
    <div class="inner3" style="overflow: hidden">
        <input type="button" class="button" onclick="location.href='addnew.php'" value="前往新增頁面">
    </div>
    <div class="inner4" style="overflow: hidden">
        <input type="button" class="button" onclick="location.href='delete.php'" value="前往刪除頁面">
    </div>
</body>

</html>