<?php
 $key= $_GET['id'];
 session_destroy();
 header('Location: validate_list.php')
?>