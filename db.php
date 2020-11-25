<?php
    $conn = mysqli_connect("localhost","root","","phpcrud") or die("Connection Failed");
    
    if($conn) {
        echo "Database connection completed...";
    }
    else{
        echo "Database connection not completed...";
    }
?>