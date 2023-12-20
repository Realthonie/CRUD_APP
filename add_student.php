<?php
include("dbconn.php");



    if(isset($_POST['add_student'])){
        $student_id = $_POST['student_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $github_username = $_POST['github_username'];
        date_default_timezone_set('Africa/Lagos');
        $date = $_POST['date_created'] = date("Y-m-d H:i:sa", time());

        if($student_id == ""){
            header("location:index.php?add_student=Seems you did not complete some part of the form!!!");
        }
        else{
            $query = "insert into alx_project_table (student_id, firstname, lastname, github_username, date_created) values ('$student_id','$firstname','$lastname','$github_username', '$date')";

            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Query Failed" . mysqli_error($conn));
            }
            else{
                header("location:index.php?add_student=Your data has been added successfully!");
            }
        }
    }

?>