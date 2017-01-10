<?php
include('db.php');
print_r($_POST["qnty"]);

mysql_query("INSERT INTO `request`( `item_name`, `category`, `request_by`, `quentity`, `unit`, `date`, `status` ) 
VALUES ('".$_POST["item"]."','".$_POST["categories"]."','".$_POST["requested_by"]."','".$_POST["qnty"]."','".$_POST["unit"]."',now(),'pending')");

header("Location:form.php");

 ?>