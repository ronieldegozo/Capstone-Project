<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
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
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Add Student </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Add Category </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Category List </a></li>
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