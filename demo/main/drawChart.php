<?php
	include_once "../includes/connection.php";

	class DrawChart extends Connection{
		private $tablename;

		function __construct($tablename){
			 parent::__construct();
			$this->tablename=$tablename;
			
		}
		function execute(){
			if ($this->tablename=="") echo "Có lỗi khi truy suất hóa đơn";
            else{
                $this->loadDetailForm();
            }
		}
		function loadDetailForm(){
           
            $query = "select MONTH(Date) as 'month',COUNT(*) as 'count' FROM ".$this->tablename."  GROUP BY MONTH(Date)";

			$result = $this->query($query);
			$row = $result->fetchAll(PDO::FETCH_ASSOC);

			$html ="";
			$html.="<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
			    <script type=\"text/javascript\">
			    google.charts.load('current', {'packages':['bar']});
			    google.charts.setOnLoadCallback(drawChart);
			    function drawChart() {
			        var data = google.visualization.arrayToDataTable([
			        ['Biểu đồ số lượng hóa đơn đã bán theo tháng trong năm', 'Số lượng'],";
			foreach ($row as $key => $value) { 
		        $html.="['tháng ".$value['month'] ."',". $value['count']. "],";
		   	}
		   	
		    $html=rtrim($html);
		 
		    $html.=	"]);";
		    $html.=	"var options = {
	          	chart: {
	            title: 'BIỂU ĐỒ HÓA ĐƠN',
	            subtitle: 'Tổng số hóa đơn theo tháng',
	          	}
        	};

		        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
		        chart.draw(data, google.charts.Bar.convertOptions(options));
	      	}
		    </script>
		  	<body>
		    	<div id=\"columnchart_material\" style=\"width: 1000px; height: 500px;\"></div>
		  	</body>";
			
			echo $html;
		}
}
	

?>