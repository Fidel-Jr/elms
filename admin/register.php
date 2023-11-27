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
    <script src="../styles/main.js"></script>
    <style>
        body{
            background-color: #edf2ff;
        }
    </style>
</head>
<body>
    

    <div class="container">
        <center>
        <div class="row bg-white mt-5" style="width: fit-content; height: fit-content;padding: 65px 82px;">
            
            <form action="../classes/validator.php" method="POST" style="margin-top: -30px;">
            
                <h4 class="text-dark mb-4">Admin Panel</h4>
                <p>Employee Leave Management System</p>
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
                <input type="hidden" name="user" value="admin">
                <input type="text" name="username" class="form-control mb-4 pt-2 pb-2" placeholder="Username">
                <input type="password" name="password" class="form-control pt-2 pb-2" placeholder="Password">
                <?php 
                    if(isset($_SESSION['weak_pass'])){
                        $val = $_SESSION['weak_pass'];
                        echo "<p class='text-danger text-start'>$val</p>";
                        unset($_SESSION['weak_pass']);
                    } 
                    
                    
                ?>
                <input type="text" name="fullname" class="form-control mt-4 mb-4 pt-2 pb-2" placeholder="Fullname">
                <input type="email" name="email" class="form-control mb-4 pt-2 pb-2" placeholder="Email">
                <input type="submit" id="liveToastBtn" onclick="trigger()" name="register" value="Register" class="btn btn-outline-primary" style="padding: 10px 70px; border-radius: 20px;">
                
            </form>
            <a href="../index.php"><p class="text-center" style="margin-top: 40px;"><- Go Back</p></a>
        </div>
        
        </center>
        
    </div>
    

</body>
</html>