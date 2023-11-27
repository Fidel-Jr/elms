<?php 

    include("../includes/navbar.php");
    require_once('../database/dbConnection.php');    
    $_SESSION["current_page"] = "pending";
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
        .trash:hover{
            background-color: #e0e0e0;
        }
        .fa-trash-can{
            cursor: pointer;
        }
        .trash-icon{
            display: none;
        }
        .filter{
            cursor: pointer;
        }
        .th{
            font-weight: 400;
            text-align: center;
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
            <div class="d-flex align-items-center px-4 p-3">
                <h3 class="text-dark">Pending Leaves</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="table-responsive mt-2 bg-white p-lg-4 m-lg-4 shadow-sm">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="th">S.N</th>
                            <th class="th">EMPLOYEE ID</th>
                            <th class="th">FULL NAME</th>
                            <th class="th">LEAVE TYPE</th>
                            <th class="th">APPLIED ON</th>
                            <th class="th">CURRENT STATUS</th>
                            <th class="th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-center">1</td>
                            <td class="text-center">2022-00289</td>
                            <td class="text-primary text-center">Fidel S. Colinares Jr.</td>
                            <td class="text-center">Sick Leave</td>
                            <td class="text-center">2022-02-09 23:31:15</td>
                            <td class="text-center" style="color: blue;">Pending <i class="fa fa-spinner"></i> </td>
                            <td class="text-center"><button class="btn btn-secondary ">View Details</button></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">2</td>
                            <td class="text-center">2022-00289</td>
                            <td class="text-primary text-center">Fidel S. Colinares Jr.</td>
                            <td class="text-center">Sick Leave</td>
                            <td class="text-center">2022-02-09 23:31:15</td>
                            <td class="text-center" style="color: blue;">Pending <i class="fa fa-spinner"></i> </td>
                            <td class="text-center"><button class="btn btn-secondary ">View Details</button></td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">3</td>
                            <td class="text-center">2022-00289</td>
                            <td class="text-primary text-center">Fidel S. Colinares Jr.</td>
                            <td class="text-center">Sick Leave</td>
                            <td class="text-center">2022-02-09 23:31:15</td>
                            <td class="text-center" style="color: blue;">Pending <i class="fa fa-spinner"></i> </td>
                            <td class="text-center"><button class="btn btn-secondary ">View Details</button></td>
                        </tr>
                    </tbody>
                </table>
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