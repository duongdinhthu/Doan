<?php
session_start();
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
include "project.php";
$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_POST['image'];
    $type=$_POST['type'];
    $add = $project->addProduct($name,$price,$image,$type);
}
if (isset($_GET['action']) &&isset($_GET['id'])) {
    $id = $_GET['id'];
    $status= $_GET['action'];
    $statusdone = $project->statusProduct( $id ,$status);
}
$product= $project->showProject();
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
        padding: 20px 30px;
        box-shadow: 2px 2px 2px #cccccc;
        margin-bottom: 50px;
        border-radius: 20px;
    }
    form input{
        margin-bottom: 10px;
        padding: 5px 10px;
        outline: none;
        border-radius: 10px;
        border: 1px solid grey;
    }
    select{
        outline: none;
        padding: 5px 10px;
        border-radius: 10px;
        border: 1px solid grey;
    }
</style>
<body>
<div>
    <a href="fpthappy.php" class="btn btn-outline-primary" style="border-radius: 10px; margin-top: 50px; margin-left: 220px; margin-bottom: 10px">Back</a>
    <div class="container">
        <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">
            ADD PRODUCT</h2>
        <form action="" method="post">
            <label for="name" >Product name </label><br>
            <input name="name" type="text" id="name" required ><br>
            <label for="price" >Product Price </label><br>
            <input name="price" type="text" id="price" required ><br>
            <label for="image" >Product Image Links </label><br>
            <input name="image" type="text" id="image" required ><br>
            <label for="type" >Product type</label><br>
            <select name="type"  id="type" class="status-select">
                <option value="TP">FOOD</option>
                <option value="CN" >PERSONAL</option>
                <option value="TY" >ESSENTIAL</option>
                <option value="PACKAGE" >PACKAGE</option>
                <option value="TOUR" >TOUR</option>
                <option value="ORGANIZATIONAL" >ORGANIZATIONAL</option>
            </select>
            <br>
            <br>
            <button class="btn btn-outline-warning" type="submit" style="border-radius: 10px" >Add</button>
        </form>
        <table class="table">
            <h2 style="color: #f29f33; margin-bottom: 30px; margin-top: 30px">List Product</h2>
            <thead>
            <tr>
                <th>Product ID</th>
                <th>Price($)</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($product as $paycart):
                ?>
                <tr>
                    <td><?php echo $paycart['pid']  ?> </td>
                    <td><?php echo $paycart['price'] ?></td>
                    <td><?php echo $paycart['code'] ?></td>
                    <td><select class="status-select">
                            <option value=""><?php echo $paycart['status'] ?></option>
                            <option value="1" style="background: #07ff07">stocking</option>
                            <option value="2" style="background: #f29f33">over</option>
                        </select></td>

                    <td><a href="add_product.php?action=stocking&id=<?php echo $paycart['pid']  ?>" class=" myLink1 " hidden="hidden" >Done</a></td>
                    <td><a href="add_product.php?action=over&id=<?php echo $paycart['pid']  ?>" class=" myLink2 " hidden="hidden">Delivering</a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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