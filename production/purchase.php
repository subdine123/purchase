<?php
include_once("dbconfig.php");
$query = "INSERT INTO purchase
    (category, item_name, chef, quantity, unit, date)
    VALUES
    ('".$_POST["category"]."', '".$_POST["item_name"]."', '".$_POST["chef"]."', '".$_POST["quantity"]."', '".$_POST["unit"]."',	'".$_POST["date"]."')";
//echo $query; exit;
mysql_query( $query, $con ); 	
	
$sql = 'SELECT *
        FROM purchase
		WHERE id = '. mysql_insert_id();

$res = mysql_query( $sql, $con );
$row = mysql_fetch_assoc($res);
						echo "<tr>
                          <td>".$row["category"]."</td>
                          <td>".$row["item_name"]."</td>
                          <td>".$row["chef"]."</td>
                          <td>".$row["quantity"]." ".$row['unit']."</td>
                          <td>".$row["date"]."</td>
						  <td>500	</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1000.00</td>
                          <td>2</td>
                        </tr>"; exit;


?>