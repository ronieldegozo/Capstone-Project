<?php require_once './controller/authController.php';

//protected for the registered student only
if(!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="./public/assets/img/neu.png" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-success">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
        ?>
    </div>
    <?php endif; ?>

    <h3>Welcome Student <?php echo $_SESSION['username']; ?></h3>



    <?php if(!$_SESSION['verified']): ?>
    <div class="alert alert-warning">
        <p>Verify your email first to proceed to student login Page</p>
        <!-- <strong><?php echo $_SESSION['email']; ?></strong> -->
    </div>
    <?php endif; ?>



    <?php if($_SESSION['verified']): ?>
    <button class="btn btn-block btn-lg btn-primary">
        im verified
    </button>
    <?php endif; ?>


    <a href="homepage.php?logout=1" class="logout">Logout</a>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>