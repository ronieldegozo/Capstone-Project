<?php
    require_once 'controller/authController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./public/assets/img/neu.png" rel="icon">
    <link rel="stylesheet" href="./public/register/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="inner ">
        <div class="image-holder">
            <img src="./public/register/images/register.jpg" alt="">
        </div>
        <form action="register.php" method="POST" class="mt-4">
            <h3><strong>Student Registration Form</strong></h3>

<!-- register validation error -->
            <?php if(count($errors) > 0): ?>
                <?php foreach($errors as $error): ?>
            <div class="alert alert-danger alert-dismissible fade show" type="button" class="close" data-dismiss="alert" aria-label="Close" style="    font-size: 12px;">
                    <strong><?php echo $error?></strong>
            </div>
            <?php endforeach; ?>
            <?php endif ?>

            <div class="form-wrapper">
              <input  type="text"
              id="username"
              name="username"
              value="<?php echo $username; ?>"
              class="form-control"
              placeholder="Enter Username"/>
          </div>

          <div class="form-wrapper">
            <input   type="email"
            id="email"
            name="email"
            value="<?php echo $email; ?>"
            class="form-control"
            placeholder="Enter Email"/>
           </div>

            <div class="form-wrapper">
                <input   type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="Enter Password"/>
            </div>

            <div class="form-wrapper">
                <input   type="password"
                id="passwordConf"
                name="passwordConf"
                class="form-control"
                placeholder="Confirm Password"/>
            </div>

            <button type="submit" name="signup-btn">Register</button>
            <div class="footer">
              <h5 class="mt-2">Have an account? <a href="index.php" style="text-decoration: none;" class="text-reset">Login here</a></h5>
            </div>
        </form>

    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>