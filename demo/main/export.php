<?php
if(isset($_GET['id']))
	echo $id = $_GET['id'];

include_once 'pdf.php';
include_once 'pdf.class.php';
$pdfClass= new PDFClass();
//test

if($id==100){
	$html =$pdfSellect->execute("employee");
	$pdfClass->createPDF($html);
}
else
	$html =$pdfSellect->execute("food");
	$pdfClass->createPDF($html);

?>