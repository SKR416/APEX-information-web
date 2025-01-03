<?php
    include("conn.php");
    $amname = $_POST['amname'];
    $quantity = $_POST['quantity'];

    echo $amname;
    echo $quantity;
  
    $sql = "INSERT INTO ammo (ammoid,amname,quantity) VALUES (NULL,'$_POST[amname]','$_POST[quantity]');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    
    echo "<script>window.location.href = 'addammo.php'</script>";


?>