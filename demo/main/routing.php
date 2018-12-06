<?php
    include_once "content.php";
    $action = "";
    $id = "";
    $itemid = "";
    if (isset($_GET['action'])) $action = $_GET['action'];
    if (isset($_GET['id'])) $id = $_GET['id'];
    if (isset($_GET['itemid'])) $itemid = $_GET['itemid'];

    if ($id == ""){
        return;
    }

    if ($id == 100){

        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        echo $content->execute("food");
        echo "<br><br><br>";
        echo $content->execute("drink");

        if ($action=="print"){
                
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
        }
        if($action=='pdf'){
            echo "<META http-equiv=\"refresh\" content=\"0;URL=http://localhost:8080/webtech/demo/main/export.php?id=$id\">";
        }

        return;
    }

    if ($id == 101){
        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        if ($action==""){
        echo $content->execute("food");
        }
        else{
            if ($action=="print"){
                echo $content->execute("food");
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
            }
            if ($action == "delete"){
                include "delete.php";
                $delete = new Delete();
                $delete->execute("food",$itemid);
            }
            if ($action=="add"){
                include "add.php";
                $add = new Add("food");
                $add->execute();
            }
            if ($action=="update"){
                include "update.php";
                $update = new Update("food",$itemid);
                $update->execute();
            }
            if ($action=="detail"){
                include "detail.php";
                $detail = new Detail("food",$itemid);
                $detail->execute();
            }
        }
        return;
    }

    if ($id == 102){
        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        if ($action==""){
            echo $content->execute("drink");
        } 
        else{
            if ($action=="print"){
                echo $content->execute("drink");
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
            }   
            if ($action == "delete"){
                include "delete.php";
                $delete = new Delete();
                $delete->execute("drink",$itemid);
            }
            if ($action=="add"){
                include "add.php";
                $add = new Add("drink");
                $add->execute();
            }
            if ($action=="update"){
                include "update.php";
                $update = new Update("drink",$itemid);
                $update->execute();
            }
            if ($action=="detail"){
                include "detail.php";
                $detail = new Detail("drink",$itemid);
                $detail->execute();
            }
        }
        return;
    }

    if ($id == 200){

        include "drawChart.php";
        $drawChart = new DrawChart('bill');
        $result =$drawChart->execute();
        
        echo "<br><br><br>";
        echo $content->execute("bill");
        echo "<br><br><br>";
 
    }


    if ($id == 300){
        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        if ($action==""){
            echo $content->execute("employee");
        }
        else{
            if ($action=="print"){
                echo $content->execute("employee");
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
            }
            if ($action == "delete"){
                include "delete.php";
                $delete = new Delete();
                $delete->execute("employee",$itemid);
            }
            if ($action=="add"){
                include "add.php";
                $add = new Add("employee");
                $add->execute();
            }
             if ($action=="update"){
                include "update.php";
                $update = new Update("employee",$itemid);
                $update->execute();
            }
            if ($action=="detail"){
                include "detail.php";
                $detail = new Detail("employee",$itemid);
                $detail->execute();
            }
        }
        return;
    }

    if ($id == 400){

        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        echo $content->execute("bill");

        if ($action=="print"){
                
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
        }
        if($action=='pdf'){
            echo "<META http-equiv=\"refresh\" content=\"0;URL=http://localhost:8080/webtech/demo/main/export.php?id=$id\">";
        }

        return;
    }

    if ($id == 401){
        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        if ($action==""){
        print_r($content->executeCondition("bill","Pay=1"));
        }
        else{
            if ($action=="print"){
                echo $content->execute("bill");
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
            }
            // if ($action == "delete"){
            //     echo "<script>";
            //     echo "alert('Không thể xóa hóa đơn đã thanh toán');";    
            //     echo "</script>";
            // }
            // if ($action=="update"){
            //     echo "<script>";
            //     echo "alert('Không thể xóa hóa đơn đã thanh toán');";    
            //     echo "</script>";
            // }
            if ($action=="detail"){
                include "detail.php";
                $detail = new Detail("bill",$itemid);
                $detail->execute();
            }
        }
        return;
    }  
    if ($id == 402){
        // thanh công cụ
        include_once '../includes/tool.php';
        $tool =new Tool();
        echo $tool->createProducts($id);

        if ($action==""){
        print_r($content->executeCondition("bill","Pay=0"));
        }
        else{
            if ($action=="print"){
                echo $content->execute("bill");
                include_once 'printfile.php';
                $print = new PrintFile();
                echo $print->printF($id);
            }
            if ($action == "delete"){
                include "delete.php";
                $delete = new Delete();
                $delete->execute("bill",$itemid);
            }
            if ($action=="add"){
                include "add.php";
                $add = new Add("bill");
                $add->execute();
            }
            if ($action=="update"){
                include "update.php";
                $update = new Update("bill",$itemid);
                $update->execute();
            }
            if ($action=="detail"){
                include "detail.php";
                $detail = new Detail("bill",$itemid);
                $detail->execute();
            }
        }
        return;
    }
   if($id==500){
        include_once 'images.php';
    }
    if($id==600){
        include_once 'contact.php';
    }
    
?>