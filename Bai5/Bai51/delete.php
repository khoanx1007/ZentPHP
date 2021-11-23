<?php
 $key= $_GET['id'];
 unset($_SESSION['validate'][$key]);
 header('Location: validate_list.php')
?>