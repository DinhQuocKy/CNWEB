<?php
    include_once "../includes/connection.php";
    /* sory mấy ông cách đặt tên tui củ chuối quá quy ước là vậy nha:
    Methods: methodName
    properties: propertiesName
    variable: variablename
    class: ClassName
    */
    
        class Detail extends Connection{
        private $itemID="";
        private $tableName="";

        function __construct($name,$itemid){
            parent::__construct();
            $this->tableName = $name;
            $this->itemID = $itemid;
        }

        function execute(){
            if ($this->itemID=="") echo "Có lỗi khi truy suất sản phẩm";
            else{
                $this->loadDetailForm();
            }
        }

        function loadDetailForm(){
            $query = "select * from ".$this->tableName." where ID=".$this->itemID;
            $result = $this->query($query);
            $row = $result->fetch(PDO::FETCH_ASSOC);

            $html="<br>";
            $html.="<form>";
            foreach($row as $keys => $values){
            $html.="<div class=\"form-group row\">";
               $html .="<label class=\"col-sm-3 col-form-label\">$keys</label><div class=\"col-sm-8\">";
               $html .="<input type = \"text\" value =\"$values\" class =\"form-control\"></div>";
               $html .="<br>";
            $html.="</div>";
                
            }
            $html .="</form>";
            echo $html;
        }

        
    } 
?>