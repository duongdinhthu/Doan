<?php
session_start();
ini_set('display_errors', 'off');

if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";

$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dateday = $_POST['search'];
    $datemonth = $_POST['search1'];
    $dateyear = $_POST['search2'];
    $paycart = $project->booktour($dateyear,$datemonth,$dateday);
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
<div class="container mt-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="fpthappy1.php" class="btn btn-success">Back</a>
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
                <td><select class="status-select">
                        <option value=""><?php echo $paycart['status'] ?></option>
                        <option value="1" style="background: #45a049">done</option>
                        <option value="2" style="background: yellowgreen">consulting</option>
                    </select></td>
                <td><a href="status_book.php?action=done&name=<?php echo $paycart['name']; ?>&phone=<?php echo $paycart['phone'] ?>&email=<?php echo $paycart['email'] ?>&address=<?php echo $paycart['address'] ?>&day=<?php echo $dateday ?>&month=<?php echo $datemonth ?>&year=<?php echo $dateyear ?>" class=" myLink1 " hidden="hidden" >Done</a></td>
                <td><a href="status_book.php?action=consulting&name=<?php echo $paycart['name']; ?>&phone=<?php echo $paycart['phone'] ?>&email=<?php echo $paycart['email'] ?>&address=<?php echo $paycart['address'] ?>&day=<?php echo $dateday ?>&month=<?php echo $datemonth ?>&year=<?php echo $dateyear ?>" class=" myLink2 " hidden="hidden">Consulting</a></td>



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
