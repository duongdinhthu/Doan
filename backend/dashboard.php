<?php

session_start();
ini_set('display_errors', 'off');
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$code = $_POST['code'];
if(isset($code)){
    $project = $project->checkPermission($code);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>LOGIN</title>

</head>
<body>
<div class="card-body">
    <h1 class="card-title">Chào mừng đến với khu vực admin</h1>
    <br>
    <form class="form-group" action="fpthappy.php" method="get">
        <button type="submit" class="btn btn-success mb-3">Login</button>
        <a href="logout.php" class="btn btn-danger mb-3">Log out</a>
        <a href="changePassword.php" class="btn btn-warning mb-3">changePassword</a>
    </form>

</div>
</body>
</html>
