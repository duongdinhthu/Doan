<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$dateday = $_GET['day'];
$datemonth=$_GET['month'];
$dateyear = $_GET['year'];
if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['id'])&& isset($_GET['username'])) {
    $done= $_GET['action'];
    $id = $_GET['id'];
    $username = $_GET['username'];
    $statusdone = $project->statusDone( $id ,$username,$done,$dateyear,$datemonth,$dateday);
    echo "<h3>Change the status to done successfully</h3>";
}
if (isset($_GET['action']) && $_GET['action'] === 'delivering' && isset($_GET['id'])&& isset($_GET['username'])) {
    $id = $_GET['id'];
    $username = $_GET['username'];
    $delivering= $_GET['action'];
    $statusdone = $project->statusDelivering( $id ,$username,$delivering,$dateyear,$datemonth,$dateday);
    echo "<h3>Change the status to delivery successfully</h3>";
}

$adm = $project->totalPayAdm($dateyear,$datemonth,$dateday);
$paycart = $project->oder($dateyear,$datemonth,$dateday);
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