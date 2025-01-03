<?php
    include("conn.php");
    $wname = $_POST['wname'];
    $HeadDmg = $_POST['HeadDmg'];
    $BodyDmg = $_POST['BodyDmg'];
    $capacity = $_POST['capacity']; 
    $LegsDmg = $_POST['LegsDmg'];
    $type = $_POST['type'];
    echo $wname;
    echo $HeadDmg;
    echo $BodyDmg;
    echo $LegsDmg;
    echo $capacity;
    echo $type;   
    $sql = "INSERT INTO weapon (wid, wname, BodyDmg, HeadDMG, LegsDMG, capacity, tid) VALUES (NULL, '$wname', '$HeadDmg', '$BodyDmg','$LegsDmg', '$capacity', '$type');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    echo "<script>window.location.href = 'addweapon.php'</script>";



?>