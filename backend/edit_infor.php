<?php
session_start();
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$username = $_GET['username'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name1 = $_POST['name'];
    $phone1 = $_POST['phone'];
    $address1 = $_POST['address'];
    $update = $project->updateInforCustomer($name1,$phone1,$address1,$username);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>   Edit Information Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: #FEF7EF;
    }
    .container{
        background-color: white;
        box-shadow: 2px 2px 2px #cccccc;
        padding: 20px 30px;
        margin-top: 10px;
        border-radius: 20px;
    }
    form input{
        margin-bottom: 10px;
        outline: none;
        border-radius: 10px;
        padding: 5px 10px;
        border: 1px solid grey;
    }
</style>
<body>
<a href="logout.php" class="btn btn-outline-danger" style="border-radius: 10px; margin-top: 50px; margin-left: 220px">Logout</a>
<div class="container">
    <h2 style="color: #f29f33">
        Edit Information Customer</h2>
    <form action="" method="post">
        <label for="name" >Name </label><br>
        <input name="name" type="text" id="name" required value="<?php echo$name ?>"><br>
        <label for="phone" >Phone </label><br>
        <input name="phone" type="text" id="phone" required value="<?php echo$phone ?>"><br>
        <label for="address" >Address </label><br>
        <input name="address" type="text" id="address" required value="<?php echo$address ?>"><br>
        <br>
        <button class="btn btn-outline-primary" type="submit" style="border-radius: 10px;">Edit</button>
        <a href="infor_customer.php" class="btn btn-outline-success" style="border-radius: 10px;">Back</a>
    </form>

    <br>



</div>
</body>
</html>

