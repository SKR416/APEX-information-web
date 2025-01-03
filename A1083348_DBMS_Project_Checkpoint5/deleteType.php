<?php
    include("conn.php");
    $id = $_POST['id']; 
    echo $id;   
    
    $sql = "DELETE FROM type where tid =$id";
    $sql2= "DELETE FROM weapon where tid =$id";
    $sql3 = "DELETE au FROM weapon as w,ammouse as au WHERE w.tid=$id and au.wid=w.wid";
    $sql4 = "DELETE ins FROM weapon as w,install as ins WHERE  w.tid=$id and w.wid=ins.wid ";
    
    $result = mysqli_query($link,$sql4);
    $result = mysqli_query($link,$sql3);
    $result = mysqli_query($link,$sql2);
    $result = mysqli_query($link,$sql);
    header('Location: delete.php');
?>