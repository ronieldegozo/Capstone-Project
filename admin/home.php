
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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


 <!-- footer -->
<?php include './includes/footer.php';?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>