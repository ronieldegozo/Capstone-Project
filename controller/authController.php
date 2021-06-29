<!-- student login signup controller -->
<?php
session_start();

require './admin/controller/db_conn.php';
require_once 'emailController.php';

$errors = array();
$username = "";
$email = "";

//signup new student
if(isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];


    if(empty($username)){
        $errors['username'] = 'Username is Required';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['username'] = 'Email address is invalid';
    }
    if(empty($email)){
        $errors['email'] = 'email is Required';
    }
    if(empty($password)){
        $errors['password'] = 'password is Required';
    }
    if($password !== $passwordConf){
        $errors['password'] = 'Password not match';
    }

    $emailQuery = "SELECT * FROM users WHERE email =? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if($userCount > 0) {
        $errors['email'] = 'Email is already exists';
    }

    if(count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO users (username,email,verified,token,password) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username,$email, $verified, $token, $password);

        if($stmt->execute()){
            //login
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;

            //VERIFY THRU EMAIL
            sendVerificationEmail($email, $token);


            //flash message
            $_SESSION['message'] = "You are now login";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ./homepage.php');
            exit();
        }else{
            $errors['db_error'] = 'Database error: failed to connect';
        }
 
    }
}


//login click
if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    // $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username)) {
        $errors['username'] = 'Username is Required';
    }
    if(empty($password)){
        $errors['password'] = 'Password is Required';
    }

    if(count($errors) === 0){
    $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
            //login success
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            // $_SESSION['email'] = $email['email'];
            $_SESSION['verified'] = $user['verified'];

                //flash message
            $_SESSION['message'] = "You are now login";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ./homepage.php');
            exit();

    }else{
            $errors['login_fail'] = "Invalid Credentials";
    }
    
    }

}


//logout student
if(isset($_GET['logout'])) {

    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);

    header('Location: ./index.php');
    exit();
}


?>