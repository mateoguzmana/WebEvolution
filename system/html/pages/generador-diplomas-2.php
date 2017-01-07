<?
include("../../includes/conexion.php");


	
 	// récupération du contenu HTML
	ob_start();
 	include(dirname(__FILE__).'/generador-diplomas-ok.php');
	$content = ob_get_clean();

	// conversion HTML => PDF
	require_once(dirname(__FILE__).'/html2pdf.class.php');

	$html2pdf = new HTML2PDF('L', 'A4', 'es');
	$html2pdf->pdf->SetDisplayMode(fullpage); 
//	$html2pdf->pdf->SetProtection(array('print'), 'spipu');
	$html2pdf->WriteHTML($content, isset($_GET['']));
	$html2pdf->Output('factura-'.$Id.'.pdf');

?>	