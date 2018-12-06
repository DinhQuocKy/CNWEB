<?php
include_once '../includes/connection.php';

class ContentSearchAll extends Connection
{
	public function execute($tableName, $condition){
		return $this->query("SELECT * FROM $tableName WHERE ID= $condition");
	}
}

class SearchList extends ContentSearchAll
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
	public function execute($tableName, $condition )
	{
		
		if($condition==""){
			return "Không tìm thấy kết quả nào!";
		}
		else{
			$html ="";
			$id= $_GET['id'];
			if ($id == 100 && $tableName == "food") $id=101;
			if ($id == 100 && $tableName == "drink") $id=102;
			$this->result = parent::execute($tableName,$condition);
			$colurmCount = $this->result->columnCount();
			$html .= $this->createHeader();

			foreach ($this->result as $array) {
				$html .= "<tr>";
				for ($i=0 ; $i<$colurmCount ; $i++){
					$html.="<td>".$array[$i]."</td>";
				}
				$html.="<td style=\"text-align:center;\"><a href=\"index.php?id=$id&action=delete&itemid=$array[0]\" class=\"btn btn-danger\">Delete</a><a href=\"index.php?id=$id&action=detail&itemid=$array[0]\" class=\"btn btn-info\">Detail</a><a href=\"index.php?id=$id&action=update&itemid=$array[0]\" class=\"btn btn-warning\">Update</a></td>";
				$html .= "</tr>";
			}
			$html .= $this->createFooter();
			return $html;
		}
		
	}
}

$search = new SearchList();

?>