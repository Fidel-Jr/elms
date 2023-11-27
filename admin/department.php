<?php 

    include("../includes/navbar.php");
    require_once('../database/dbConnection.php'); 
    unset($_SESSION['dashboard_section']);   
    $_SESSION["current_page"] = "department";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <script src="../styles/main.js"></script> -->

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <!-- <script src="../styles/btstrp/bootstrap.bundle.min.js"></script> -->

    <!-- SIDEBAR -->
    <link href="../dashnav-main/lib/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.min.css">


    <!-- DATA TABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

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
                <h3 class="text-dark" style="margin-left: -20px;">Department Section</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-2 bg-white p-3 shadow-sm">
                <div class="table-responsive">
                    <div class="col d-flex justify-content-center">
                        <a href="add-department.php" class="btn btn-primary">Add New Department</a>
                    </div>
                    <!-- <div class="d-flex justify-content-between mb-3 mt-2 p-0 admin-input" style="margin-left: -14px;">
                        <form action="" class="d-flex align-items-center">
                            <label class="mx-3" for="" style="font-size: 14px;">Show</label>
                            <select name="" id="" class="form-select" style="height: 35px; width: 70px;">
                                <option value="">1</option>
                            </select>
                            <label for="" class="px-3">entries</label>
                        </form>
                        
                        <div class="d-flex align-items-center">
                            <label for="" class="px-3">Search:</label>
                            <input type="text" name="search" id="" class="form-control" style="width: 200px; height: 35px; width: 180px;">
                        </div>
                    </div> -->


                    <div class="table-responsive mb-3 p-0">
                        
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th class="table-dark small">#</th>
                                
                                <th class="table-dark small">Department</th>
                                
                                <th class="table-dark small">Shortform</th>
                                
                                <th class="table-dark small">Code</th>
                                
                                
                                <th class="table-dark small">Created Date</th>

                                
                                <th class="table-dark"><i class="fa-solid fa-pencil"></i></th>
                                <th class="table-dark"><i class="fa-solid fa-eraser"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>IT</td>    
                                <td>IT-2</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><i class="fa fa-edit" style="color: green;"></i></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>IT</td>    
                                <td>IT-2</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><i class="fa fa-edit" style="color: green;"></i></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>IT</td>    
                                <td>IT-2</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><i class="fa fa-edit" style="color: green;"></i></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>     
                            
                            
                            
                        </tbody>
                        </table>
                    </div>

                   

                </div>
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

<script>
    new DataTable('#example');
</script>