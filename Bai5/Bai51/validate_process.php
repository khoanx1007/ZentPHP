<?php
    session_start();
    $validate = $_POST;
    $_SESSION['validate'][] = $validate;
    header('Location: validate_list.php')
?>