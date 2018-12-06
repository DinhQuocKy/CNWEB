<?php

include '../includes/connection.php';

class PdfSellectALl extends Connection
{
	public function execute($tablename)
	{
		return $this->query("SELECT * FROM $tablename");
	}
}
class PdfSellect extends PdfSellectALl
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
		$html .= "<table id=\"table1\" style=\"font-family: DejaVu Sans;width:100%; border:1px solid black;text-align:center\">";
            $html .= "<thead >";
				$html .= "<tr>";		
				if ($this->result != ""){
					$columncount = $this->result->columnCount();
					for ($i = 0; $i < $columncount; $i++){
						$meta = $this->result->getColumnMeta($i);
						$html .= "<th style=\"font-size:30px;\">".$meta['name']."</th>";
					}
				}
				$html .= "</tr>";
			$html .= "</thead>";
		$html .= "<tbody style=\" border:1px solid black;\">";
		return $html;
	}
	public function execute($tablename)
	{
		$html = "";	
		//$url = $_SERVER['REQUEST_URI'];
		// $id = $_GET['id'];
		// if ($id == 100 && $tablename == "food") $id=101;
		// if ($id == 100 && $tablename == "drink") $id=102;
		$this->result = parent::execute($tablename);
		$columncount = $this->result->columnCount();

		$html .= $this->createHeader();
		
		foreach($this->result as $array)
		{	
			$html .= "<tr style=\" border:1px solid black;\">";
			for ($i=0 ; $i<$columncount ; $i++){
				$html .= "<td style=\" border:1px solid black;\">".$array[$i]."</td>";
			}
			$html .= "</tr>";
		}
		$html .= $this->createFooter();
		return $html;
	}

}
$pdfSellect = new PdfSellect();

?>
