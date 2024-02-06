<?php

session_start();

$connect = mysqli_connect("localhost", "root","","lgn");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $select = "SELECT * FROM login_table WHERE email = '$email' AND pass = '$pass' ";
    $ex = mysqli_query($connect,$select  );
    $fetch = mysqli_fetch_array($ex);
    if($fetch){
        header ( "location:welcome.php");
        $_SESSION['email'] = $fetch['email'];
        $_SESSION['pass'] = $fetch['pass'];
    }else{

        echo "<script>alert('Email and Password Does Not Match')</script>";
    }



}



?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <style>
        .container{
            width:500px;
            height: auto;
            background:green;
            box-shadow:4px 5px 10px black;
            padding:10px;
            margin:0 auto;
            text-align:center;

        }
        input{
            width:90%;
            padding:10px;
            margin:10px;
            font-size:1.2rem;

        }
        button{
            width:95%;
            background:red;
            color:white;
             padding:10px;
             font-size:1.2rem;
        }
        h1{
            text-align:center;
            color:white;
        }
    </style>
</head>
<body>
<form method= "POST">
<div class="container">
        <h1>PHP & MYSQL Login/Logout</h1>
        <input type="email" name = "email" placeholder = "Type Your Email"><br><br>
        <input type="password" name = "password" placeholder = "Type Your Password"><br><br>
        <button name = "submit">Submit</button><br><br>
    </div>
</form>
</body>
</html>