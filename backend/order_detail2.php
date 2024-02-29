<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$code = $_GET['code'];
$username = $_GET['username'];
$update = $project->updateTotalByCode($username,$code);

$show = $project->totalShowByCode($username,$code);
$detail = $project->detailCodeOrder($username,$code);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Title</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Dothietyeu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
<a class="btn btn-success" href="fpthappy1.php">Back</a>
<table class="table">
    <h1>
        Code order:<?php echo $code ?></h1>
    <thead>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>List Price($)</th>
        <th>Quantity</th>
        <th>Total Price($)</th>
        <th>Payment</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($detail as $detail):
        ?>
        <tr>
            <td><img src="<?php echo $detail["image"]; ?>"style="width: 70px" class="card-img-top" alt="...">
            </td>
            <td><?php echo $detail['name'] ?></td>
            <td><?php echo $detail['list_price'] ?></td>
            <td><?php echo $detail['SUM(c.quantity)'] ?></td>
            <td><?php echo $detail['SUM(c.total_price)'] ?></td>
            <td><?php echo $detail['payment'] ?></td>
            <td><?php echo $detail['status'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<h1 style="margin-left: 1300px"><?php echo "$".$show; ?></h1>
</body>
</html>
