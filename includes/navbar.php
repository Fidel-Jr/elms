<?php 

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../styles/style.css">
    <script src="../styles/main.js"></script>

    <!-- BOOTSTRAP -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <style>
        .link:hover{
            background-color: rgba(14, 60, 100, 0.953) !important;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark sticky-lg-top" style="background-color: rgba(14, 60, 100, 0.953);">
        <div class="container-fluid p-2 px-4">
        <div id="val"></div>
            <div class="content-header p-0">
                <a id="contentMenu" href="#" class="content-menu d-none d-lg-flex"><i data-feather="menu"></i></a>
                <a id="mobileMenu" href="#" class="content-menu d-lg-none"><i data-feather="menu"></i></a>
            </div>
        <!-- <button class="btn btn-primary hamburger-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button> -->
            <a class="navbar-brand px-5" href="index.php">Group T</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-white link" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white link" aria-current="page" href="#">Dashboard</a>
                </li>
            </ul>
            
            <div class="d-flex me-5">
                <ul class="navbar-nav mb-2 mb-lg-0 me-5 user-menu">
                    <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADMIN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../admin/profile.php"> <i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Change Password</a></li> -->
                        <!-- <li><hr class="dropdown-divider"></li> -->
                        <li><a class="dropdown-item" href="#"> <i class="fa fa-list" style="margin-right: 5px;"></i> Report</a></li>
                        <li><a class="dropdown-item" href="../operations/logout.php"><i class="fa fa-greater-than" style="margin-right: 5px;"></i> Log Out</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            
            </div>
        </div>
    </nav>

</body>
</html>