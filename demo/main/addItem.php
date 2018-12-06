<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_data_Modal">
	Thêm
</button>
<?php 
	if($_GET['id']==500){
?>
	<br><br><input type="text" class="timkiem form-control">
<?php
	}
?>
<br/>
<!-- Modal -->
<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLongTitle">THÊM HÓA ĐƠN MỚI</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="insert_form">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Mã hóa đơn</label>
						<div class="col-sm-9">
							<input name="maHD" id="maHD" class="form-control"/>
						</div>
					</div>
					
					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Mã nhân viên</label>
						<div class="col-sm-9">
							<input name="maNV" id="maNV" class="form-control"/>
						</div>
					</div>
					
					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Tên khách hàng</label>
						<div class="col-sm-9">
							<input name="tenKH" id="tenKH" class="form-control"/>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Chọn món ăn</label>
						<div class="col-sm-9">
							<select name="mon" id="mon" class="form-control" >
								<?php 
								include_once '../includes/connection.php';
								$result= new Connection();
								$db=$result->query("Select * from food");
								foreach ($db as $array) {
									echo "<option value=\"$array[0]\">$array[1]</option>";
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Chọn số lượng</label>
						<div class="col-sm-9">
							<input name="soLuongMon" id="soLuongMon" class="form-control" style="width: 60%;float: left;"/>
							<input  type="button" class = "btn btn-info addTemp2" id="addTemp2" style="background-color:#0066ff;float: right;" value="Thêm món" />
						</div>
					</div>
					
					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Chọn thức uống</label>
						<div class="col-sm-9">
							<select name="nuoc" id="nuoc" class="form-control" >
								<?php 
								include_once '../includes/connection.php';
								$result= new Connection();
								$db=$result->query("Select * from drink");
								foreach ($db as $array) {
									echo "<option value=\"$array[0]\">$array[1]</option>";
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-sm-3 col-form-label">Chọn số lượng</label>
						<div class="col-sm-9">
							<input name="soLuongNuoc" id="soLuongNuoc" class="form-control" style="width: 60%;float: left;"/>
							<input  type="button" class = "btn btn-info addTemp1" id="addTemp1" style="background-color:#0066ff;float: right;" value="Thêm món" />
						</div>
					</div>
				
					<h1 style="font-size: 20px;font-weight: bold;text-align: center;">DANH SÁCH CÁC MÓN ĐÃ CHỌN</h1>
					<table class="table table-advance" style=" width:100%;">
						<thead>
							<tr >
								<th style="border-right:1px solid #c3c388;">Mã</th>
								<th style="border-right:1px solid #c3c388;">Tên</th>
								<th style="border-right:1px solid #c3c388;">Số lượng</th>
								<th >Tiền</th>
							</tr>
						</thead>
						<tbody class="modalTbody">
						</tbody>
					</table>

				<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> 
$(document).ready(function(){
	var dataItems=[];
	
	$('#insert_form').on("click","#insert",function(event){ 
		event.preventDefault();  
		if($('#maHD').val() == "")  
		{  
			alert("Mã hóa đơn bắt buộc");  
		}  
		else if($('#maNV').val() == '')  
		{  
			alert("Mã nhân viên bắt buộc");  
		}  
		else if($('#tenKH').val() == '')
		{  
			alert("Tên khách hàng bắt buộc");  
		}

		else  
		{
			var maHD=$('#maHD').val();
			var maNV=$('#maNV').text();
			var tenKH = $('#tenKH').val();
			$.ajax({
				url:"insertBill.php",  
				method:"POST",  
				data:{maHD: maHD, maNV: maNV, tenKH: tenKH, data: dataItems},  
				success:function(data){  
					$('#insert_form')[0].reset();  
					$('#add_data_Modal').modal('hide');  
					$('.contentTbody').html(data); 
					alert("Đã thêm thành công");
				}
			});  

		} 
	});
	$('#insert_form').on("click",".addTemp1",function(event){ 
		if($('#soLuongNuoc').val() == "")  
		{  
			alert("Nhập số lượng bắt buộc");  
		} 
		else{
			var idItem=$('#nuoc').val();
			var nameItem=$('#nuoc :selected').text();
			var quantity = $('#soLuongNuoc').val();
			$.ajax({  
				url:"test.php",  
				method:"POST",  
				data:{idItem:idItem, nameItem:nameItem, quantity:quantity, table : 'drink'},
				success:function(data){
					$('.modalTbody').append(data);
					var sumMoney=$('.modalTbody tr:last td:last-child').text();
					var item={idItem: idItem,quantity: quantity,sumMoney:sumMoney};
					dataItems.push(item);

				}
			}); 
		} 
	});
	$('#insert_form').on("click",".addTemp2",function(event){ 
		if($('#soLuongMon').val() == "")  {  
			alert("Nhập số lượng bắt buộc");  
		}
		else{
			var idItem=$('#mon').val();
			var nameItem=$('#mon :selected').text();
			var quantity = $('#soLuongMon').val();
			$.ajax({  
				url:"test.php",  
				method:"POST",  
				data:{idItem:idItem, nameItem:nameItem, quantity:quantity, table : 'food'},
				success:function(data){
					$('.modalTbody').append(data);
					var sumMoney=$('.modalTbody tr:last td:last-child').text();
					var item={idItem: idItem,quantity: quantity,sumMoney:sumMoney};
					dataItems.push(item);
				}
			}); 
		} 
	});

	$('.timkiem').keyup(function() {
		var txt = $('.timkiem').val();
		$.post('searchTest.php', {data: txt}, function (data) {
			 // $('.danhsachdrink').html(data);
			 $('.danhsachfood').html(data);
		})
	})
});
</script>