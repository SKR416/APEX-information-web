<?php
    include("conn.php");
    $id = $_POST['id']; 
    echo $id;   
  
    $sql = "DELETE FROM ammo where ammoid =$id";
    $sql2="DELETE  FROM ammouse where ammoid =$id ";
    $result = mysqli_query($link,$sql2);
    $result = mysqli_query($link,$sql);
    header('Location: delete.php');
?>