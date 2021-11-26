<?php
    session_start();
    $product=$_POST;
    $_SESSION['products'][]=$product;
    header('Location: list.php')
?>