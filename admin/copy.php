<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->

    <title>DashNav - Dashboard Sidebar Navigation</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../dashnav-main/lib/remixicon/fonts/remixicon.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../dashnav-main/assets/css/style.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../styles/btstrp/bootstrap.min.css">
    <script src="../styles/btstrp/bootstrap.bundle.min.js"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../styles/style.css">

    <!-- JQUERY -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <style>
        /* .sidebar-link[aria-expanded="true"] .right-icon {
          transform: rotate(180deg);
        }

        .sidebar-nav a{
            color: #333;
        }

        .sidebar-nav a:hover{
            color: #fff;
            background-color: #0d6efd;
        }
        
        .nav-link:hover{
          background-color: #0d6efd;
        } */

        /* .sidebar-logo-text{
          color: rgba(14, 60, 100, 0.953) !important;
        } */

        /* .nav-link:active{
          color: white;
        } */

        @media (min-width:1253px){
          .sidebar{
            margin-top: 70px;
          }
        }

        .sidebar{
          width: 260px;
        }
        
    </style>

  </head>
  <body class="skin-base animate">

    <div class="sidebar">
      <div class="sidebar-header" style="margin-top: 3px;">
        <a href="#" class="sidebar-logo"><span></span></a>
        <a href="#" class="sidebar-logo-text"><span>ELMS</span></a>
      </div><!-- sidebar-header -->
      <hr style="color: #90A1BC;">
      <div class="sidebar-search mt-4">
        <div class="search-body">
          <i data-feather="search"></i>
          <input type="text" class="form-control" placeholder="Search...">
        </div><!-- search-body -->
      </div><!-- sidebar-search -->
      <div class="sidebar-body">
        <nav class="nav-sidebar">
          <div>
            <a href="#" class="nav-link active"><i data-feather="package"></i><span>Dashboard</span></a>
            <a href="../admin/employees.php" class="nav-link"><i data-feather="monitor"></i><span>Employee Section</span></a>
            <a href="../admin/department.php" class="nav-link"><i data-feather="shopping-bag"></i><span>Department Section</span></a>
            <a href="../admin/leave-section.php" class="nav-link"><i data-feather="file-text"></i><span>Leave Type</span></a>
          </div>
          <div>
          <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i data-feather="file-text"></i><span>Manage Leave</span>
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
          </div>
          <div>
            <a href="../admin/add-admin.php" class="nav-link"><i data-feather="briefcase"></i><span>Manage Admin</span></a>
          </div>
        </nav>

        
      </div><!-- sidebar-body -->
      
    </div><!-- sidebar -->

    <div class="content">
      <div class="content-header">
        <a id="contentMenu" href="#" class="content-menu d-none d-lg-flex"><i data-feather="menu"></i></a>
        <a id="mobileMenu" href="#" class="content-menu d-lg-none"><i data-feather="menu"></i></a>
      </div>
      <!-- content-header -->
      <div class="content-body">
        
      </div>
      <!-- content-body -->
    </div>
    <!-- content -->


    <script src="../dashnav-main/lib/jquery/jquery.min.js"></script>
    <script src="../dashnav-main/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../dashnav-main/lib/feathericons/feather.min.js"></script>
    <script src="../dashnav-main/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="../dashnav-main/assets/js/script.js"></script>

  </body>
</html>