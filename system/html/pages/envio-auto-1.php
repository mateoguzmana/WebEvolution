<?
session_start();

/**
* @author Mateo Guzmán
*/

include("../../includes/conexion.php");
include('PHPMailer/class.phpmailer.php');

function DiferenciaDias($Actual,$Proxima){
	if (!is_integer($Actual)) $Actual = strtotime($Actual);
    if (!is_integer($Proxima)) $Proxima = strtotime($Proxima);  
    
       return ($Actual - $Proxima) / 60 / 60 / 24;
}

$query1         	="SELECT * FROM Clientes";
$result1        	=mysql_query($query1,$id);
while 				($row1=mysql_fetch_array($result1)) {
$Idcliente 			=$row1["Id"];
$Email 				=$row1["Email"];
$Nombre 			=$row1["Nombre"];
$Hosting 			=$row1["Hosting"];

$FechaOrigenH 		=$row1["FechaOrigenH"];
$FechaVenceH		=$row1["FechaVenceH"];
$EmpresaH 			=$row1["EmpresaH"];
$UsuarioH 			=$row1["UsuarioH"];
$ContrasenaH 		=$row1["ContrasenaH"];

$FechaOrigenD 		=$row1["FechaOrigenD"];
$FechaVenceD		=$row1["FechaVenceD"];
$EmpresaD 			=$row1["EmpresaD"];
$UsuarioD 			=$row1["UsuarioD"];
$ContrasenaD 		=$row1["ContrasenaD"];

$FechaActual	= date('Y-m-d');
$DiasActual     = date('d',strtotime($FechaActual));


if (!empty($FechaVenceH) && ($Hosting==1 || $Hosting==3)) {
$DiferenciaHosting = DiferenciaDias($FechaVenceH,$FechaActual);
/*
if ($DiferenciaHosting==15 || $DiferenciaHosting==7 || $DiferenciaHosting==1) {
$Mensaje1= "Restan ".$DiferenciaHosting." días para vencerse su hosting (".$Nombre.") recuerde pagar a tiempo."."<br><br/>
Cualquier inquietud no dude en comunicarse con nosotros, con todo el gusto lo atenderemos.";


					
					$NewMail=new PHPMailer();
					$NewMail->Host 	   = "localhost"; 
					$NewMail->From 	   = "mateo@webevolution.com.co"; 
					$NewMail->FromName = utf8_decode("Mateo Guzmán"); 
					$NewMail->Subject  = "Recordatorio de pago"; 
					$NewMail->AddAddress($Email,utf8_decode($Nombre));
					$NewMail->Body     = utf8_decode($Mensaje1);
					$NewMail->AltBody  = utf8_decode($Mensaje1); 
					$NewMail->Send();


}
*/
if ($DiferenciaHosting==2) {
//Consulta hosting
$queryONE  ="INSERT INTO Facturacion (Idcliente,Razon,Fechafact,Fechalim,Descripcion) VALUES ('$Idcliente','$Nombre','$FechaActual','$FechaVenceH','Pago hosting')";
$resultONE =mysql_query($queryONE,$id);

$queryR1    ="SELECT * FROM Facturacion ORDER BY Id ASC";
$resultR1   =mysql_query($queryR1,$id);
while 		($rowR1=mysql_fetch_array($resultR1)) {
$IdR1 		=$rowR1["Id"];
$FechalimR1 =$rowR1["Fechalim"];
}

$NewMail1=new PHPMailer();
$NewMail1->Host 	= "localhost"; 
$NewMail1->From 	= "mateo@webevolution.com.co"; 
$NewMail1->FromName = utf8_decode("Mateo Guzmán"); 
$NewMail1->Subject  = "Recordatorio de pago"; 
$NewMail1->AddAddress("mateoguzman2010@hotmail.com",utf8_decode("WebEvolution"));
$NewMail1->Body     = utf8_decode("Se ha creado un recibo de caja del pago del hosting del cliente ".$Nombre." con el Id Nro. ".$IdR1." con fecha de vencimiento (".$FechalimR1."). <a href='http://webevolution.com.co/system/html/pages/act-factura-2.php?Id=".$IdR1."&Idcliente=".$Idcliente."&Idmenu=5&Idsubmenu=17&Idopcmenu='> (Ver) </a>"); 
$NewMail1->AltBody  = utf8_decode("Se ha creado un recibo de caja del pago del hosting del cliente ".$Nombre); 
$NewMail1->Send();
}
}

if (!empty($FechaVenceD) && ($Hosting==2 || $Hosting==3)) {
$DiferenciaDominio = DiferenciaDias($FechaVenceD,$FechaActual);
/*
if ($DiferenciaDominio==15 || $DiferenciaDominio==7 || $DiferenciaDominio==1) {
$Mensaje2= "Restan ".$DiferenciaDominio." días para vencerse su dominio (".$Nombre.") Recuerde pagar a tiempo."."<br></br>
Cualquier inquietud no dude en comunicarse con nosotros, con todo el gusto lo atenderemos.";

				
					$NewMail2=new PHPMailer();
					$NewMail2->Host 	= "localhost"; 
					$NewMail2->From 	= "mateo@webevolution.com.co"; 
					$NewMail2->FromName = utf8_decode("Mateo Guzmán"); 
					$NewMail2->Subject  = "Recordatorio de pago"; 
					$NewMail2->AddAddress($Email,utf8_decode($Nombre));
					$NewMail2->Body     = utf8_decode($Mensaje2); 
					$NewMail2->AltBody  = utf8_decode($Mensaje2); 
					$NewMail2->Send();
					
}
*/
if ($DiferenciaDominio==2) {
// Consulta dominio
$queryTWO  ="INSERT INTO Facturacion (Idcliente,Razon,Fechafact,Fechalim,Descripcion) VALUES ('$Idcliente','$Nombre','$FechaActual','$FechaVenceD','Pago dominio')";
$resultTWO =mysql_query($queryTWO,$id);

$queryR2    ="SELECT * FROM Facturacion ORDER BY Id ASC";
$resultR2   =mysql_query($queryR2,$id);
while 		($rowR2=mysql_fetch_array($resultR2)) {
$IdR2 		=$rowR2["Id"];
$FechalimR2 =$rowR2["Fechalim"];
}

$NewMail2=new PHPMailer();
$NewMail2->Host 	= "localhost"; 
$NewMail2->From 	= "mateo@webevolution.com.co"; 
$NewMail2->FromName = utf8_decode("Mateo Guzmán"); 
$NewMail2->Subject  = "Recordatorio de pago"; 
$NewMail2->AddAddress("mateoguzman2010@hotmail.com",utf8_decode("WebEvolution"));
$NewMail2->Body     = utf8_decode("Se ha creado un recibo de caja del pago del dominio del cliente ".$Nombre." con el Id Nro. ".$IdR2." con fecha de vencimiento (".$FechalimR2."). <a href='http://webevolution.com.co/system/html/pages/act-factura-2.php?Id=".$IdR2."&Idcliente=".$Idcliente."&Idmenu=5&Idsubmenu=17&Idopcmenu='> (Ver) </a>"); 
$NewMail2->AltBody  = utf8_decode("Se ha creado un recibo de caja del pago del dominio del cliente ".$Nombre); 
$NewMail2->Send();
}
}


}
?>