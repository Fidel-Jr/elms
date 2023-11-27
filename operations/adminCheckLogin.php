<?php 

    session_start();
    require("../database/dbConnection.php"); 

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['userType'])){
            $sql = "SELECT * FROM managertbl WHERE username = '$username' ";
            $query = $conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_assoc();
                $stored_hashed_password = $row['password'];
                if(password_verify($_POST['password'],$stored_hashed_password)){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login-succ'] = "You are successfully Logged In!";
                    header("Location: ../admin/admindashboard.php");
                }else {
                    $_SESSION['login-err'] = "Incorrect Password!";
                    header("Location: ../admin/index.php");
                }
                
            } else {
                $_SESSION['login-err'] = "Username does not exist!";
                header("Location: ../admin/index.php");
            }
        } else {
            $_SESSION['login-err'] = "All fields are required!";
            header("Location: ../admin/index.php");
        }
    }
    
    // if($_POST['userType'] == 'admin'){
    //     header("Location: ../admin/admindashboard.php");
    // } else{
    //     header('Location: ../index.php');
    // }
    


?>