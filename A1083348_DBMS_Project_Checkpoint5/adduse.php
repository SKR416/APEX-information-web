<?php
    include("conn.php");
    $weapon = $_POST['weapon'];
    $ammo = $_POST['ammo'];

    echo $weapon;
    echo $ammo;
  
    $sql = "INSERT INTO ammouse (wid,ammoid) VALUES ('$weapon','$ammo');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    
    echo "<script>window.location.href = 'addweaamm.php'</script>";


?>