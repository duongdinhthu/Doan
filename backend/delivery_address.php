<?php
session_start();
//kiểm tra session
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$username = $_GET['username'];
$money = $_GET['money'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$phone=$_POST['phone'];
$address= $_POST['address'];
    $update = $project->payTheBill($name,$phone,$address,$username);
    echo "You have successfully purchased with the amount:$money ";
}
if (isset($_GET['money1'])){
    $money1=$_GET['money1'];
    $updatemoney=$project->updateMoney($money1,$username);
}
$infor= $project->inforCustomerByUser($username);

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
    <a href="home.php" class="btn btn-primary">Back home</a>
    <?php foreach ($infor

    as $infor): ?>
    <h2>
        Edit Information Customer</h2>
    <form action="" method="post">
        <label for="name" >Name </label>
        <input name="name" type="text" id="name" required class="form-control" value="<?php echo$infor['name'] ?>">
        <label for="phone" >Phone </label>
        <input name="phone" type="text" id="phone" required class="form-control" value="<?php echo$infor['phone']?>">
        <label for="address" >Address </label>
        <input name="address" type="text" id="address" required class="form-control" value="<?php echo$infor['address'] ?>">
        <br>
        <button class="btn btn-success" type="submit" >Pay the bill</button>

    </form>
    <?php endforeach; ?>
    <br>

</div>
</body>
</html>
