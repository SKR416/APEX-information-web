<?php
    include("conn.php");
    $weapon = $_POST['weapon'];
    $attachments = $_POST['attachments'];

    echo $weapon;
    echo $attachments;
  
    $sql = "INSERT INTO install (wid,attid) VALUES ('$weapon','$attachments');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    
    echo "<script>window.location.href = 'addweaatt.php'</script>";


?>