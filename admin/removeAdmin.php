<?php 

    session_start();
    require_once('../database/dbConnection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM managertbl WHERE id = '$id'";
        $query = $conn->query($sql);

        if($query){
            $_SESSION['delete_succ'] = "Admin deleted successfully!";
        } else {
            $_SESSION['delete_err'] = "Failed to delete the account!";
        }
    } else {
        $_SESSION['delete_err'] = "No ID found!";
    }
    header('Location: manage-admin.php');


?>