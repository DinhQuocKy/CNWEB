<?php 
    include_once '../includes/connection.php';

    $result = new Connection();
    $idItem = $_POST['idItem'];
    $idUrl = $_POST['idUrl'];

    $html="";

    if($idUrl==400){
        $tableName = 'bill';
    }
    else if($idUrl == 300){
        $tableName = 'employee';
    }
    else if($idUrl == 101){
        $tableName = 'food';
    }
    else if($idUrl == 102){
        $tableName = 'drink';
    }
    if($result->query("DELETE FROM $tableName WHERE ID = $idItem")){
        if($idUrl==400){
            $result2= new Connection();
            $result2->query("DELETE FROM billdetail WHERE ID = $idItem");
            
        }
        $result1= new Connection();
        $db = $result1->query("SELECT * FROM $tableName");
        $columncount = $db->columnCount();
        foreach($db as $array)
        {   
            $html.="<tr>";
            for ($i=0 ; $i<$columncount ; $i++){
                $html .= "<td>".$array[$i]."</td>";
            }
            $html.="<td style=\"text-align:center;\"><button class = \"btn btn-info view_data\" data-toggle = \"modal\" data-target = \"#myModal\" id=\"$array[0]\">Xem chi tiết</button><button class = \"btn btn-danger delete_data\" id=\"$array[0]\">Xóa</button></td>";
            $html.="</tr>";
        }
        echo $html;
            
    }


 ?>