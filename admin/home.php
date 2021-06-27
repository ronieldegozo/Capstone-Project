
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="../public/dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../public/dashboard/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="../public/dashboard/css/style.css">

  <link rel="shortcut icon" href="../public/assets/img/neu.png" />
</head>
<body>


<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
           <h5>CCS</h5>
        <!-- <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    Admin  <?php echo $_SESSION['name']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary" ></i>
               Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#student" aria-expanded="false" aria-controls="student">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Manage Student</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="student">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./manage_student/index.php"> List of Student </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Email Student </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Update Student Record </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#question" aria-expanded="false" aria-controls="question">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Manage Questions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="question">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> List of Question </a></li>
                <li class="nav-item"> <a class="nav-link" style="cursor:pointer" data-toggle="modal" data-target="#addquestion"> Add Question </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Update Question </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Delete Question </a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
              <i class="ti-lock menu-icon"></i>
              <span class="menu-title">Manage Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admin">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> List of Admins </a></li>
                <li class="nav-item"> <a class="nav-link" data-toggle="modal" data-target="#createadmin"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Update </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Delete </a></li>
              </ul>
            </div>
          </li>


          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#studaccuracy" aria-expanded="false" aria-controls="studaccuracy">
              <i class="ti-files menu-icon"></i>
              <span class="menu-title">Student Accuracy</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="studaccuracy">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">  Student Performance  </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Download Performance</a></li> </a></li>

              </ul>
            </div>
          </li>


        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Sales</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Revenue</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Downloads</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Returns</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
              </div>
            </div>
          </div>


<!-- Modal ADD QUESTION -->
<div class="modal fade" id="addquestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">

        <div class="form-group">
          
					<div class="form-row">
            <label for="studnumber"><strong>Question</strong></label>
              <textarea class="form-control" id="question" name="question" placeholder="Input Question" rows="4" cols="50"></textarea>
						</div>

            <label for="studnumber"><strong>Choices A</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Student Number"/>

              <label for="studnumber"><strong>Choices B</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Student Number"/>

              <label for="studnumber"><strong>Choices C</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Student Number"/>

              <label for="studnumber"><strong>Choices D</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Student Number"/>

              <label for="answer">Select Answer</label>
              <select class="form-control" name="" id="">
                <option value="">a</option>
                <option value="">b</option>
                <option value="">c</option>
                <option value="">d</option>
              </select>
              
					</div>
          <button type="submit" class="btn btn-primary">Add Question</button>

        </form>
       </div>
      </div>
    </div>
  </div>




  <!-- Modal ADD NEW ADMIN -->
<div class="modal fade" id="createadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">

        <div class="form-group">
          
            <label for="studnumber"><strong>Full Name</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Full Name"/>

              <label for="studnumber"><strong>Username</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Username"/>

              <label for="studnumber"><strong>Password</strong></label>
							<input  type="text"
							id="studentNumber"
							name="studentNumber"
							class="form-control"
							placeholder="Password"/>
              
					</div>
          <button type="submit" class="btn btn-success">Create Admin</button>
        </form>
       </div>
      </div>
    </div>
  </div>






</div>








          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Sales details</p>
                  <p class="text-muted font-weight-light">Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to to oh. On relation my so addition branched.</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">Purchases</p>
                  <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Status</p>
                      <h3>362</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">New users</p>
                      <h3>187</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Chats</p>
                      <h3>524</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Feedbacks</p>
                      <h3>509</h3>
                    </div> 
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
              </div>
            </div>
          </div>



          



  <script src="../public/dashboard/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="../public/dashboard/js/off-canvas.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../public/dashboard/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>