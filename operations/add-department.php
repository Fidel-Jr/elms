<?php 

    session_start();
    require_once "../database/dbConnection.php";

    if(isset($_POST['add'])){
        $departmentName = $_POST['deptName'];
        $departmentShortName = $_POST['deptShortform'];
        $departmentCode = $_POST['deptCode'];

        if(!empty($departmentName) && !empty($departmentShortName) && !empty($departmentCode)){
            $sql = "INSERT INTO departmenttbl(department,department_short_name,department_code) VALUES('$departmentName',
            '$departmentShortName', '$departmentCode')";
            $query = $conn->query($sql);
            if($query){
                $_SESSION['add_sess_succ'] = "New Department Added! <a href='../admin/department.php'></a>";
            }
        } else {
            $_SESSION['add_sess_err'] = "All fields are required!";
        }

    }
    header("Location: ../admin/add-department.php");

?>