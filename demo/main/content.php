<?php
 include '../includes/connection.php';
class ContentSelectAll extends Connection
{
	public function execute($tablename)
	{
		return $this->query("SELECT * FROM $tablename");
	}
	public function executeCondition($tablename,$condition){
		return $this->query("SELECT * FROM $tablename WHERE $condition");
	}
}
class ContentList extends ContentSelectAll
{	
	public $result;
	function createFooter()
	{
		$html = "";
			$html .= "</tbody>";
		$html .= "</div></table>";
		return $html;
	}
	function createHeader()
	{
		$html = "";
		$html .= "<table class=\"table table-advance\" id=\"table1\"><div id=\"tableA\">";
            $html .= "<thead>";
				$html .= "<tr>";		
				if ($this->result != ""){
					$columncount = $this->result->columnCount();
					for ($i = 0; $i < $columncount; $i++){
						$meta = $this->result->getColumnMeta($i);
						$html .= "<th>".$meta['name']."</th>";
					}
				}
				$html.="<th style=\"text-align:center;\">Actions</th>";
				$html .= "</tr>";
			$html .= "</thead>";
		$html .= "<tbody class=\"contentTbody\">";
		return $html;
	}
	public function execute($tablename)
	{
		include_once "addItem.php";
		$html = "<br/>";	
		$id = $_GET['id'];
		$this->result = parent::execute($tablename);
		$columncount = $this->result->columnCount();

		$html .= $this->createHeader();
		foreach($this->result as $array)
		{	
			for ($i=0 ; $i<$columncount ; $i++){
				$html .= "<td>".$array[$i]."</td>";
			}
		
			$html.="<td style=\"text-align:center;\"><button class = \"btn btn-info view_data\" data-toggle = \"modal\" data-target = \"#myModal\" id=\"$array[0]\">Xem chi tiết</button><button class = \"btn btn-danger delete_data\" id=\"$array[0]\">Xóa</button></td>";
			$html .= "</tr>";
		}
		$html .= $this->createFooter();
		return $html;
	}
	public function executeCondition($tablename,$condition)
	{
		include_once "addItem.php";
		$html = "<br/>";	
		$id = $_GET['id'];
		$this->result = parent::executeCondition($tablename,$condition);
		$columncount = $this->result->columnCount();
		$html .= $this->createHeader();
		foreach($this->result as $array)
		{	
			$html .= "<tr>";
			for ($i=0 ; $i<$columncount ; $i++){
				$html .= "<td>".$array[$i]."</td>";
			}
				$html.="<td style=\"text-align:center;\"><button class = \"btn btn-info view_data\" data-toggle = \"modal\" data-target = \"#myModal\" id=\"$array[0]\">Xem chi tiết</button><button class = \"btn btn-danger delete_data\" id=\"$array[0]\">Xóa</button></td>";
				$html .= "</tr>";
		}

		$html .= $this->createFooter();
		return $html;
	}
	public function executeImages($tablename, $name)
	{
		$html = "";
		$html .="<table class=\"table table-advance\" id=\"table1\">";
		$html .= "<thead>";
		$html .="<tr>".$name."</tr><br><br>";
		include_once 'addItem.php';
		// $html .='<tr><button type="button" class="btn btn-primary">Thêm</button></tr><br><br>';
		// $html .='<tr><input type="text" class="timkiem form-control"></tr><br><br>';
		$this->result = parent::execute($tablename);
		$columncount = $this->result->columnCount();
		$cnt = 0;
		$html.="<tbody class=\"danhsach$tablename\">";
		foreach($this->result as $array)
		{	
			if($cnt==0){
				$html.="<tr>";
			}
			$nameItem = '<div style="text-align: center; color: blue; font-size: 20px;">'.$array[1].'</div>';
			$PriceItem = '<div style="text-align: center; color: blue;">'.$array[2].' Đ</div>';
			$html .= '<td style="text-align:center;"><img src="../images/'.$array[5].'" height="200" width="200"><br>'.$nameItem.$PriceItem.'</td>';
			if($cnt==3){
				$html.="</tr>";
				$cnt=0;
			}
			$cnt++;
		}
		$html .= "</tbody>";
		$html .="</table><br><br><br>";
		return $html;
	}

}
$content = new ContentList();
?>
