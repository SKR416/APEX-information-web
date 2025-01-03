<?php
    include("conn.php");
    $id = $_POST['id']; 
    echo $id;   
  
    $sql = "DELETE FROM attachments where attid =$id";
    $sql2 = "DELETE FROM install where attid =$id";
    $result = mysqli_query($link,$sql);
    $result = mysqli_query($link,$sql2);
    header('Location: delete.php');
?>