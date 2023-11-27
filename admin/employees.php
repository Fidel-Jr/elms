<?php 

    require_once('../database/dbConnection.php');
    unset($_SESSION['dashboard_section']);
    include("../includes/navbar.php");
    $_SESSION["current_page"] = "employees";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <!-- <script src="../styles/btstrp/bootstrap.bundle.min.js"></script> -->

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../styles/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- SIDEBAR -->
    <link href="../dashnav-main/lib/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.min.css">


    <!-- DATA TABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    
    
</head>
<body>
    <?php 
    
        include("../dashnav-main/index.php");

    ?>
    <div class="content">
    
    <div class="content-body">
        <div class="container p-0">
            <div class="d-flex align-items-center p-3">
                <h3 class="text-dark" style="margin-left: -28px;">Employee Section</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-2 bg-white p-3 shadow-sm">
                <div class="table-responsive">
                    <div class="col d-flex justify-content-center mb-3">
                        <a href="add-employee.php" class="btn btn-primary">Add New Employee</a>
                    </div>
                    <div class="table-responsive mb-3 p-0">
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th class="table-dark small">#</th>
                                
                                <th class="table-dark small">Name</th>
                                
                                <th class="table-dark small">Employee ID</th>
                                
                                <th class="table-dark small">Department</th>
                                
                                
                                <th class="table-dark small">Joined On</th>

                                <th class="table-dark small">Status</th>

                                <th class="table-dark"><i class="fa-solid fa-pencil"></i></th>
                                <th class="table-dark"><i class="fa-solid fa-eraser"></i></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>1</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>2022-00289</td>    
                                <td>Information Technology</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><span class="border bg-success text-white small fw-bold" style="width: fit-content;padding:1px 5px;border-radius: 20px;">Active</span> </td>
                                <td><i class="fa fa-edit" style="color: green;"></i></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>2022-00289</td>    
                                <td>Information Technology</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><span class="border bg-success text-white small fw-bold" style="width: fit-content;padding:1px 5px;border-radius: 20px;">Active</span> </td>
                                <td><i class="fa fa-edit" style="color: green;"></i></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fidel Salonga Colinares Jr.</td>
                                <td>2022-00289</td>    
                                <td>Information Technology</td>
                                <td>2022-22-07 19:29:59</td>
                                <td><span class="border bg-success text-white small fw-bold" style="width: fit-content;padding:1px 5px;border-radius: 20px;">Active</span> </td>
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

//     $('.nav-link').hover(function(){
//     // $(this).css("background-color","#0d6efd")
//     $(this).css("color","white");
//     // alert('Yes');
//     })
    
//     // $('.nav-link').hover(function(){
//     //     $(this).css("color","white");
//     // })

//   $('.nav-link').mouseleave(function(){
//     // $(this).css("background-color","white")
//     $(this).css("color","#627293");
//     // alert('Yes');
//   })

</script>