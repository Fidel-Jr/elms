<?php 

    // session_start();
    // include "../includes/adminSidebar.php";  
    // if(empty($_SESSION['username']) && empty($_SESSION['password'])){
    //     header("Location: ./admin/index.php");
    // }    
    
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

    <!-- <link href="../dashnav-main/lib/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.min.css"> -->

</head>
<body>
    
    <main>
        <div class="container-fluid border">
            <div class="row justify-content-center p-3">
            <div class="d-flex align-items-center px-2 p-2">
                <h3 class="text-dark">Dashboard</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Manage Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>
                <div class="col-sm-4 col-lg- col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-briefcase fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Available Leave Types</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Leave Types</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-building-user fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Available Departments</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Employee Departments</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-users-gear fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Registered Employees</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Active Employees</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-x fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Total Declined Requests</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Request Declined</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-check fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Total Approved Requests</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Request Approved</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 mb-3">
                    <div class="card card-box" style="width: 20.5rem;">
                        <div class="content" style="display: flex; justify-content: flex-start; align-items: center;">
                            <div id="design" class="bg-primary border-primary" style="display: flex; justify-content: center; align-items: center; width: 65px;height: 55px; border:1px solid black; border-bottom-right-radius: 32px; border-top-right-radius: 15px;">
                                <i class="fa-solid fa-spinner fa-2x fa-white" style="color: white;"></i>
                            </div>
                            <h6 style="margin-top: 10px; margin-left: 20px;">Total Pending Requests</h6>
                        </div>
                        
                        <div class="card-body d-flex justify-content-between" style="margin-left: 68px;">
                            <h5 class="card-title" style="font-size: 50px;">12</h5>
                            <h5 class="sub-heading" style="font-size: 15px; margin-left: 40px;">Request Approved</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center p-3 m-3 mt-3" style="background-color: white; border-radius: 4px;">
                
                <table class="table table-light table-striped table-bordered m-4 table-table-responsive-sm bg-white">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Name</th>
                            <th>Name</th>
                            <th>Name</th>
                            <th>Name</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                        </tr>
                        <tr>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                        </tr>
                        <tr>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                        </tr>
                        <tr>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                            <td>My Name</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            
        </div>
    </main>

    
    
    

</body>
</html>