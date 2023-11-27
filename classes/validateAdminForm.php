<?php 
    
    session_start();
    require_once("../database/dbConnection.php");

    function check(&$data){
        return trim($data);
    }

    function isStrongPass($password):bool{
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        if(!$uppercase || !$lowercase || !$number || strlen($password) < 6){
            return false;
        } else {
            return true;
        }   
    }

    if($_POST['confirm-password'] <> $_POST['password']){
        $_SESSION['password_err'] = "Password does not match";
        // $_SESSION['register_err'] = "";
        header("Location: ../admin/add.php");
    }

    if(isset($_POST['register']) && $_POST['confirm-password']==$_POST['password']){
        $fname = check($_POST['fname']);
        $email = $_POST['email'];
        $username = check($_POST['username']);
        $password = check($_POST['password']);
        $confirm_pass = check($_POST['confirm-password']);

        $selectAll = "SELECT * FROM managertbl WHERE username = '$username' ";
        $check = $conn->query($selectAll);
        if($check->num_rows>0){
            $_SESSION['register_err'] = "Username is already taken!";
            header("Location: ../admin/add.php");
        }
        
        if(!empty($fname) && !empty($email) && !empty($username) && !empty($password) && !empty($_POST['password'])){
            $password = isStrongPass($password);
            $hashedPassword = password_hash($_POST['password'],PASSWORD_DEFAULT);
            // echo $hashedPassword;
            if($password == 1){
                $password = $_POST['password'];
                $sql = "INSERT INTO managertbl(username,password,fullname,email) VALUES('$username','$hashedPassword','$fname','$email')";
                $query = $conn->query($sql);
                if($query){
                    $_SESSION['register_succ'] = "Admin registered successfully!";
                } 
            } else {
                $_SESSION['weak_pass'] = 'Password is weak!';
                header("Location: ../admin/add.php");
            }
            
        } else {    
            unset($_SESSION['weak_pass']);
            $_SESSION['register_err'] = 'All fields are required!';
        }
        
    }
    header("Location: ../admin/add.php");
?>