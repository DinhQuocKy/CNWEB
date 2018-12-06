<?php  
	$data = strtoupper($_POST['data']);
	include_once '../includes/connection.php';
	$result = new Connection();
	
	$db = $result->query("select * from food where upper(Name) like '%$data%'");
	$columncount = $db->columnCount();
	$html="";
	$cnt=0;
    foreach($db as $array)
	{	
		if($cnt==0){
			$html.="<tr>";
		}
		$nameItem = '<div style="text-align: center; color: blue; font-size: 20px;">'.$array[1].'</div>';
		$PriceItem = '<div style="text-align: center; color: blue;">'.$array[2].' Đ</div>';
		$html .= '<td style="text-align:center; width="50px";><img src="../images/'.$array[5].'" height="200" width="200"><br>'.$nameItem.$PriceItem.'</td>';
		if($cnt==3){
			$html.="</tr>";
			$cnt=0;
		}
		$cnt++;
	}
    echo $html;
?>