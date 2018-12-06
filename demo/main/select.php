<?php
	include_once "../includes/connection.php";

	class Select extends Connection{
		private $tablename;
		private $cols1;
		private $cols2;
		private $nameChart;
		private $title;
		private $is3D;
		function __construct($tablename,$cols1,$cols2,$nameChart,$title,$style){
			 parent::__construct();
			$this->tablename=$tablename;
			$this->cols1	=$cols1;
			$this->cols2	=$cols2;
			$this->nameChart=$nameChart;
			$this->title    =$title;
			$this->style	=$style;
		}
		function execute(){
			if ($this->tablename=="") echo "Có lỗi khi truy suất sản phẩm";
            else{
                $this->loadDetailForm();
            }
		}
		function loadDetailForm(){
            $query= "select ". $this->cols1.", ".$this->cols2 ." from ".$this->tablename;

			$result = $this->query($query);
			$row = $result->fetchAll(PDO::FETCH_ASSOC);

			$html="";
		    $html.="
	      	<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
	      	<script type=\"text/javascript\">
		        google.charts.load(\"current\", {packages:[\"corechart\"]});
		        google.charts.setOnLoadCallback(drawChart);
		        function drawChart() {
	          	var data = google.visualization.arrayToDataTable([
		            ['Tên', 'Số lượng'],";
		    foreach ($row as $key => $value) { 
		        $html.="['".$value['Name'] ."',". $value['Discription']. "],";
		   	}
	      	rtrim($html,',');
		    
		    rtrim($html,',');
		    $html.=	"]);";
		    $html.=	"var options = {
	          	title: '$this->title',
	          	$this->style, 
		        };

		        var chart = new google.visualization.PieChart(document.getElementById('$this->nameChart'));
		        chart.draw(data, options);
	      	}
		    </script>
		  	<body>
		    	<div id=\""."$this->nameChart"."\" style=\"width: 1000px; height: 500px;\"></div>
		  	</body>";

		    echo $html;
		}
}
	

?>