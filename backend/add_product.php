<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];
$type=$_POST['type'];
$add = $project->addProduct($name,$price,$image,$type);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> List Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div>
    <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">
        ADD PRODUCT</h2>
    <form action="" method="post">
        <label for="name" >Product name </label>
        <input name="name" type="text" id="name" required >
        <label for="price" >Product Price </label>
        <input name="price" type="text" id="price" required >
        <label for="image" >Product Image Links </label>
        <input name="image" type="text" id="image" required >
        <label for="type" >Product type</label>
        <select name="type"  id="type" class="status-select">
            <option value="TP">FOOD</option>
            <option value="CN" >PERSIONAL</option>
            <option value="TY" >ESSENTIAL</option>
            <option value="PACKAGE" >PACKAGE</option>
            <option value="TOUR" >TOUR</option>
            <option value="ORGANIZATIONAL" >ORGANIZATIONAL</option>
        </select>
        <br>
        <br>
        <button class="btn btn-warning" type="submit" >Add</button>
    </form>

</div>
</body>
</html>