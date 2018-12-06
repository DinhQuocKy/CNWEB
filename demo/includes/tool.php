<?php 
/**
 * 
 */
class Tool
{

	function createProducts($id =100){
		$result='<div class="portlet light">
			<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Các tùy chọn</span>
									<span class="caption-helper">manage products... &nbsp</span>
								</div>
								<div class="actions">
									<div class="btn-group">
										<a class="btn btn-default btn-circle" href="#" data-toggle="dropdown">
										<i class="fa fa-share"></i> Công cụ <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">';
		if($id!=200){
			$result.=	'<li>
							<a href="export.php?id='.$id.'&action=excel" target="_blank">
							Xuất file Excel </a>
						</li>
						<li>
							<a  href="export.php?id='.$id.'&action=pdf" target="_blank">
							Xuất PDF </a>
						</li>
						<li>
							<a href="index.php?id='.$id.'&action=print">
							Print file </a>
						</li>';
		}
		if($id==200){
			$result.=	'<li>
							<a  href="index.php?id='.$id.'&action=food" >
							thống kê đồ ăn </a>
						</li>
						<li>
							<a  href="index.php?id='.$id.'&action=drink" >
							thống kê đồ uống </a>
						</li>
						<li>
							<a  href="index.php?id='.$id.'&action=billOfDay" >
							số lượng hóa đơn trong ngày </a>
						</li>';
		}

		$result.='									
										</ul>
									</div>
								</div>
								<form class="search-form search-form-expanded"  method="GET">
									<div class="input-group col-md-6">
										<input type="text" class="form-control" placeholder="Search..." id="item_id" name="iteam_id">
										<span class="input-group-btn">
										<a onclick="myFunction();"><i class="icon-magnifier"></i></a>
										</span>
									</div>
								</form>
							</div>
						</div>
		<script>
			function myFunction(){
				var x=document.getElementById("item_id").value;
				window.location="index.php?id='.$id.'&action=search&itemid="+x;
			}
		</script>
';
		return $result;
	}

}

?>
