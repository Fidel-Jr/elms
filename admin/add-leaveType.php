<?php 

    // session_start();
    include("../includes/navbar.php");

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
        
        <div class="d-flex align-items-center p-3">
            <h3 class="text-dark" style="margin-left: -18px;">Leave Section</h3>
            <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-primary"><a href="#">Manage Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>

        <div class="bg-light small p-4">
            <p class="text-muted mb-4">Please fill up the form in order to add new leave type</p>
            <?php 
            
                if(isset($_SESSION['add_sess_succ'])){
                    echo $_SESSION['add_sess_succ'];
                    unset($_SESSION['add_sess_succ']);
                }

                if(isset($_SESSION['add_sess_err'])){
                    $error = $_SESSION["add_sess_err"];
                    echo "<p class='text-danger'>$error</p>";
                    unset($_SESSION['add_sess_err']);
                }
            
            ?>

            <form action="../operations/add-leaveType.php" class="m-0" method="POST">
    
                <label for="">Leave Type</label>
                <input type="text" name="leaveType" class="form-control mt-2 mb-3">
                <label for="">Short Description</label>
                <input type="text" name="description" class="form-control mt-2 mb-3">
            
                <input type="submit" name="add" class="btn btn-primary" value="ADD">
            </form>
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