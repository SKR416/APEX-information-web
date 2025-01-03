<?php
    include("conn.php");
    $id = $_POST['id']; 
    echo $id;   
  
    $sql = "DELETE FROM weapon where wid =$id";
    $result = mysqli_query($link,$sql);
    header('Location: delete.php');
?>