<?php
    include("conn.php");
    
    $tname = $_POST['tname'];
    echo $tname;
    $sql = "INSERT INTO type (tid, tname) VALUES (NULL, '$tname');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    echo "<script>window.location.href = 'addtype.php'</script>";


?>