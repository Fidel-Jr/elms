<?php 

    // session_start();
    include "../includes/employeeSidebar.php";
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <script src="../styles/btstrp/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="../styles/main.js"></script>
    <style>
        input[type='text']{
            height: 45px;
        }
        input[type='date']{
            height: 45px;
        }
    </style>
</head>
<body>
    
    <main>
        <div class="container p-0">
            <div class="d-flex align-items-center px-4 p-3">
                <h3 class="text-dark">Apply For Leave Days</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-secondary">Leave Form</li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Add</li> -->
                    </ol>
                </nav>
            </div>

            <div class="bg-light m-4 small p-4">
                <h5>Employee Leave Form</h5>
                <p class="text-muted mb-4">Please fill up the form below.</p>
                <form action="../classes/validator.php" method="POST">
                    <label for="">Starting Date</label>
                    <input type="date" name="date" class="form-control mt-2 mb-4">
                    <label for="">End Date</label>
                    <input type="date" name="email" class="form-control mt-2 mb-4">
                    <label for="">Your Leave Type</label>
                    <select name="leaveType" id="" class="form-select mt-2 mb-4">
                        <option value="">Click here to select any...</option>
                    </select>
                    <label for="">Describe Your Conditions</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control mt-2 mb-3">

                    </textarea>
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
    </main>

</body>
</html>