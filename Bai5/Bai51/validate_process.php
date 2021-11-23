<?php
    session_start();
    $validates  = $_POST;
    $_SESSION['validates'][] = $validates;
    header('Location: validate_list.php')
?>