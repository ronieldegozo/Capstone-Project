<?php require_once './controller/authController.php';

//verify using token
if(isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

//protected for the registered student only
if(!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit();
}
?>

<!-- includes student header -->
<?php require_once 'student/includes/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->

    <?php if($_SESSION['verified']): ?>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homepage.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas ti-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Welcome Student <?php echo $_SESSION['username']; ?> </div>
            </a>
            <hr class="sidebar-divider my-0">
                   <!-- IF STUDENT IS NOW VERIFIED -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                <i class="fas ti-dashboard"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="fas ti-reload"></i>
                    <span>Exam Process</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="fas ti-write"></i>
                    <span>Student Accuracy</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                <i class="fas ti-download"></i>
                    <span>Download Performance</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <?php endif; ?>


        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong><?php echo $_SESSION['username']; ?></strong></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas ti-power-off fa-sm fa-fw mr-2 text-black-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

            <div class="container-fluid">
                <h3 class="text-center">Content here</h3>
                                                    <!-- display message -->
                <?php if(isset($_SESSION['message'])): ?>
                    <div class="card " style="width: 20rem; margin: 0 auto; /* Added */float: none; /* Added */ margin-bottom: 10px; /* Added */">
                        <div class="card-body">
                                    <div class="alert alert-success alert-dismissible fade show" type="button" class="close" data-dismiss="alert" aria-label="Close" style="    font-size: 12px;">
                                        <?php 
                                            echo $_SESSION['message']; 
                                            unset($_SESSION['message']);
                                            unset($_SESSION['alert-class']);
                                        ?>
                                    </div>
                        </div>
                    </div>
                <?php endif; ?>


                    <?php if(!$_SESSION['verified']): ?>
                        <div class="card " style="width: 20rem; margin: 0 auto; /* Added */float: none; /* Added */ margin-bottom: 10px; /* Added */">
                            <div class="card-body">
                    
                                <div class="alert alert-warning text-center">
                                    <strong><h3>Verify your email First to proceed to Student Dashboard</h3></strong>
                                    <!-- <strong><?php echo $_SESSION['email']; ?></strong> -->
                                </div>
                        
                            </div>
                        </div>
                    <?php endif; ?>
            </div>

        </div>
    </div>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  
                    <a  class="btn btn-primary" href="homepage.php?logout=1" class="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- includes student footer -->
<?php require_once 'student/includes/footer.php'; ?>