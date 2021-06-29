
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./public/assets/img/neu.png" rel="icon">
    <link rel="stylesheet" href="./public/register/style.css">
    <link rel="stylesheet" href="./public/register/style.scss">

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

            <div class="footer mt-3">
              <h5>Have an account? <a href="index.php" class="text-reset">Login here</a></h5>
            </div>
        </form>

    </div>
</div>


</body>



</html>