<?php 
    include("db.php");
    if(isset($_POST["send"])) {
        $task = htmlspecialchars($_POST["task"]);
        
        $sql = "INSERT INTO task (description) values ('$task')";
        
        $result = mysqli_query($conn,$sql) or die("The Query cannot be executed !!!!");
        
        if($result) {
            header("location: index.php");
        }else{
            echo "Something went wrong.......";
        }
    }
?>