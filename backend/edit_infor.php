<?php
session_start();

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
<body>
<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>

    <h2>
        Edit Information Customer</h2>
    <form action="" method="post">
        <label for="name" >Name </label>
        <input name="name" type="text" id="name" required class="form-control" value="<?php echo$name ?>">
        <label for="phone" >Phone </label>
        <input name="phone" type="text" id="phone" required class="form-control" value="<?php echo$phone ?>">
        <label for="address" >Address </label>
        <input name="address" type="text" id="address" required class="form-control" value="<?php echo$address ?>">
        <br>
        <button class="btn btn-success" type="submit" >Edit</button>
        <a href="infor_customer.php" class="btn btn-primary">Back</a>
    </form>

    <br>



</div>
</body>
</html>

