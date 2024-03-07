<?php
session_start();
//kiểm tra session
ini_set('display_errors', 'off');
if (!isset($_SESSION["username"])&&!isset($_SESSION['password'])){
    header("Location:http://localhost:63342/DoanKI1/frontend/home.html");
    exit;
}
if (isset($_GET['action']) && $_GET['action'] === 'success' && isset($_GET['code'])) {


}
?>
