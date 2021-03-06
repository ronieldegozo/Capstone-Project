
<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username'])) {

 ?>

<!-- nav -->
<?php include './includes/header.php';?>

<!-- nav -->
<?php include './includes/nav.php';?>


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">

    <!-- sidebar -->
<?php include './includes/sidebar.php';?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div id="clockdate">
                  <div class="clockdate-wrapper">
                    <div id="clock"></div>
                    <div id="date"><?php echo date('l, F j, Y'); ?></div>
                  </div>
                </div>`
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Exam</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h4> Pie Graph </h4>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Student</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h4>Number of Student Register</h4>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Total Students Done Exam</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <h4>Percentage of Student Done exam</h4>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Admins</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h4>Number of Admin</h4>
                  </div>  
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
 <!-- footer -->
<?php include './includes/footer.php';?>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>