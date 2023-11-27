<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <script src="../styles/btstrp/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: #edf2ff;
        }
        input[type='text']{
            width: 320px !important;
            height: 45px;
            border-radius: 5px;
        }
        input[type='password']{
            width: 320px !important;
            height: 45px;
            border-radius: 5px;
        }
        .container.d-flex{
            width: 450px !important;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container p-2">
      <a class="navbar-brand" href="#">ELMS</a>
      <a href="../index.php" style="text-decoration: none;">Employee</a>
    </div>
  </nav>

    <div class="container d-flex justify-content-center mt-4 shadow">
        <div class="row text-white" style="background-color: #8655fc; width: fit-content; border-radius: 5px;">
            <div class="mt-2" style="padding: 35px 90px; line-height: 1;">
                <p class="text-center" style="font-size: 25px;">ADMIN PANEL</p>
                <p class="text-center small">Employee Leave Management System</p>
            </div>
            <div class="bg-white d-flex justify-content-center py-5" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                <form action="../operations/adminCheckLogin.php" method="POST">
                    <?php 
                    
                        if(isset($_SESSION['login-err'])) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> ' . $_SESSION['login-err'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        unset($_SESSION['login-err']);
                        }
                        if(isset($_SESSION['login-succ'])) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> ' . $_SESSION['login-succ'].'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        unset($_SESSION['login-succ']);
                        }
                    
                    
                    ?>
                    <input type="hidden" name="userType" value="admin" class="form-control">
                    <input type="text" name="username" placeholder="Username" class="form-control"> <br>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <input type="submit" name="login" value="Submit->" class="form-control btn btn-outline-primary mt-4 p-2 mb-4" style="border-radius: 20px;">
                    <div class="d-flex justify-content-center">
                        <a href="../index.php"><- Go Back</a>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
    

</body>
</html>