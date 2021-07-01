
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
     <a href="home.php" style="text-decoration: none"><h4>CCS</h4></a>
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
              Admin  <?php echo $_SESSION['fullname']; ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item">
          <i class="ti-settings text-primary"></i>
          Settings
        </a>
        <a class="dropdown-item" data-toggle="modal" data-target="#logoutAdmin">
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



          <!-- Logout Modal for Admin -->
<div class="modal fade" id="logoutAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                  <a class="btn btn-primary" href="logout.php">Logout</a>
              </div>
          </div>
      </div>
</div>
