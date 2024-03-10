<?php
session_start();
ini_set('display_errors', 'off');

include "project.php";
$loginPermissions = new projectFptHappy();
$username=$_POST['username'];
$password=$_POST['password'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginPermissions->accountStaff1($username,$password);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <script src="search.js"></script>
</head>
<body>
<div class="login">
    <div class="text">
        <h2>LOGIN STAFF</h2>
        <hr/>
    </div>
    <form action="" method="post" >
        <label for="username" style="display: none">Username:</label>
        <input name="username" placeholder="Username" type="text" id="username" required><br>
        <label for="password" style="display: none">Password:</label>
        <input name="password" placeholder="Password" type="password" id="password" required>
        <br>
        <br>
        <button type="submit" >Login</button>
    </form>
</div>
</body>
</html>
