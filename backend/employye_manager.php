<?php

session_start();
if (!isset($_SESSION["username"]) && !isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
if (isset($_GET['action']) && isset($_GET['username'])) {
    $status = $_GET['action'];
    $username = $_GET['username'];
    $status = $project->statusStaff( $username,$status);

}
     $staff= $project->showStaff();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
<h2 style="color: #f29f33;margin-bottom: 50px; margin-top: 50px; text-align: center; font-weight: bold">WELCOME TO THE ADMIN AREA</h2>

<div class="container">
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="fpthappy.php" class="btn btn-warning">Back</a>

    <table class="table">
        <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">List users</h2>
        <thead>
        <tr>
            <th>Staff id</th>
            <th>Account name</th>
            <th>Password</th>
            <th>Name</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($staff as $paycart):
            ?>
            <tr>
                <td><?php echo $paycart['staff_id']  ?> </td>
                <td><?php echo $paycart['username'] ?></td>
                <td><?php echo $paycart['password'] ?></td>
                <td><?php echo $paycart['name'] ?></td>
                <td><select class="status-select">
                        <option value=""><?php echo $paycart['status'] ?></option>
                        <option value="1" style="background: #07ff07">Working</option>
                        <option value="2" style="background: #f29f33">Has retired</option>
                    </select></td>
                <td><a href="employye_manager.php?action=working&username=<?php echo $paycart['username'] ?>" class=" myLink1 " hidden="hidden"  >Working</a></td>
                <td><a href="employye_manager.php?action=retired&username=<?php echo $paycart['username'] ?>" class=" myLink2 " hidden="hidden" >Retired</a></td>

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

            // Disable options based on selected value
            for (var i = 0; i < this.options.length; i++) {
                if (this.options[i].value !== selectedValue && this.options[i].value !== "" && this.value === "1") {
                    this.options[i].disabled = true;
                } else {
                    this.options[i].disabled = false;
                }
            }

            // Store selected value in localStorage
            localStorage.setItem('selectedValue', selectedValue);
        });

        // Check and disable options if value is stored in localStorage
        var storedValue = localStorage.getItem('selectedValue');
        if (storedValue) {
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].value !== 1) {
                    select.options[i].disabled = false;
                }
            }
        }
    });
</script>
</body>
</html>
