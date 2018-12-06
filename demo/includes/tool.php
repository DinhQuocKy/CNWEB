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
									<span class="caption-helper">manage products...</span>
								</div>
								<div class="actions">
									<div class="btn-group">
										<a class="btn btn-default btn-circle" href="#" data-toggle="dropdown">
										<i class="fa fa-share"></i> Công cụ <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="#">
												Xuất file Excel </a>
											</li>
											<li>
												<a  href="index.php?id='.$id.'&action=pdf" target="_blank">
												Xuất PDF </a>
											</li>
											<li>
												<a href="index.php?id='.$id.'&action=print">
												Print file </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>';
		return $result;
	}

}

?>