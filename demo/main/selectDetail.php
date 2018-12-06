<?php 
      include_once '../includes/connection.php';
      $html="";

      if(isset($_POST['idItem']) && ($_POST['idUrl']==400 || $_POST['idUrl']==401 || $_POST['idUrl']==402)){
         $result= new Connection();
         $idItem=$_POST['idItem'];
         $db=$result->query("Select * from bill where ID=$idItem");

         $resultFood= new Connection();
         $dbFood=$resultFood->query("SELECT billdetail.ID,billdetail.Quantity,billdetail.TotalPrice,food.Name,food.Price FROM `billdetail` JOIN food on billdetail.IDProduct = food.ID where billdetail.ID=$idItem");

         $resultDrink= new Connection();
         $dbDrink=$resultDrink->query("SELECT billdetail.ID,billdetail.Quantity,billdetail.TotalPrice,drink.Name,drink.Price FROM drink JOIN billdetail on drink.ID = billdetail.IDProduct where billdetail.ID=$idItem");
         foreach ($db as $array) {
                  $html.="
                     <div class=\"form-group row\">
                     <label class=\"col-sm-3 col-form-label\">Mã hóa đơn:</label><div class=\"col-sm-8\">
                     <input class =\"form-control\" type=\"text\" name=\"maHD\" value=\"$array[0]\"></div>
                     </div>

                     <div class=\"form-group row\">
                     <label class=\"col-sm-3 col-form-label\">Mã nhân viên:</label><div class=\"col-sm-8\">
                     <input class =\"form-control\" type=\"text\" name=\"maKH\" value=\"$array[2]\"></div>
                     </div>

                     <div class=\"form-group row\">
                     <label class=\"col-sm-3 col-form-label\">Ngày lập phiếu:</label><div class=\"col-sm-8\">
                     <input class =\"form-control\" type=\"text\" name=\"maKH\" value=\"$array[1]\"></div>
                     </div>
                     <div class=\"form-group row\">
                     <label class=\"col-sm-3 col-form-label\">Tình trạng:</label><div class=\"col-sm-8\">
                     <label>";
                     $html.= $tt=($array[3] ==1) ? "Đã thanh toán":"Chưa thanh toán";
                     $html.="</label></div>
                     </div>
                     <h2 style=\"text-align: center;\">DANH SÁCH CÁC MÓN</h2>
                     <br>
                     <table class=\"table table-advance\" style=\" width:100%;\">
                        <thead>
                           <tr >
                              <th style=\"border-right:1px solid #c3c388;\">Tên</th>
                              <th style=\"border-right:1px solid #c3c388;\">Giá</th>
                              <th style=\"border-right:1px solid #c3c388;\">Số lượng</th>
                              <th >Tổng tiền</th>
                           </tr>
                        </thead>";

               foreach ($dbFood as $array1) {
                  $html.="<tr>";
                  $html.="<td>$array1[3]</td>";
                  $html.="<td>$array1[4]</td>";
                  $html.="<td>$array1[1]</td>";
                  $html.="<td>$array1[2]</td>";
                  $html.="</tr>";
               } 
               foreach ($dbDrink as $array1) {
                  $html.="<tr>";
                  $html.="<td>$array1[3]</td>";
                  $html.="<td>$array1[4]</td>";
                  $html.="<td>$array1[1]</td>";
                  $html.="<td>$array1[2]</td>";
                  $html.="</tr>";
               }
               $html.="</table>";
               }
           echo $html;
      }


      if(isset($_POST['idItem']) && ($_POST['idUrl']==300 || $_POST['idUrl']==101 || $_POST['idUrl']==102)){
         //$result= new Connection();
         $idItem=$_POST['idItem'];
         $tableName="";
         if($_POST['idUrl']==300) $tableName="employee";
         else if($_POST['idUrl']==101) $tableName="food";
         else if($_POST['idUrl']==102) $tableName="drink";
         // $db=$result->query("Select * from $tableName where ID=$idItem");
         //in ra html rồi như trên

         include_once 'detail.php';
         $detail = new Detail($tableName,$idItem);
         $detail->execute();

      }

      if(isset($_POST['idItem']) && $_POST['idUrl']==100){
         //xuất ra 2 bảng
      }
    ?>
 