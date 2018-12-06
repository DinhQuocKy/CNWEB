<?php
include '../includes/connection.php';

class ContentSelectAll extends Connection
{
	public function execute($tablename)
	{
		return $this->query("SELECT * FROM $tablename");
	}
}
class ContentList extends ContentSelectAll
{	
	public $result;
	function createFooter()
	{
		$html = "";
			$html .= "</tbody>";
		$html .= "</table>";
		return $html;
	}
	function createHeader()
	{
		$html = "";
		$html .= "<table class=\"table table-advance\" id=\"table1\">";
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
		$html .= "<tbody>";
		return $html;
	}
	public function execute($tablename)
	{
		$html = "";	
		//$url = $_SERVER['REQUEST_URI'];
		$id = $_GET['id'];
		if ($id == 100 && $tablename == "food") $id=101;
		if ($id == 100 && $tablename == "drink") $id=102;
		$this->result = parent::execute($tablename);
		$columncount = $this->result->columnCount();

		$html .= $this->createHeader();
		
		foreach($this->result as $array)
		{	
			$html .= "<tr>";
			for ($i=0 ; $i<$columncount ; $i++){
				$html .= "<td>".$array[$i]."</td>";
			}
			/*Hơi rối xíu thông cảm bữa nào tui optimize lại ahihi*/
			$html.="<td style=\"text-align:center;\"><a href=\"index.php?id=$id&action=delete&itemid=$array[0]\" class=\"btn btn-danger\">Delete</a><a href=\"index.php?id=$id&action=detail&itemid=$array[0]\" class=\"btn btn-info\">Detail</a><a href=\"index.php?id=$id&action=update&itemid=$array[0]\" class=\"btn btn-warning\">Update</a></td>";
			$html .= "</tr>";
		}

		$html .= $this->createFooter();
		
		$html .= "<a href=\"index.php?id=".$id."&action=add\" class=\"btn btn-success\" style=\"float:right;\">Add</a>";
		return $html;
	}

	public function executeImages($tablename, $name)
	{
		$html = "";
		$html .="<table class=\"table table-advance\" id=\"table1\">";
		$html .= "<thead>";
		$html .="<tr>";
		$html .=$name;
		$html .="</tr>";
		$this->result = parent::execute($tablename);
		$columncount = $this->result->columnCount();

		foreach($this->result as $array)
		{	
			$nameItem = '<div style="text-align: center; color: blue; font-size: 20px;">'.$array[1].'</div>';
			$PriceItem = '<div style="text-align: center; color: blue;">'.$array[2].' Đ</div>';
			$html .= '<td style=\"text-align:center;\"><img src="../images/'.$array[5].'" height="200" width="200"><br>'.$nameItem.$PriceItem.'</td>';
		}
		$html .= "</tbody>";
		$html .="</table><br><br><br>";
		return $html;
	}

}
$content = new ContentList();
?>