<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
	
	<link rel="shortcut icon" href="../public/assets/img/neu.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<div class="card mt-5" style="width:30rem;margin: 0 auto;float: none; margin-bottom: 10px; " >
    <div class="card-header">Login Admin</div>
    <div class="card-body">

	<div class="form-group">
		<form action="login.php" method="post">
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<p class="error"><?php echo $_GET['error']; ?></p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
	
			<?php } ?>
			<label>Username</label>
			<input type="text"class="form-control" name="uname" placeholder="User Name"><br>

			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password"><br>
			
			<button type="submit"  class="btn btn-success mt-2 float-right">Sign in</button>
			<a href="../index.php" class="mt-4">Return</a>
		</form>
	</div>


    </div>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>