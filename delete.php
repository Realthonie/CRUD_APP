<?php
include("dbconn.php");



   if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "delete from alx_project_table where id = '$id'";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Error deleting record" . mysqli_errno($conn));
    }else{
        header("location:index.php?delete_data=Delete Successfull!");
    }
   }

?>