<?php 
    include("db.php");
    
    $id = $_GET["id"];
    
    $sql = "DELETE FROM task WHERE id = '$id'";
    
    $result = mysqli_query($conn,$sql) or die("The Query cannot be executed !!!!");
    
    if($result){
        header("location: index.php");
    }
?>