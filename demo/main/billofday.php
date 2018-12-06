<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="../includes/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="../includes/jquery-ui/jquery-1.12.4.js"></script>
  <script src="../includes/jquery-ui//jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "1970:2018",
        changeMonth: true,
        changeYear:true
        
    });
  } );
  </script>
</head>
<?php
    $datepicker = isset($_POST['datepicker']) ? $_POST['datepicker']:"";
    $date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
?>
<form action="#" method="post" name="main-form" class="main-form">
	Date: <input type="text" id="datepicker" name="datepicker" readonly="readonly" 
	value="<?php echo $date; ?>"  >
	<input type="submit"  value="Xem">
</form>
<?php
include_once '../includes/connection.php';

class BillAll extends Connection
{
	public function execute($tableName, $condition){
		return $this->query("SELECT * FROM $tableName WHERE Date = '$condition'");
	}
}

class BillList extends BillAll
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

$bill = new BillList();
echo $bill->execute('bill',$datepicker);

?>

