<?php 

    include "../includes/adminSidebar.php";
    require_once('../database/dbConnection.php');

    $sql = "SELECT * FROM managertbl";
    $query = $conn->query($sql);
    

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
    
    <main>
        <div class="container p-0">
            <div class="d-flex align-items-center px-4 p-3">
                <h3 class="text-dark">Admin Section</h3>
                <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px; margin-left: 20px;" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item text-primary"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="row mt-2 bg-white p-4 m-4 shadow-sm">
                <div class="table-responsive">
                    <div class="col d-flex justify-content-center">
                        <a href="add-admin.php" class="btn btn-primary">Add New Administrator</a>
                    </div>
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
                        <?php 
                        
                            if(isset($_SESSION['delete_succ'])) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> ' . $_SESSION['delete_succ'].'
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                unset($_SESSION['delete_succ']);
                            }
                            if(isset($_SESSION['delete_err'])) {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Failed!</strong> ' . $_SESSION['delete_err'].'
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                unset($_SESSION['delete_err']);
                            }
                        
                        ?>
                        <table class="table table-striped table-hover table-table-responsive-sm">
                        <thead>
                            <tr>
                                <th class="table-dark small"># <i onclick="var toggleIconId = document.getElementById('f-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-1-9')) {
    toggleIconId.classList.remove('fa-arrow-down-1-9'); 
    toggleIconId.classList.add('fa-arrow-up-9-1');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-9-1');
    toggleIconId.classList.add('fa-arrow-down-1-9'); 
  } " id="f-icon" class="fa-solid fa-arrow-down-1-9 fa-1x filter" style="margin-left: 10px; color: #28a745;"></i></th>
                                
                                <th class="table-dark small">Name <i onclick="var toggleIconId = document.getElementById('s-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="s-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"> </i></th>
                                
                                <th class="table-dark small">Username <i onclick="var toggleIconId = document.getElementById('t-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="t-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"> </i></th>
                                
                                <th class="table-dark small">Email <i onclick="var toggleIconId = document.getElementById('ft-icon');
  if(toggleIconId.classList.contains('fa-arrow-down-a-z')) {
    toggleIconId.classList.remove('fa-arrow-down-a-z'); 
    toggleIconId.classList.add('fa-arrow-up-z-a');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-z-a');
    toggleIconId.classList.add('fa-arrow-down-a-z'); 
  }" id="ft-icon" class="fa-solid fa-arrow-down-a-z filter" style="margin-left: 10px; color: #28a745;"></i></th>
                                <?php $first = '1'; $second = '9'; ?>
                                
                                <th class="table-dark small">Account Created On <i onclick="var toggleIconId = document.getElementById('ft2-icon');
      if(toggleIconId.classList.contains('fa-arrow-down-1-9')) {
    toggleIconId.classList.remove('fa-arrow-down-1-9'); 
    toggleIconId.classList.add('fa-arrow-up-9-1');
  } else {
    toggleIconId.classList.remove('fa-arrow-up-9-1');
    toggleIconId.classList.add('fa-arrow-down-1-9'); 
  }" id="ft2-icon" class="fa-solid fa-arrow-up-<?php echo $first; ?>-<?php echo $second;?> filter" onclick="<?php $temp = $first; $first = $second; $second = $temp; ?>" style="margin-left: 10px; color: #28a745;"></i></th>
                                
                                <th class="table-dark"><i class="fa-solid fa-eraser"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $counter = 0;
                            while($row = $query->fetch_assoc()){
                                $counter+=1;
                                ?>
                            <tr>
                                <!-- <td onclick="if(document.getElementById('trash-row').hasAttribute('class')){document.getElementById('trash-row').removeAttribute('class');} 
                                else {document.getElementById('trash-row').classList.add('trash-icon')};
                                " style="cursor: pointer;"><i class="fa-solid fa-square-plus" style="color: #28a745; margin-right: 10px;"></i>
                                    
                                </td> -->
                                <td><?php echo $counter  ?></td>
                                <td> <?php echo $row["fullname"];  ?> </td>
                                <td><?php echo $row["username"];  ?></td>    
                                <td><?php echo $row["email"];  ?></td>
                                <td><?php echo $row["regDate"];  ?></td>
                                <td colspan="2">
                                    <a onclick="return confirm('Are you sure you want to delete?');" href="removeAdmin.php?id=<?php echo $row['id']; ?>>"><i class="fa fa-trash-can fa-1x" style="color:red"></i></a>  
                                </td>
                            </tr>
                            
                           
                            <?php } ?>
                        
                                    
                                
                            
                            
                            
                        </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between p-0">
                        <p style="font-size: 14px;">Showing 1 to <?php echo $counter ?> of <?php echo $counter ?> entries</p>
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