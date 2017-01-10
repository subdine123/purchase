<?php
$con = mysql_connect('localhost','root','');// or die('connection error');
if($con){
	
	mysql_select_db('items');
}

 ?>