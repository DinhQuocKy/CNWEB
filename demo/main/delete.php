<?php 
    include_once "../includes/connection.php";
    if (isset($_GET['id'])){
    class Delete extends Connection{
        public function execute($tablename,$itemid){
            $sql = "delete from $tablename where ID = $itemid";
            $this->query($sql);
            echo "<script>location.href='index.php?id=".$_GET['id']."';</script>";
        }
    }
    }
?>