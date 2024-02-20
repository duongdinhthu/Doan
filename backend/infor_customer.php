<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();

$customer=$project->inforCustomer();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> List Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="fpthappy.php" class="btn btn-success">Database</a>
    <br>

    <h2>
        Enter the name of the customer you want to search</h2>
    <form action="search.php" method="post">
        <label for="name" >Name: </label>
        <input name="name" type="text" id="name" required class="form-control" placeholder="01">
        <br>
        <button class="btn btn-success" type="submit" >Search</button>
    </form>
    <br>
    <table class="table">
        <h2>List of customers</h2>
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
                <td><a href="edit_infor.php?action=edit&username=<?php echo $customer['username']  ?>&name=<?php echo $customer['name']  ?>&phone=<?php echo $customer['phone']  ?>&address=<?php echo $customer['address']  ?>"
                       class="btn btn-warning btn-sm"  >Edit Infor</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>