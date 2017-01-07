<?
session_start();

/**
* @author Mateo Guzmán. Tarea programada para las facturas recurrentes.
*/

include("../../includes/conexion.php");
include('PHPMailer/class.phpmailer.php');

function DiferenciaDias($Actual,$Proxima){
	if (!is_integer($Actual)) $Actual = strtotime($Actual);
    if (!is_integer($Proxima)) $Proxima = strtotime($Proxima);  
    
       return ($Actual - $Proxima) / 60 / 60 / 24;
}

$FechaActual=date('Y-m-d');
$horaactual = date("Y-m-d H:i:s");

$queryUSERS         ="SELECT * FROM Facturacion WHERE Recurrente='1'";
$resultUSERS        =mysql_query($queryUSERS,$id);
while 				($rowUSERS=mysql_fetch_array($resultUSERS)) {
$Idfact 			=$rowUSERS["Id"];
$Idcliente 			=$rowUSERS["Idcliente"];
$Obra 				=$rowUSERS["Idobra"];
$Razon				=$rowUSERS["Razon"];
$Nit				=$rowUSERS["Nit"];
$Direccion			=$rowUSERS["Direccion"];
$Ciudad				=$rowUSERS["Ciudad"];
$Fechafact			=$rowUSERS["Fechafact"];
$Fechalim			=$rowUSERS["Fechalim"];
$Descripcion		=$rowUSERS["Descripcion"];
$Idobra 			=$rowUSERS["Idobra"];
$Valor				=$rowUSERS["Valor"];
$Total				=$rowUSERS["Total"];
$Iva				=$rowUSERS["Iva"];
$Retencion 			=$rowUSERS["Retencion"];
$ReteICA 			=$rowUSERS["ReteICA"];
$Deuda 				=$rowUSERS["ValorCobrado"];
$Estado				=$rowUSERS["Estado"];
$Usuario			=$rowUSERS["Usuario"];
$Fecha				=$rowUSERS["Fecha"];
$Estado				=$rowUSERS["Estado"];
$FechaAnulacion		=$rowUSERS["FechaAnulacion"];
$MotivoAnulacion	=$rowUSERS["MotivoAnulacion"];
$UsuarioAnula 	 	=$rowUSERS["UsuarioAnula"];
$Recurrente 		=$rowUSERS["Recurrente"];
$Periodicidad 		=$rowUSERS["Periodicidad"];

if ($Periodicidad==10) {
$DiaPer="10";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +10 days"));
}
elseif ($Periodicidad==15) {
$DiaPer="15";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +15 days"));
}
elseif ($Periodicidad==20) {
$DiaPer="20";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +20 days"));
}
elseif ($Periodicidad==30) {
$DiaPer="30";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +1 month"));
}
elseif ($Periodicidad==60) {
$DiaPer="60";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +2 months"));
}
elseif ($Periodicidad==90) {
$DiaPer="90";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +3 months"));
}
elseif ($Periodicidad==180) {
$DiaPer="180";
$NuevaFecha= date("Y-m-d", strtotime("$Fechalim +6 months"));
}
else{
$DiaPer="";
$NuevaFecha="";
}

if($Fechalim==$FechaActual)
$sql="INSERT INTO  Facturacion (Idcliente,Idobra ,Razon, Nit, Direccion, Ciudad, Fechafact, Fechalim, Descripcion, Retencion, ReteICA,Fecha, Usuario,Recurrente,Periodicidad)";
$sql.= "VALUES ('$Idcliente','$Obra','$Razon','$Nit','$Direccion','$Ciudad','$FechaActual','$NuevaFecha','$Descripcion','$Retencion','$ReteICA','$horaactual','$Usuario',1,'$Periodicidad')";
mysql_query($sql);


$query		="SELECT* FROM Facturacion Order by Id ASC" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Id			=$row["Id"];
}

$query		="SELECT* FROM Impuestos" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Iva		=$row["Iva"];
}		
		
$querymov="SELECT * FROM Facturacionmov WHERE Idfact='$Idfact'";
$resultmov=mysql_query($querymov);
while ($rowmov=mysql_fetch_array($resultmov)) {
$cant						= $rowmov["Cant"];
$Idobra						= $rowmov["Idobra"];
$descri						= $rowmov["Descripcion"];	
$vlr						= $rowmov["Neto"];	

if(!empty($cant) || !empty($plano) || !empty($descri) || !empty($vlr))	
{
$vlr					= str_replace(".","",$vlr);
$cant					= str_replace(".","",$cant);
$total					= $vlr*$cant;
$Ivin					= $total*$Iva;
	
	
	$sql="INSERT INTO  Facturacionmov (Idfact, Idobra, Cant, Descripcion, Neto, Valor, Iva)";
	$sql.="VALUES ('$Id', '$Idobra', '$cant', '$descri', '$vlr', '$total','$Ivin')";
	mysql_query($sql);	
		
}
	
$cant						= '';
$plano						= '';
$descri						= '';
$vlr						= '';
$total						= '';

}


$query		="SELECT SUM(Valor) AS TOTAL FROM Facturacionmov where Idfact = '$Id'" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$TOTAL		=$row["TOTAL"];
}

$Ret=($ReteICA+$Retencion);
$Retenciones=($TOTAL*$Ret);
$Subtotal	=$Total*$Utilidad;
$Iva 		=(($TOTAL*$Iva)*0.05);
$Total 		=($TOTAL+$Iva)-$Retenciones;

$queryka		=	"UPDATE Facturacion set Valor = '$TOTAL', Total = '$Total', Iva = '$Iva' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);


$NewMail = new PHPMailer();
$NewMail->Host     = "localhost";
$NewMail->From     = "mateo@webevolution.com.co"; 
$NewMail->FromName = utf8_decode("Mateo Guzmán");  
$NewMail->Subject  = "Recordatorio de pago"; 	 
$NewMail->AddAddress("mateoguzman2010@hotmail.com",utf8_decode("Mateo Guzmán"));
$NewMail->Body     = utf8_decode("Se ha creado la cuenta recurrente Nro. ".$Id." revisar. <a href='http://webevolution.com.co/system/html/pages/act-factura-2.php?Id=".$Id."&Idcliente=".$Idcliente."&Idmenu=5&Idsubmenu=17&Idopcmenu='>Ver cuenta creada en el sistema.</a>");
$NewMail->AltBody  = utf8_decode("Se ha creado la cuenta recurrente Nro. ".$Id." revisar.");
$NewMail->Send();
}
?>