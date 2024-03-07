<?php
session_start();
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
include "project.php";
$project = new projectFptHappy();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $update = $project->updateInforProduct($id,$name,$price);

}

$name1 = $_GET['name'];
$price1 = $_GET['price'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>   Edit Information Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: #FEF7EF;
    }
    .container{
        background-color: white;
        box-shadow: 2px 2px 2px #cccccc;
        padding: 20px 30px;
        margin-top: 10px;
        border-radius: 20px;
    }
    form input{
        margin-bottom: 10px;
        outline: none;
        border-radius: 10px;
        padding: 5px 10px;
        border: 1px solid grey;
    }
</style>
<body>
<a href="logout.php" class="btn btn-outline-danger" style="border-radius: 10px; margin-top: 50px; margin-left: 220px">Logout</a>
<div class="container">
    <h2 style="color: #f29f33">
        Edit Product Customer</h2>
    <form action="" method="post">
        <label for="id" >Product ID: <br>
            <?php echo$id ?></label><br>
        <input name="name" type="text" id="name" required value="<?php echo$id ?>" hidden="hidden"><br>
        <label for="name" >Product Name </label><br>
        <input name="name" type="text" id="name" required value="<?php echo$name1 ?>"><br>
        <label for="price" >Product Price </label><br>
        <input name="price" type="text" id="price" required value="<?php echo$price1 ?>"><br>
        <br>
        <button class="btn btn-outline-primary" type="submit" style="border-radius: 10px;">Edit</button>
        <a href="add_product.php" class="btn btn-outline-success" style="border-radius: 10px;">Back</a>
    </form>

    <br>



</div>
</body>
</html>

