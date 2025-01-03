<?php
    include("conn.php");
    $atname = $_POST['attname'];
    $usage = $_POST['usage'];

    echo $atname;
    echo $usage;
  
    $sql = "INSERT INTO attachments (attid,atname,atusage) VALUES (NULL,'$_POST[attname]','$_POST[usage]');";
    $result = mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('新增成功')</script>";
    }else{
        echo "<script>alert('新增失敗')</script>";
    }
    echo "<script>window.location.href = 'addattachment.php'</script>";


?>