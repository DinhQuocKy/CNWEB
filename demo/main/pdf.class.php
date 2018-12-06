
<?php

 //include autoloader
require_once '../../dompdf/autoload.inc.php';

//reference the Dompdf namespace
use Dompdf\Dompdf;
class PDFClass
{
	function createPDF($html){
		//initialize dompdf class
		$document =new Dompdf();
		$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

		$document->loadHtml($html);

		//set page size and orientation

		$document->setPaper('A4','landscape');
		
		//Render the HTML as PDF

		$document->render();

		//Get output of generated pdf in Browser

		$document->stream('Webslesson',array("Attachment"=>0));
		// 1 Download
		// 0 Preview
	}

	

}


?>