<?php 

    // session_start(); 
    // include "../includes/adminSidebar.php";
    include("../includes/navbar.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="../styles/btstrp/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <script src="../styles/main.js"></script> -->

    <!-- SIDEBAR -->
    <link href="../dashnav-main/lib/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.min.css">

    <style>
        input[type='text']{
            height: 45px;
        }

        .sidebar-link[aria-expanded="true"] .right-icon {
          transform: rotate(180deg);
        }

        /* .sidebar-nav a{
            color: #333;
        }

        .sidebar-nav a:hover{
            color: #fff;
            background-color: #0d6efd;
        }
        
        .nav-link:hover{
          background-color: #0d6efd;
        }

         .sidebar-logo-text{
          color: rgba(14, 60, 100, 0.953) !important;
        } */


    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <?php 
    
        include("../dashnav-main/index.php");
    
    ?>
    <!-- END SIDEBAR -->

    <div class="content">
    
    <div class="content-body">
        <div class="d-flex m-0">
            <h3 class="text-dark" style="margin-left: -2px;">Add Employee Login Section</h3>
            <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-primary"><a href="#">Manage Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>

        <div class="bg-light small p-4">
            <p class="text-muted mb-4">Please fill up the form in order to add employee records</p>
            <?php 

                if(isset($_SESSION["add_emp_sess_succ"])){
                    echo $_SESSION["add_emp_sess_succ"];
                    unset($_SESSION["add_emp_sess_succ"]);
                }
                if(isset($_SESSION["add_emp_sess_err"])){
                    $error = $_SESSION["add_emp_sess_err"];
                    echo "<p class='text-danger'>$error</p>";
                    unset($_SESSION["add_emp_sess_err"]);
                }
            
            ?>
            <form action="../operations/add-employee.php" class="m-0" method="POST">
                <label for="">Employee ID <span class="text-danger">*</span></label>
                <input type="text" name="employeeId" class="form-control mt-2 mb-3">

                <label for="">First Name <span class="text-danger">*</span></label>
                <input type="text" name="fname" class="form-control mt-2 mb-3">

                <label for="">Last Name <span class="text-danger">*</span></label>
                <input type="text" name="lname" class="form-control mt-2 mb-3">

                <label for="">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control mt-2 mb-3">

                <label for="">Preffered Department <span class="text-danger">*</span></label>
                <select name="department" id="" class="form-select mt-2 mb-3">
                    <option value="">Choose..</option>
                    <option value="Human Resource">Human Resource</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Volunteer">Volunteer</option>
                </select>

                <label for="">Gender <span class="text-danger">*</span></label>
                <select name="gender" id="" class="form-select mt-2 mb-3">
                    <option value="">Choose..</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="">D.O.B <span class="text-danger">*</span></label>
                <input type="date" name="dob" id="" class="form-control mt-2 mb-3">

                <label for="">Contact Number <span class="text-danger">*</span></label>
                <input type="text" name="contactNo" class="form-control mt-2 mb-3">

                <label for="">Address <span class="text-danger">*</span></label>
                <input type="text" name="address" class="form-control mt-2 mb-3">

                <h3>Set Password for Employee Login</h3>
                <label for="">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control mt-2 mb-3">
                <label for="">Confirmation Password <span class="text-danger">*</span></label>
                <input type="password" name="confirm-password" class="form-control mt-2 mb-3">

                <input type="submit" name="register" class="btn btn-primary" value="PROCEED">
            </form>
        </div>

        

        
        <p class="text-center mt-5">©2023 | Employee Login Leave Management System in PHP | Developed By <span class="text-primary">Jon Dev</span> </p>
        </div><!-- content-body -->
    </div><!-- content -->


    <script src="../dashnav-main/lib/jquery/jquery.min.js"></script>
    <script src="../dashnav-main/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dashnav-main/lib/feathericons/feather.min.js"></script>
    <script src="../dashnav-main/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../dashnav-main/assets/js/script.js"></script>

</body>
</html>