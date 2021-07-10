<?php
session_start();
require_once ('php/CreateDb.php');
require_once ('./php/component.php');

// create instance of Createdb class
$database = new CreateDb("b1ztlbmzquybazmc1q7l", "Producttb");
//logout user
$_SESSION['logged in'] = false;
//check if request has username and password
if (isset($_POST['username']) && isset($_POST['password']) && !isset($_POST['email'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usertb WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($database->con, $sql);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['loggedin'] = true;
        $_SESSION['greet']=true;
        header("Location: index.php");
        exit();
        }
        else{
            $_SESSION['message']="Invalid Credentials.";
        }
}else if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO usertb(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
    $result = mysqli_query($database->con, $sql);
     if(!$result){
         echo'<center><h1>error registering</h1></center';
     }else{
        $_SESSION['message']="Registered Successfully.";
     }


}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopee</title>
     
        <!-- CSS only -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="image/logo-white.png" type="image" sizes="18x18">
    </head>

    <body>
    <?php require_once ("php/header.php"); ?>

    <div class="menu">
        <div class="center-part">
                <div class="box">
            <div class="form-btn">
               <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator">
            </div>
            <form id="LoginForm" action="login.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button  type="submit" class="btn">Login</button>
            </form>

            <form id="RegForm" action="login.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="btn">Register</button>
            </form>
                </div>
       
        </div>
    </div>
    <?php require_once ("php/footer.php"); ?>

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register(){
            RegForm.style.transform = "translateX(-300px)";
           LoginForm.style.transform = "translateX(-300px)";
           Indicator.style.transform = "translateX(100px)";

        }

        function login(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(0px)";
        }
        login();
    </script>

    </body>
    </html>