<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
$name=$_POST['name'];
$customer=$project->inforCustomerByName($name);

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
    <a href="infor_customer.php" class="btn btn-danger">customer information</a>
    <h2>
        nhập tên khách hàng cần tìm</h2>

    <br>
    <table class="table">
        <h2>List of sold goods</h2>
        <thead>
        <tr>
            <th>Account</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($customer as $customer):
            ?>
            <tr>
                <td><?php echo $customer['username']  ?> </td>
                <td><?php echo $customer['name']  ?> </td>
                <td><?php echo $customer['phone'] ?></td>
                <td><?php echo $customer['address'] ?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>
