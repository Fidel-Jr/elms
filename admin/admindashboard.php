<?php 

    include("../includes/navbar.php");
    require_once('../database/dbConnection.php');    
    unset($_SESSION['dashboard_section']);
    $_SESSION["current_page"] = "adminDashboard";

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

    <!-- CUSTOM CSS -->
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

    <!-- CHART JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

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
        .report-box{
            margin-bottom: 10px;
            border-radius: 10px !important;
        }
        
        @media (min-width: 1253px) {
            .report-box{
                width: 240px;
            }
        }

        @media(min-width: 1824px) {
            .report-box{
                width: 250px; 
            }
        }
        .report-box-2{
            /* margin-right: 2px; */
            margin-bottom: 10px;
            border-radius: 10px !important;
            width: 320px !important;
            /* height: fit-content;  */
        }
        #myChart{
            width: 270px;
        }
    </style>
</head>
<body>
    
    <!-- SIDEBAR SECTION -->
    <?php 
        include("../dashnav-main/index.php");
    ?>
    <!-- /SIDEBAR SECTION -->

    <div class="content"> 
        <!-- content -->
        <div class="content-body">
            <!-- content body -->

            <!-- FIRST ROW -->
            <div class="row bg-white align-items-center m-2 shadow-sm mb-4" style="border-radius: 10px;">
                <div class="col-lg-3 col-sm-12 col-md-2">
                    <img src="../imgs/homepage-picture.png" width="300px" alt="">
                </div>
                <div class="col-lg-6 mx-lg-5">
                    <h6 style="font-size: 20px; line-height: 0.8; color: rgba(14, 60, 100, 0.953);">Welcome Back</h6>
                    <h2 class="fw-bold" style="color: rgba(14, 60, 100, 0.953);">James Ryan Villanueva,</h2>
                    <p>you are in an institution established to serve the wider Christian community in Ghana and Africa.</p>
                </div>
            </div>

            <h3 class="fw-bold mb-4 m-1">Data Information</h3>

            <!-- SECOND ROW -->
            <div class="row m-2 justify-content-between mb-4">
                <div class="col-2 bg-white report-box shadow-sm">
                    <div class="row justify-content-around align-items-center px-1">
                        <div class="col-9 mt-3">
                            <p style="line-height: 0.8; font-size: 24px;" class="fw-bold">3</p>
                            <p class="text-muted">Pending Leave</p>
                        </div>
                        <div class="col-3 border d-flex justify-content-center" style="border-top-right-radius:10px; border-bottom-right-radius:  10px; margin:0; padding: 52px 0; background-color: rgba(14, 60, 100, 0.953);">
                            <i class="fa fa-user fa-lg" style="color: white;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-2 bg-white report-box shadow-sm">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-9 col-md-6 col-sm-9 mt-3">
                            <p style="line-height: 0.8; font-size: 24px;" class="fw-bold">3</p>
                            <p class="text-muted">Approved Leave</p>
                        </div>
                        <div class="col-3 border d-flex justify-content-center" style="border-top-right-radius:10px; border-bottom-right-radius:  10px; background-color: blue; margin:0; padding: 52px 0; background-color: rgba(14, 60, 100, 0.953);">
                            <i class="fa fa-user fa-lg" style="color: white;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-2 bg-white report-box shadow-sm">
                    <div class="row justify-content-between align-items-center px-1">
                        <div class="col-9 mt-3">
                            <p style="line-height: 0.8; font-size: 24px;" class="fw-bold">3</p>
                            <p class="text-muted">Rejected Leave</p>
                        </div>
                        <div class="col-3 border d-flex justify-content-center" style="border-top-right-radius:10px; border-bottom-right-radius:  10px; background-color: blue; margin:0; padding: 52px 0; background-color: rgba(14, 60, 100, 0.953);">
                            <i class="fa fa-user fa-lg" style="color: white;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 bg-white report-box shadow-sm">
                    <div class="row justify-content-around align-items-center px-1">
                        <div class="col-9 mt-3">
                            <p style="line-height: 0.8; font-size: 24px;" class="fw-bold">3</p>
                            <p class="text-muted">Total Employees</p>
                        </div>
                        <div class="col-3 border d-flex justify-content-center" style="border-top-right-radius:10px; border-bottom-right-radius:  10px; margin:0; padding: 52px 0; background-color: rgba(14, 60, 100, 0.953);">
                            <i class="fa fa-user fa-lg" style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- THIRD ROW -->
            <div class="row m-2 justify-content-between mb-4" style="height: fit-content;">
                <div class="col-lg-3 col-sm-12 p-4 bg-white report-box-2 shadow-sm">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div>
                            <h5 class="mb-3">New Leave Requests</h5>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                        </div>    
                        
                        <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="fa fa-eye fa-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 p-4 bg-white report-box-2 shadow-sm">
                    <div class="d-flex justify-content-between align-items-baseline">    
                        <div class="">
                            <h5 class="mb-3">Leave Trends</h5>
                            
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="fa fa-eye fa-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 p-4 bg-white report-box-2 shadow-sm">
                    <div class="d-flex justify-content-between align-items-baseline"> 
                        <div>
                            <h5 class="mb-3">Department Heads</h5>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="border border-dark" style="margin-right: 5px; width: 50px; height: 50px; border-radius: 50%;"></div>
                                <div class="pt-3 pb-0">
                                    <h6 style="line-height: 0;">Niki Selene</h6>
                                    <p class="text-muted">nikiselene@gmail.com</p>
                                    <button class="btn btn-dark">Details</button>
                                </div>
                            </div>
                        </div>   
                        
                        <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="fa fa-eye fa-sm"></i></a>
                    </div>
                </div>
            </div>

            <!-- FOURTH ROW -->

            <div class="row m-2 bg-white p-4 table-responsive" style="border-radius: 10px;">
            <h3 class="fw-bold mb-4" style="color: rgba(14, 60, 100, 0.953);;">LATEST LEAVE APPLICATIONS</h3>

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);">#</th>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);">Leave Type</th>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);">Description</th>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);">Created</th>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);"><i class="fa-solid fa-pencil"></i></th>
                            <th class="small text-white" style="background-color:  rgba(14, 60, 100, 0.953);"><i class="fa-solid fa-eraser"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>1</td>
                            <td>Sick Leave</td>
                            <td>Not feeling well</td>
                            <td>2022-22-07 19:29:59</td>
                            <td><i class="fa fa-edit" style="color: green;"></i></td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sick Leave</td>
                            <td>Not feeling well</td>
                            <td>2022-22-07 19:29:59</td>
                            <td><i class="fa fa-edit" style="color: green;"></i></td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sick Leave</td>
                            <td>Not feeling well</td>
                            <td>2022-22-07 19:29:59</td>
                            <td><i class="fa fa-edit" style="color: green;"></i></td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete?');" href=""><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                            </td>
                        </tr>    
                    </tbody>
                </table>
            </div>
            

            <p class="text-center mt-5">©2023 | Employee Leave Management System in PHP | Developed By <span class="text-primary">Ina Mocha</span> </p>
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
    new DataTable('#example')

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ['Sick', 'Casual', 'Medical', 'Maternity', 'Religious Holidays', 'Voting'],
        datasets: [{
            label: '# of Avg',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

</script>