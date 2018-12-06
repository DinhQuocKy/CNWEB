<?php include_once '../includes/header.php'; ?>

<!-- sử dựng ứng dụng trợ lý chat.hana.ai -->
<!-- <script type='text/javascript'>
    (function(){
    	var t = "https:",
        r = document.createElement("script");
      	r.type = "text/javascript",
       	r.async = !0, r.src = t + "//resources.mideasvn.com/hana_v2/bcade665-3513-4538-9174-a0fd2676d754";
      	var c = document.getElementsByTagName("script")[0];
        c.parentNode.insertBefore(r, c);
    })();
</script> -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				<div class="theme-panel">
					<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
						<i class="icon-settings"></i>
					</div>
					<div class="toggler-close">
						<i class="icon-close"></i>
					</div>
					<div class="theme-options">
						<div class="theme-option theme-colors clearfix">
							<span>
							THEME COLOR </span>
							<ul>
								<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
								</li>
								<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
								</li>
								<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
								</li>
								<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
								</li>
								<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
								</li>
							</ul>
						</div>
					</div>	
				</div>
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
                <?php include_once '../includes/indexmanagement.php';
                    echo $indexmanagement->getPageTitle();
                ?></h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
                        <?php include_once '../includes/indexmanagement.php'; 
                            echo $indexmanagement->getBreadcrumbInfo();
                        ?>
                    </ul>
				</div>
				<!-- END PAGE HEADER-->

                <!--- truy vấn Php router để xuất page content ở đây -->

				<?php include_once 'routing.php';
				include_once"pops-up.php";

				?>
         <!-- kết thúc page content-->
			</div>
    </div>
	</div>
</div>
    <!-- End Content -->

<script type="text/javascript">
	
$(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
	var idItem = $(this).attr("id");
	var idUrl= <?php echo $_GET['id']; ?>;
	$.ajax({
		url:"selectDetail.php",
		method:"POST",
		data:{idItem:idItem,idUrl:idUrl},
		success:function(data){
			$('#detail').html(data);
			$('#myModal').modal('show');
			}
	});
});
$(document).on('click', '.delete_data', function(){
  //$('#dataModal').modal();
	var idItem = $(this).attr("id");
	var idUrl= <?php echo $_GET['id']; ?>;
	$.ajax({
		url:"delete.php",
		method:"POST",
		data:{idItem:idItem,idUrl:idUrl},
		success:function(data){
			$('.contentTbody').html(data);
		}
	});
});
</script>