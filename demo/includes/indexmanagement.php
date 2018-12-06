<?php
    class IndexManagement{
        // Chia route để xử lý thanh breadcrumb
        public function getBreadcrumbInfo(){
            $id ="";
            if (isset($_GET['id'])) $id = $_GET['id'];
            if ($id == ""){
                return '<li><i class="fa fa-home"></i><a href="index.php">Trang Chủ</a></li>';
            }
            $breadcrumbroute = [
                100=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Thực Đơn</a></li>",
                101=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"#\">Thực Đơn</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Thức Ăn</a></li>",
                102=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"#\">Thực Đơn</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Đồ Uống</a></li>",

                200=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Thống Kê</a></li>",
            
                300=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Nhân Viên</a></li>",
                400=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Thư Viện Ảnh</a></li>",
                600=>"<li>
                <i class=\"fa fa-home\"></i><a href=\"index.php\">Trang Chủ</a><i class=\"fa fa-angle-right\"></i></li><li><a href=\"#\">Thông Tin Liên Hệ</a></li>"
            ];
            if (array_key_exists($id,$breadcrumbroute)){
                return $breadcrumbroute[$id];
            }
            return $breadcrumbroute[$id-($id%100)];
        }
        //Xừ lý Page Title
        public function getPageTitle(){
            $id="";
            if (isset($_GET['id'])) $id = $_GET['id'];
            if ($id == "") return "TRANG CHỦ";
            $pagetitle  = [
                100 => "THỰC ĐƠN",
                101 => "THỨC ĂN",
                102 => "ĐỒ UỐNG",
                200 => "THỐNG KÊ",
                300 => "NHÂN VIÊN",
                400 => "THƯ VIỆN ẢNH",
                600 => "THÔNG TIN LIÊN HỆ"
            ];
            if (array_key_exists($id,$pagetitle)){
                return $pagetitle[$id];
            }
            return $pagetitle[$id-($id % 100)];
        }
    }
    $indexmanagement = new IndexManagement();
?>