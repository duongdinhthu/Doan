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
if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['name'])&& isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['address'])) {
    $done= $_GET['action'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $statusdone = $project->statusDoneBook( $name ,$phone,$email,$address,$done,$dateyear,$datemonth,$dateday);
    echo "<h3>Change the status to done successfully</h3>";
}
if (isset($_GET['action']) && $_GET['action'] === 'consulting' && isset($_GET['name'])&& isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['address'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $delivering= $_GET['action'];
    $statusdone = $project->statusDeliveringBook($name ,$phone,$email,$address,$delivering,$dateyear,$datemonth,$dateday);
    echo "<h3>Change the status to delivery successfully</h3>";
}

$paycart = $project->booktour($dateyear,$datemonth,$dateday);
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
    <a href="book_tour.php" class="btn btn-success">
        Return to main interface</a>

    <br>
    <table class="table">
        <h2>List of sold goods</h2>
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($paycart as $paycart):
            ?>
            <tr>
                <td><?php echo $paycart['name']  ?> </td>
                <td><?php echo $paycart['phone']  ?> </td>
                <td><?php echo $paycart['email'] ?></td>
                <td><?php echo $paycart['address'] ?></td>
                <td><?php echo $paycart['status'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>
