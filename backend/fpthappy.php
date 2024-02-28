<?php
session_start();
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dateday = $_POST['search'];
    $datemonth = $_POST['search1'];
    $dateyear = $_POST['search2'];
    $adm = $project->totalPayAdm($dateyear,$datemonth,$dateday);
    $paycart = $project->oder($dateyear,$datemonth,$dateday);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of sold goods</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h1>Welcome to the administration area</h1>
<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="infor_customer.php" class="btn btn-primary">customer information</a>
    <h2>
        Enter the date to search</h2>
    <form action="" method="post">
        <label for="search" >Day </label>
        <input name="search" type="text" id="search" required class="form-control" placeholder="01">
        <label for="search1" >Month </label>
        <input name="search1" type="text" id="search1" required class="form-control" placeholder="01">
        <label for="search2" >Year </label>
        <input name="search2" type="text" id="search2" required class="form-control"  value="2024">
        <br>
        <button class="btn btn-warning" type="submit" >Search</button>

    </form>
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
            <th>Payment</th>
            <th>Code</th>
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
                <td><?php echo $paycart['payment'] ?></td>
                <td><?php echo $paycart['code'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Total value of goods sold:  $<?php echo $paycart['total_adm'] ?></h2>

</div>
</body>
</html>