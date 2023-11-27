<?php 

    session_start();
    if(empty($_SESSION['username']) && empty($_SESSION['password'])){
        header("Location: ./admin/index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-lg-top">
    <div class="container-fluid p-2">
    <div id="val"></div>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>
        <a class="navbar-brand px-2" href="../index.php">ELMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
            </li>
        </ul>
        
        <div class="d-flex me-5">
            <ul class="navbar-nav mb-2 mb-lg-0 me-5 user-menu">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADMIN
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li> -->
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="../operations/logout.php">Log Out</a></li>
                </ul>
                </li>
            </ul>
        </div>
        
        </div>
    </div>
    </nav>

    <div class="offcanvas offcanvas-start side sidebar-nav"  data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-body p-0 mt-3">
                <nav>
                    <ul class="navbar-nav">
                        <li>
                        <div class="d-flex align-items-center offcanvas-title text-muted text-muted small fw-bold text-uppercase px-2 mb-1">
                        <div class="" style="width: 35px; height: 35px; border: 1px solid;margin-right: 10px; border-radius: 50%;"></div>
                        <?php echo $_SESSION['id'] . " " . $_SESSION['username']; ?>
                        <button type="button" style="margin-left: 120px;" class="btn-close text-reset x-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        </li>
                        <li>
                            <a href="../admin/admindashboard.php" class="nav-link px-3 active">
                                <span class="me-2">
                                    <i class="fa fa-dashboard"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <hr class="dropdown-divider"/>
                        </li>
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3 mb-1">
                                Interface
                            </div>
                        </li>
                        <li>
                            <a href="../admin/employees.php" class="nav-link px-3 active">
                                <span class="me-2">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span>Employee Section</span>
                            </a>
                        </li>
                        <li>
                            <a href="../admin/department.php" class="nav-link px-3 active">
                                <span class="me-2">
                                    <i class="fa fa-box"></i>
                                </span>
                                <span>Department Section</span>
                            </a>
                        </li>
                        <li>
                            <a href="../admin/leave-section.php" class="nav-link px-3 p-2 active">
                                <span class="me-2">
                                    <i class="fa fa-diagram-next"></i>
                                </span>
                                <span>Leave Types</span>
                            </a>
                        </li>
                        <li>
                            <div class="text-muted small fw-bold px-3 mt-2">
                                Manage
                            </div>
                        </li>
                        <li>
                            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="me-2"><i class="fa fa-list-check"></i></span>
                                <span>Manage Leave</span>
                                <span class="ms-auto right-icon"><i class="fa fa-chevron-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <div>
                                    <ul class="navbar-nav ps-3">
                                        <li>
                                            <a href="../admin/pending-history.php" class="nav-link px-3">
                                                <span class="me-2"><i class="fa fa-spinner"></i></span>
                                                <span>Pending</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="../admin/approved-history.php" class="nav-link px-3">
                                                <span class="me-2"><i class="fa fa-check"></i></span>
                                                <span>Approve</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="../admin/declined-history.php" class="nav-link px-3">
                                                <span class="me-2"><i class="fa fa-circle-xmark fa-light"></i></span>
                                                <span>Decline</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="../admin/leave-history.php" class="nav-link px-3">
                                                <span class="me-2"><i class="fa fa-clock-rotate-left fa-light"></i></span>
                                                <span>History</span>
                                            </a>
                                            
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="../admin/manage-admin.php" class="nav-link px-3">
                                <span class="me-2"><i class="fa fa-lock fa-light"></i></span>
                                    <span>Manage Admin</span>
                            </a>
                                            
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>


</body>
</html>