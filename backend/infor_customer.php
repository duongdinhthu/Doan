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
<style>
    body{
        background-color: #FEF7EF;
    }
    .container{
        background-color: white;
        padding: 30px 30px;
        border-radius: 20px;
        box-shadow: 2px 2px 2px #cccccc;
        margin-bottom: 50px;
    }
    .table a{
        text-decoration: none;
        color: white;
        background-color: #f29f33;
        padding: 8px 12px;
        border-radius: 10px;
        transition: 0.3s ease-in-out;
    }
    .table a:hover{
        background-color: #654145;
    }
</style>
<body>
<h2 style="margin-top: 50px; margin-bottom: 50px; text-align: center; color: #f29f33; font-weight: bold">INFORMATION CUSTOMERS</h2>
<div class="container">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="fpthappy.php" class="btn btn-success">Back</a>
    <br>

    <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">
        Enter the name of the customer you want to search</h2>
    <form action="search.php" method="post">
        <label for="name" >Name: </label>
        <input name="name" type="text" id="name" required class="form-control" placeholder="01">
        <br>
        <button class="btn btn-warning" type="submit" >Search</button>
    </form>
    <br>
    <table class="table">
        <h2  style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">List of customers</h2>
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
                <td><a href="edit_infor.php?action=edit&username=<?php echo $customer['username']  ?>&name=<?php echo $customer['name']  ?>&phone=<?php echo $customer['phone']  ?>&address=<?php echo $customer['address']  ?>">Edit Infor</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>