<?php
session_start();

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();

if (isset($_GET['action']) && $_GET['action'] === 'consulting' && isset($_GET['name'])&& isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['address'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $day=$_GET['day'];
    $consulting= $_GET['action'];
    $statusdone = $project->statusDeliveringBook($name ,$phone,$email,$address,$consulting,$day);
    echo "<h3>Change the status to consulting successfully</h3>";
}
if (isset($_GET['action']) && $_GET['action'] === 'done' && isset($_GET['name'])&& isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['address'])) {
    $done= $_GET['action'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $day=$_GET['day'];
    $statusdone = $project->statusDoneBook( $name ,$phone,$email,$address,$done,$day);
    echo "<h3>Change the status to done successfully</h3>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $date = $_POST['search'];
    $datemonth = $_POST['search1'];
    $status = $_POST['search2'];
    $paycart = $project->booktour($date,$status);
}else{
    $paycart = $project->oder4();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
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
    form input{
        margin-right: 10px;
        outline: none;
        border: 1px solid grey;
        padding: 3px 10px;
        border-radius: 10px;
    }
    form select{
        padding: 5px 10px;
        border-radius: 10px;
    }
</style>
<body>
<h2 style="text-align: center; color: #f29f33; font-weight: bold; margin-top: 50px; margin-bottom: 50px">CUSTOMERS BOOK TOURS</h2>
<div class="container">
    <a href="logout.php" class="btn btn-outline-danger" style="border-radius: 10px">Logout</a>
    <a href="fpthappy1.php" class="btn btn-outline-primary" style="border-radius: 10px">Back</a>
    <h2 style="margin-top: 30px; color: #f29f33">
        Enter the date to search</h2>
    <form action="" method="post">
        <label for="search" >From </label>
        <input name="search" type="date" id="search" required value="2024-02-28">
        <label for="search1" >To </label>
        <input name="search1" type="date" id="search1" required value="2024-02-29">
        <label for="search2" >Status </label>
        <select name="search2"  id="search2" class="status-select">
            <option value="pend processing">pend processing</option>
            <option value="done" style="background: #07ff07">done</option>
            <option value="consulting" style="background: #f29f33">consulting</option>
        </select>
        <br>
        <br>
        <button class="btn btn-outline-warning" type="submit"  style="border-radius: 10px">Search</button>
    </form>
    <br>
    <table class="table">
        <h2 style="color: #f29f33; margin-bottom: 30px">List users</h2>
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Day</th>
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
                <td><?php echo $paycart['trading_day'] ?></td>
                <td><select class="status-select">
                        <option value=""><?php echo $paycart['status'] ?></option>
                        <option value="1" style="background: #07ff07">done</option>
                        <option value="2" style="background: #f29f33">consulting</option>
                    </select></td>
                <td><a href="book_tour1.php?action=done&name=<?php echo $paycart['name']; ?>&phone=<?php echo $paycart['phone'] ?>&email=<?php echo $paycart['email'] ?>&address=<?php echo $paycart['address'] ?>&day=<?php echo $paycart['trading_day'] ?>" class=" myLink1 " hidden="hidden" onclick="return confirm('Do you want to change the status to done?')" >Done</a></td>
                <td><a href="book_tour1.php?action=consulting&name=<?php echo $paycart['name']; ?>&phone=<?php echo $paycart['phone'] ?>&email=<?php echo $paycart['email'] ?>&address=<?php echo $paycart['address'] ?>&day=<?php echo $paycart['trading_day'] ?>" class=" myLink2 " hidden="hidden" onclick="return confirm('Do you want to change the status to consulting?')">Consulting</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<script>
    var statusSelects = document.querySelectorAll('.status-select');

    statusSelects.forEach(function(select) {
        select.addEventListener("change", function() {
            var selectedValue = this.value;
            if (selectedValue === "1") {
                this.parentNode.parentNode.querySelector(".myLink1").click();
            } else if (selectedValue === "2") {
                this.parentNode.parentNode.querySelector(".myLink2").click();
            }
        });
    });

</script>
