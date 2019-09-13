<?php
include_once "connection.php";
    if(isset($_POST['create'])){
        $fullname = $_POST['fullname'];
        
        $query = mysqli_query($connection,"INSERT INTO demo(fullname) VALUES('$fullname')");
        if($query == TRUE){
            header("Location: index.php");
        }else{
            echo "Cannot Insert new record!";
        }
    }
?>