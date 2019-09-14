<?php
    include_once "connection.php";
    if(isset($_POST['edit'])){
        $fullname = $_POST['fullname'];
        $id = $_POST['id'];
        
        $update = mysqli_query($connection,"UPDATE demo  SET fullname = '$fullname' WHERE id = $id");
        if($update == TRUE){
            header("Location: index.php");
        }else{
            echo "Cannot update";
        }
    }
?>