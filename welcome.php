<?php

session_start();
if($_SESSION['email'] == true){
    echo " <h1> Welcome  $_SESSION[email] </h1>";


}else{

    header ( "location:login.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome Php Profile Page</h1>
</body>
</html>