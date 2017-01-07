<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");
include('PHPMailer/class.phpmailer.php');

$querySZS			="SELECT * FROM Facturacion WHERE (Estado=3 || Estado=4) AND Auto=1 Order by Fechalim DESC";
$resultSZS			=mysql_query($querySZS, $id);
while($rowSZS		=mysql_fetch_array($resultSZS))
{
$cobro++;
$Idfact 			=$rowSZS["Id"];
$Idobra 			=$rowSZS["Idobra"];
$Idcliente 			=$rowSZS["Idcliente"];
$Razon 				=$rowSZS["Razon"];
$Nit 				=$rowSZS["Nit"];
$Fechafact 			=$rowSZS["Fechafact"];
$FechaLim 			=$rowSZS["Fechalim"];
$Descripcion		=$rowSZS["Descripcion"];
$Valor1 			=$rowSZS["Total"];
$Abono1 			=$rowSZS["ValorCobrado"];
$Estado				=$rowSZS["Estado"];
$Deuda1				=($Valor1-$Abono1);

$queryNd 			="SELECT * FROM Proyectos WHERE Id='$Idobra'";
$resultNd 			=mysql_query($queryNd,$id);
while ($rowNd 		=mysql_fetch_array($resultNd)) {
$Obra1 				=$rowNd["Nombre"];
}

$query1         	="SELECT * FROM Clientes WHERE Id='$Idcliente'";
$result1        	=mysql_query($query1,$id);
while 				($row1=mysql_fetch_array($result1)) {
$Idcliente 			=$row1["Id"];
$Email 				=$row1["Email"];
$Nombre 			=$row1["Nombre"];
}


$fecha_actual1 = date("Y-m-d");  
$s1 = strtotime($FechaLim)-strtotime($fecha_actual1);  
$d1 = intval($s1/86400);  
$diferencia1 = $d1;

$Mensaje1= "Restan <strong>".$diferencia1."</strong> días para pagar su cuenta Nro. ".$Idfact." del proyecto ".$Obra1.".
\n\n<br><br/><a href='http://webevolution.com.co/system/html/pages/muestra-factura.php?Id=".$Idfact."&Estado=".$Estado."' target='_parent'> Ver recibo de caja </a><br><br/>"."Cualquier inquietud no dude comunicarse con nosotros, con todo el gusto lo atenderemos.<br><br/><hr height='100px'><br><br/>"."
<p style='font-size:12.5px;color:#585858;'>info@webevolution.com.co <br> <a style='decoration:none;' href='http://www.webevolution.com.co'>WebEvolution</a> Medellín, ".date('Y').".</p>";

if ($diferencia1==15 || $diferencia1==7 || $diferencia1==1) {



					$NewMail = new PHPMailer();
					$NewMail->Host     = "localhost"; 				   //El host donde tengamos alojado el correo
					$NewMail->From     = "mateo@webevolution.com.co";  //El correo del remitente
					$NewMail->FromName = utf8_decode("Mateo Guzmán");  //Nombre del remitente
					$NewMail->Subject  = "Recordatorio de pago"; 	   //El asunto del correo
					$NewMail->AddAddress($Email,utf8_decode($Nombre)); //La dirección del receptor del mail
					$NewMail->Body     = utf8_decode($Mensaje1); 	   //El mensaje
					$NewMail->AltBody  = utf8_decode($Mensaje1); 	   //Relleno
					$NewMail->Send();


}
}
?>