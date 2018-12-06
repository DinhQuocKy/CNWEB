<?php
if(isset($_GET['id']))
	echo $id = $_GET['id'];

include_once 'pdf.php';
include_once 'pdf.class.php';
$pdfClass= new PDFClass();
//test
$html ="";
if($id==101){
	$html .="<h1 style=\"text-align:center;\">DANH SACH DO AN</h1><br>";
	$html .=$pdfSellect->execute("food");
}
if($id==102){
	$html .="<h1 style=\"text-align:center;\">DANH SACH DO UONG</h1><br>";
	$html .=$pdfSellect->execute("drink");
}

if($id==300){
	$html .="<h1 style=\"text-align:center;\">DANH SACH NHAN VIEN</h1><br>";
	$html .=$pdfSellect->execute("employee");
}
if($_GET['action']=='pdf'){
	$pdfClass->createPDF($html);
}
// $pdfClass->createPDF($html);
if($_GET['action']=='excel'){
	echo $html;
	include 'excel.php';
}

?>