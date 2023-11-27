<?php 
    session_start();
    require_once "../database/dbConnection.php";

    if(isset($_POST['register'])){
        $emp_id = $_POST['employeeId'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $phone_no = $_POST['contactNo'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirmation_pass = $_POST['confirm-password'];

        if(!empty($emp_id) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($department) && !empty($gender) 
           && !empty($dob) && !empty($phone_no) && !empty($address) && !empty($password) && !empty($confirmation_pass)){

            $hash = password_hash($password,PASSWORD_DEFAULT);

            if(password_verify($confirmation_pass,$hash)){
                $yourDob = strtotime($dob);
                $dateFormat = date('Y-m-d', $yourDob);

                $sql = "INSERT INTO employeetbl(emp_id,firstname,lastname,email,password,gender,dob,department,address,
                phone_no) VALUES('$emp_id', '$firstname', '$lastname', '$email', '$hash', '$gender', '$dateFormat', '$department',
                '$address','$phone_no')";
                $query = $conn->query($sql);
                if($query){
                    $_SESSION["add_emp_sess_succ"] = "New Employee Added!" . '<a href="admindashboard.php">Go Back</a>';
                }
            } else {
                $_SESSION["add_emp_sess_err"] = "Password doesn't match!";
            }

            
        } else{
                $_SESSION["add_emp_sess_err"] = "All fields are required!";
        }


        // $data = array($emp_id,$firstname,$lastname,$email,$department,$gender,$dob,$contact_no,$address,$password,$confirmation_pass);

        // // $empty = false;
        // foreach($data as $data){
        //     if(empty($data)){
        //         header("Location: ../admin/add-employee.php");
        //     } 
        // }

        
        // check(); // firstname - lastname
        // isStrong(); // password 

        // addAccount();

    

    }
    header("Location: ../admin/add-employee.php");


?>