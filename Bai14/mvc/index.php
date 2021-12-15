<?php
//require_once "controllers/CategoryController.php";
$mod = $_GET['mod'];
$act = $_GET['act'];
$mod = "home";
$act = "index";
if (isset($_GET['mod'])){
    $mod = $_GET['mod'];
}
if (isset($_GET['act'])){
    $act = $_GET['act'];
}   
$class_name = ucfirst($mod) . "Controller";
$path = __DIR__ . "/controllers/". $class_name . ".php";
if (!file_exists($path)){
    echo "File $path khong ton tai";
    exit();
}
require_once($path);
$controller_obj = new $class_name();
$controller_obj -> $act();
?>