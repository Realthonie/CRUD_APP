<?php
$title = "STUDENT UPDATE";
include "includes/header.php";
include("dbconn.php");
?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM alx_project_table WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Fetching data failed" . mysqli_error($conn));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_student'])) {
    if (isset($_GET['id_new'])) {
        $id_new = $_GET['id_new'];
    }
    $student_id = $_POST['student_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $github_username = $_POST['github_username'];

    $query = "update alx_project_table set student_id ='$student_id', firstname ='$firstname', lastname ='$lastname', github_username = '$github_username' where id ='$id_new'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    } else {
        header("Location: index.php?update_msg=Your data has been updated successfully!!!");
    }
}

if (isset($_POST['delete_student'])){
    header("location:index.php");
}


?>





<form action="update.php?id_new=<?php echo $id; ?>" method="post">
    <h6 style="color: red; text-align:left;">Firstname and Lastname should be in Block Letters!</h6>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">STUDENT ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="student_id" value="<?php echo $row['student_id']; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">FIRSTNAME</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" value="<?php echo $row['firstname']; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">LASTNAME</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" value="<?php echo $row['lastname']; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">GITHUB USERNAME</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="matric_no" value="<?php echo $row['github_username']; ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
    <input type="submit" class="btn btn-secondary" name="delete_student" value="CANCEL">
</form>



<?php include "includes/footer.php"; ?>