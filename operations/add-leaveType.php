<?php 

    session_start();
    require_once "../database/dbConnection.php";

    if(isset($_POST['add'])){
        $leaveType = $_POST['leaveType'];
        $description = $_POST['description'];

        if(!empty($leaveType) && !empty($description)){
            $sql = "INSERT INTO leavetypetbl(leave_type,description) VALUES('$leaveType','$description')";
            $query = $conn->query("$sql");

            if($query){
                $_SESSION['add_sess_succ'] = "New Leave Type Added! <a href='../admin/add-leaveType.php'></a>";
            }
        } else {
            $_SESSION['add_sess_err'] = "All fields are required!";
        }

    }
    header("Location: ../admin/add-leaveType.php");

?>