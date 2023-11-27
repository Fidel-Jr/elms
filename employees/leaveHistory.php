<?php 

    include "../includes/employeeSidebar.php";
    require_once('../database/dbConnection.php');    

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
        .th{
            padding: 20px !important;
            text-align: center;
            
        }
        td{
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
<main>
        <div class="container p-0">
            <div class="d-flex align-items-center px-4 p-3">
                <h3 class="text-dark">Leave Section</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-2 bg-white p-4 m-4">
                <div class="table-responsive">
                    <h5>Leave History Table</h5>
                    <div class="d-flex justify-content-between mb-3 mt-2 p-0 admin-input" style="margin-left: -14px;">
                        <form action="" class="d-flex align-items-center">
                            <label class="mx-3" for="" style="font-size: 14px;">Show</label>
                            <select name="" id="" class="form-select" style="height: 35px; width: 70px;">
                                <option value="">1</option>
                            </select>
                            <label for="" class="px-3">entries</label>
                        </form>
                        <!-- <div class="d-flex align-items-center">
                            <label for="">Filter </label>
                            <select name="" id="" class="form-select mx-2">
                                <option value="ASC">Ascending Order(#)</option>
                                <option value="ASC">Ascending Order(Name)</option>
                                <option value="ASC">Ascending Order(Username)</option>
                                <option value="ASC">Ascending Order(Email)</option>
                                <option value="ASC">Ascending Order(Date)</option>
                            </select>
                        </div> -->
                        <div class="d-flex align-items-center">
                            <label for="" class="px-3">Search:</label>
                            <input type="text" name="search" id="" class="form-control" style="width: 200px; height: 35px; width: 180px;">
                        </div>
                    </div>


                    <div class="table-responsive mb-3 p-0">
                        
                        <table class="table table-striped table-hover table-table-responsive-sm">
                        <thead>
                            <tr>
                                <th class="table-dark small"># <i onclick="var toggleIconId = document.getElementById('first-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-1-9')) {
    toggleIconId.classList.remove('fa-arrow-down-1-9'); 
    toggleIconId.classList.add('fa-arrow-up-9-1');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-9-1');
    toggleIconId.classList.add('fa-arrow-down-1-9'); 
  } " id="first-icon" class="fa-solid fa-arrow-down-1-9 fa-1x filter" style="margin-left: 10px; color: #28a745;"></i></th>
                                
                                <th class="table-dark small">Type <i onclick="var toggleIconId = document.getElementById('second-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="second-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"> </i></th>
                                
                                <th class="table-dark small">Conditions <i onclick="var toggleIconId = document.getElementById('third-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="third-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"> </i></th>
                                
                                <th class="table-dark small">From <i onclick="var toggleIconId = document.getElementById('fourth-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="fourth-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>

                                <th class="table-dark small">To <i onclick="var toggleIconId = document.getElementById('fifth-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="fifth-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>

                                <th class="table-dark small">Applied <i onclick="var toggleIconId = document.getElementById('sixth-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="sixth-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>

                                <th class="table-dark small">Admin's Remark <i onclick="var toggleIconId = document.getElementById('seventh-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="seventh-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>

                                <th class="table-dark small">Status <i onclick="var toggleIconId = document.getElementById('eight-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="eight-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Medical Leave</td>
                            <td>High Fever.</td>
                            <td>2023-09-29</td>
                            <td>2023-09-27</td>
                            <td>2023-09-29 <br> 00:07:51</td>
                            <td>Accepted at <br> 2023-09-28 <br> 21:38:45</td>
                            <td class="text-success">Approved</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Medical Leave</td>
                            <td>High Fever.</td>
                            <td>2023-09-29</td>
                            <td>2023-09-27</td>
                            <td>2023-09-29 <br> 00:07:51</td>
                            <td>Accepted at <br> 2023-09-28 <br> 21:38:45</td>
                            <td class="text-success">Approved</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Medical Leave</td>
                            <td>High Fever.</td>
                            <td>2023-09-29</td>
                            <td>2023-09-27</td>
                            <td>2023-09-29 <br> 00:07:51</td>
                            <td>Accepted at <br> 2023-09-28 <br> 21:38:45</td>
                            <td class="text-success">Approved</td>
                        </tr>
                    </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between p-0">
                        <p style="font-size: 14px;">Showing 1 to 3 of 3 entries</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>   
                        </nav>
                    </div>

                </div>
            </div>
            
        </div>
        
        <p class="text-center mt-5">©2023 | Employee Leave Management System in PHP | Developed By <span class="text-primary">Jon Dev</span> </p>

    </main>

</body>
</html>