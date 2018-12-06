<?php
    include_once "../includes/connection.php";
    /* sory mấy ông cách đặt tên tui củ chuối quá quy ước là vậy nha:
    Methods: methodName
    properties: propertiesName
    variable: variablename
    class: ClassName
    */
    if(isset($_GET['id'])){
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
            $html.="<div class=\"panel-group\">";
            foreach($row as $keys => $values){
                $html.="<div class=\"panel panel-primary\">";
                    $html.="<div style=\"font-size:20px;\" class=\"panel-heading\">".$keys."</div>";
                    $html.="<div class=\"panel-body\">".$values."</div>";
                $html.="</div><br>";
                
            }
            $html.="</div>";
            echo $html;
        }

        }
    } 
?>