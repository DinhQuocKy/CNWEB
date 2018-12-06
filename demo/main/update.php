<?php
include_once "../includes/connection.php";

if (isset($_GET['id'])){
    class Update extends Connection{
        private $itemID="";
        private $tableName="";
        private $columnTitle;

        function __construct($name,$itemid){
            parent::__construct();
            $this->tableName = $name;
            $this->itemID = $itemid;

            $query = "select * from ".$this->tableName." limit 0";
            $result = $this->query($query);
            
            $columncount = $result->columnCount();
            for ($i = 0; $i < $columncount ; $i++){
                $meta=$result->getColumnMeta($i);
                $this->columnTitle[$i]=$meta['name'];
            }        
        }

        public function execute(){
            if (isset($_POST['submit'])){
                $datastorage;
                foreach($this->columnTitle as $title){
                    $datastorage[$title] = $_POST[$title];
                }
                $setvalues = "";
                foreach ($datastorage as $keys => $values){
                   $setvalues .= $keys."='".$values."',";
                }
                $setvalues = rtrim($setvalues,","); 
                echo $setvalues;                
                $query = "update ".$this->tableName." set ".$setvalues." where ID=".$this->itemID;
                $this->query($query);
                
                echo "<script>alert('Item has been UPDATED');
                location.href='index.php?id=".$_GET['id']."';</script>" ;

            }
            else{
                $this->LoadUpdateForm();
            }
        }
        
        public function LoadUpdateForm(){
            $query = "select * from ".$this->tableName." where ID=".$this->itemID;
            $result = $this->query($query);
            $row = $result->fetch();
            $id = $_GET['id'];
            $html="";
                $html.='<form action="index.php?id='.$id.'&action=update&itemid='.$this->itemID.'" method="post">';
                foreach($this->columnTitle as $title){
                    $html.='<div class="form-group">
                                <label for="'.$title.'">'.$title.'</label>
                                <input type="text" class="form-control" name="'.$title.'" value='.$row[$title].' required>
                            </div>';
                }
                $html.= '<button name="submit" type="submit" class ="btn btn-info btn-lg ">OK</button>';
                $html.='</form>';
                echo $html;
        }
    }
   
}
?>