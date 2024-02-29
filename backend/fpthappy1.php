<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
     $from = $_POST['search'];
    $to = $_POST['search1'];
    $status = $_POST['search2'];
    $paycart = $project->oder($to,$from,$status);
}else{
    $paycart = $project->oder1();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h1 class="card-title">Welcome to the staff area</h1>

<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="book_tour.php" class="btn btn-primary">Customers book tours</a>
    <h2>
        Enter the date to search</h2>
    <form action="" method="post">
        <label for="search" >From </label>
        <input name="search" type="text" id="search" required class="form-control" value="2024-02-28">
        <label for="search1" >To </label>
        <input name="search1" type="text" id="search1" required class="form-control" value="2024-02-29">
        <label for="search2" >Status </label>
        <select name="search2"  id="search2" class="status-select">
            <option value="pend processing">pend processing</option>
            <option value="done" style="background: #45a049">done</option>
            <option value="delivering" style="background: yellowgreen">delivering</option>
        </select>
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
            <th>Payment</th>
            <th>Code</th>
            <th>Status</th>
            <th>Day</th>
            <th>Update order status</th>

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

                <td><?php echo $paycart['payment'] ?></td>
                <td><?php echo $paycart['code'] ?></td>
                <td><?php echo $paycart['trading_day'] ?></td>
                <td><?php echo $paycart['status'] ?></td>
                <td><select class="status-select">
                        <option value=""><?php echo $paycart['status'] ?></option>
                        <option value="1" style="background: #45a049">done</option>
                        <option value="2" style="background: yellowgreen">delivering</option>
                    </select></td>
                <td><a href="status.php?action=done&id=<?php echo $paycart['product_id']; ?>&username=<?php echo $paycart['username'] ?>&day=<?php echo $paycart['trading_day'] ?>" class=" myLink1 "  >Done</a></td>
                <td><a href="status.php?action=delivering&id=<?php echo $paycart['product_id']; ?>&username=<?php echo $paycart['username'] ?>&day=<?php echo $paycart['trading_day'] ?>" class=" myLink2 " >Delivering</a></td>
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
</body>
</html>

