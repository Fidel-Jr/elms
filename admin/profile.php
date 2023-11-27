<?php 

    include("../includes/navbar.php");

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

    <!-- jQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    

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
            <div class="row border bg-white p-2 align-align-items-center mb-4 mt-2" style="border-radius: 10px;">
                <div class="col">
                    <h4 class="fw-bold mt-3">Profile</h4>
                    <nav style="--bs-breadcrumb-divider: '>';margin-top: 12px;" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-primary"><a href="#">Manage Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
            </div>

        <div class="row">
            <div class="col-3 p-4 bg-white" style="border-radius: 10px; width: 320px;">
                <div class="d-flex justify-content-center">
                    <div class=""><img src="../imgs/homepage-picture.png" width="160px" alt=""></div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 28px; height: 28px; margin-left: -23px; margin-top: 6px; border-radius: 50%; background-color: white; box-shadow: 1px 2px 3px 2px rgba(0, 0, 0, 0.2);">
                        <a href=""><i class="fa fa-pencil" style="color: gray;"></i></a>
                    </div>
                </div>
                <h5 class="text-center">Edem Mcwilliams</h5>
                <p class="text-center">Information Technologies</p>
                <hr>
                <h5 style="margin-bottom: 35px;">Contact Information</h5>
                <p style="line-height: 0;">Email Address:</p>
                <p style="margin-bottom: 25px;">james@gmail.com</p>
                <p style="line-height: 0;">Phone Number:</p>
                <p style="margin-bottom: 25px;">8587944255</p>
                <p style="line-height: 0;">My Role:</p>
                <p style="margin-bottom: 25px;">Admin</p>
                <p style="line-height: 0;">Address:</p>
                <p style="margin-bottom: 25px;">Licanan</p>

            </div>

            <div class="col bg-white p-4" style="margin-left: 30px; border-radius: 10px;">
                <h5>Edit Your Personal Setting</h5>
            </div>
            
        </div>

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
    $(".fa-pencil").hover(function(){
        $(this).css("color","#007bff");
    })
    $(".fa-pencil").mouseleave(function(){
        $(this).css("color","gray");
    })
</script>