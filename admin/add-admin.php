<?php 

    // session_start();
    include("../includes/navbar.php");
    $_SESSION["current_page"] = "manageAdmin";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <!-- <script src="../styles/btstrp/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="../styles/main.js"></script>

    <!-- SIDEBAR -->
    <link href="../dashnav-main/lib/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.min.css">

    <style>
        input[type='text']{
            height: 45px;
        }
    </style>
</head>
<body>
    
    <?php 
        
        include("../dashnav-main/index.php");

    ?>
    <div class="content">
    
    <div class="content-body">
        <div class="container p-0">
            <div class="d-flex align-items-center p-3">
                <h3 class="text-dark" style="margin-left: -18px;">Add Admin Section</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Manage Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>

            <div class="bg-light small p-3">
                <p class="text-muted mb-4">Please fill up the form in order to add new system administrator</p>
                <form action="../classes/validateAdminForm.php" class="m-0" method="POST">
                    <?php 
                    
                        if(isset($_SESSION['register_succ'])) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> ' . $_SESSION['register_succ'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                            unset($_SESSION['register_succ']);
                        }
                        if(isset($_SESSION['register_err'])) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> ' . $_SESSION['register_err'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        unset($_SESSION['register_err']);
                        }
                    ?>
                    <label for="">Full Name</label>
                    <input type="text" name="fname" class="form-control mt-2 mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control mt-2 mb-3">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control mt-2 mb-3">
                    <h3>Setting Passswords</h3>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control mt-2 mb-3">
                    <label for="">Confirmation Password</label>
                    <input type="password" name="confirm-password" class="form-control mt-2 mb-3">
                    <?php 
                    
                        if(isset($_SESSION['password_err'])) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> ' . $_SESSION['password_err'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        unset($_SESSION['password_err']);
                        }
                    
                    ?>
                    <input type="submit" name="register" class="btn btn-primary" value="PROCEED">
                </form>
            </div>

        </div>
        <p class="text-center mt-5">©2023 | Employee Leave Management System in PHP | Developed By <span class="text-primary">Jon Dev</span> </p>
        </div><!-- content-body -->
    </div><!-- content -->
    
    <script src="../dashnav-main/lib/jquery/jquery.min.js"></script>
    <script src="../dashnav-main/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dashnav-main/lib/feathericons/feather.min.js"></script>
    <script src="../dashnav-main/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../dashnav-main/assets/js/script.js"></script>

</body>
</html>