<?php 
    include("db.php");
    
    if(isset($_POST["send"])) {
        
        $id = (int)$_POST["idUpdate"];
        
        $task = htmlspecialchars($_POST["taskUpdate"]);
        
        date_default_timezone_set('Asia/Calcutta');
        
        $datetime = date('Y-m-d H:i:s');
        
        $sql = "UPDATE task SET description = '$task', datetime = '$datetime' WHERE id = '$id'";
        
        $val = mysqli_query($conn,$sql);
        
        if($val) {
            header("location: index.php");
        }
    }
?>