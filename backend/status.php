<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$day = $_GET['day'];

if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['id'])&& isset($_GET['username'])&&isset($_GET['day'])) {
    $done= $_GET['action'];
    $id = $_GET['id'];
    $username = $_GET['username'];
    $day=$_GET['day'];
    $statusdone = $project->statusDone( $id ,$username,$done,$day);
    echo "<h3>Change the status to done successfully</h3>";
}
if (isset($_GET['action']) && $_GET['action'] === 'delivering' && isset($_GET['id'])&& isset($_GET['username'])&&isset($_GET['day'])) {
    $id = $_GET['id'];
    $username = $_GET['username'];
    $delivering= $_GET['action'];
    $day=$_GET['day'];
    $statusdone = $project->statusDelivering( $id ,$username,$delivering,$day);
    echo "<h3>Change the status to delivery successfully</h3>";
}

$adm = $project->totalPayAdm($day);
$paycart = $project->oder2($day);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="fpthappy1.php" class="btn btn-success">
        Return to main interface</a>

    <br>
    <table class="table">
        <h2>List of sold goods</h2>
        <thead>
        <tr>
            <th>Account</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>List Price($)</th>
            <th>Quantity</th>
            <th>Total Price($)</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($paycart as $paycart):
            ?>
            <tr>
                <td><?php echo $paycart['username']  ?> </td>
                <td><?php echo $paycart['product_id']  ?> </td>
                <td><?php echo $paycart['name'] ?></td>
                <td><?php echo $paycart['list_price'] ?></td>
                <td><?php echo $paycart['SUM(c.quantity)'] ?></td>
                <td><?php echo $paycart['SUM(c.total_price)'] ?></td>
                <td><?php echo $paycart['status'] ?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>