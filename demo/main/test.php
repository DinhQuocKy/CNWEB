<?php 

	$idItem=$_POST['idItem'];
	$nameItem=$_POST['nameItem'];
	$quantity=$_POST['quantity'];
	$tableName = $_POST['table'];

	include_once '../includes/connection.php';

	$result = new Connection();

	$db = $result->query("SELECT Price FROM $tableName WHERE ID = $idItem");

	foreach ($db as $array ){
		$SumMoney=$array[0] * $quantity;
	}

	$html ="";  
	  $html.="<tr>";
	  $html.="<td style=\"border-right:1px solid #c3c388;\">$idItem</td>";
	  $html.="<td style=\"border-right:1px solid #c3c388;\">$nameItem</td>";
	  $html.="<td style=\"border-right:1px solid #c3c388;\">$quantity</td>";
	  $html.="<td id=\".SumMoney\" style=\"border-right:1px solid #c3c388;\">$SumMoney</td>";
	  $html.="</tr>";
    echo $html;
 ?>
