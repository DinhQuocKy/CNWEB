<?php
    include_once "../includes/connection.php";
    
   if (isset($_GET['id'])){
        class Add extends Connection{

            private $columntitle;
            private $tablename;

            function __construct($name){
                parent::__construct();
                $this->tablename = $name;
                $query = "select * from ".$this->tablename." limit 0";
                $result = $this->query($query);
                
                $columncount = $result->columnCount();
                for ($i = 0; $i < $columncount ; $i++){
                    $meta=$result->getColumnMeta($i);
                    $this->columntitle[$i]=$meta['name'];
                }
            }

            public function execute(){
                if (isset($_POST['submit'])){
                    $datastorage;
                    foreach($this->columntitle as $title){
                        $datastorage[$title] = $_POST[$title];
                    }
                    $values = "";
                    foreach ($datastorage as $i){
                        $values.="'".$i."',";
                    }
                    $values = rtrim($values,",");                 
                    $query = "insert into ".$this->tablename." values (".$values.")";
                    $this->query($query);
                    echo "<script>alert('Item has been ADDED');
                    location.href='index.php?id=".$_GET['id']."';</script>" ;

                }
                else{
                    $this->LoadAddForm();
                }
            }

            public function LoadAddForm(){
                $id = $_GET['id'];
                $html="";
                $html.='<form action="index.php?id='.$id.'&action=add" method="post">';
                foreach($this->columntitle as $title){
                    $html.='<div class="form-group">
                                <label for="'.$title.'">'.$title.'</label>
                                <input type="text" class="form-control" name="'.$title.'" required>
                            </div>';
                }
                $html.= '<button name="submit" type="submit" class ="btn btn-info btn-lg ">OK</button>';
                $html.='</form>';
                echo $html;
            }
        }
    }
?>