<?php 
	include_once '../includes/connection.php';

	$result = new Connection();
	$tableName ='bill';
	$maHD =$_POST['maHD'];
	$maNV =$_POST['maNV'];
	$dataItems=$_POST['data'];

	$date = time();
	$date=date('y/m/d',$date);
	$html="";
	$total=0;




	// if($result->query("INSERT INTO $tableName VALUES ($maHD, '$date',$maNV,0,$total)")){
	// 	// thêm vào bill
	// 	$result1= new Connection();

	// 	$db = $result1->query("SELECT * FROM $tableName");
	// 	$columncount = $db->columnCount();
	// 	foreach($db as $array)
	// 	{	
	// 		$html.="<tr>";
	// 		for ($i=0 ; $i<$columncount ; $i++){
	// 			$html .= "<td>".$array[$i]."</td>";
	// 		}
	// 		$html.="<td style=\"text-align:center;\"><button class = \"btn btn-info view_data\" data-toggle = \"modal\" data-target = \"#myModal\" id=\"$array[0]\">Xem chi tiết</button><button class = \"btn btn-danger delete_data\" id=\"$array[0]\">Xóa</button></td>";
	// 		$html.="</tr>";
	// 	}
	// 	echo $html;
			
	// }


 ?>
