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
        <form action="#" method="POST" class="mt-4">
            <h3><strong>Student Registration Form</strong></h3>
            <div class="form-wrapper">
                <input  type="text"
                id="fname"
                name="fname"
                class="form-control"
                placeholder="First Name"/>
            </div>

            <div class="form-wrapper">
                <input  type="text"
                id="lname"
                name="lname"
                class="form-control"
                placeholder="Last Name"/>
            </div>

            <div class="form-wrapper">
              <input  type="number"
              id="cnumber"
              name="cnumber"
              class="form-control"
              placeholder="Contact Number"/>
          </div>

          <div class="form-wrapper">
            <input   type="email"
            id="email"
            name="email"
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
            <button type="submit">Register</button>
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