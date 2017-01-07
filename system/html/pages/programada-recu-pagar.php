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

$FechaActual 	=date('Y-m-d');
$horaactual 	= date("Y-m-d H:i:s");

$Usuario 		=$_SESSION['usuario'];

$querySIN		="SELECT * FROM CuentasPagar WHERE Periocidad<>'' ";
$resultSIN		=mysql_query($querySIN, $id);

while($rowSIN	=mysql_fetch_array($resultSIN))
{
$TipoCuenta			=$rowSIN["TipoCuenta"];
$NOpcion 			=$rowSIN["Opcion"];
$Idobra				=$rowSIN["Idobra"];
$Idproveedor		=$rowSIN["Idproveedor"];
$Obra 				=$rowSIN["Obra"];
$NumeroFactura		=$rowSIN["NumeroFactura"];
$Proveedor 			=$rowSIN["Proveedor"];
$TipoCtaIni 		=$rowSIN["TipoCta"];
$NumeroCuentaIni	=$rowSIN["NumeroCuenta"];
$FormaPagoIni 		=$rowSIN["FormaPago"];
$FechaInicio 		=$rowSIN["FechaInicio"];
$FechaFin 			=$rowSIN["FechaFin"];
$Periodicidad 		=$rowSIN["Periocidad"];
$Retencion 			=$rowSIN["Retencion"];
$Valor 				=$rowSIN["Valor"];
$ValorRetencion 	=$rowSIN["ValorRetencion"];
$Concepto			=$rowSIN["Concepto"];
$Estado 			=$rowSIN["Estado"];
$Fecha 				=$rowSIN["Fecha"];
$FechaAnulacion		=$rowSIN["FechaAnulacion"];
$MotivoAnulacion	=$rowSIN["MotivoAnulacion"];
$UsuarioAnula 	 	=$rowSIN["UsuarioAnula"];

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

if($FechaFin==$FechaActual)

$sql="INSERT INTO  CuentasPagar (TipoCuenta,NumeroFactura,Idobra,Idproveedor,Obra,Proveedor,FechaInicio,FechaFin,Periocidad,Retencion,Valor,ValorRetencion,Concepto,Usuario,Estado)";
$sql.= "VALUES ('$TipoCuenta', '$NumeroFactura' , '$Idobra' , '$Idproveedor' , '$Obra' , '$Proveedor' , '$FechaInicio' , '$NuevaFecha' , '$Periodicidad' ,'$Retencion' ,'$Valor' , '$ValorRetencion' ,'$Concepto','$Usuario','0')";
mysql_query($sql);

$query		="SELECT* FROM CuentasPagar Order by Id ASC" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Id			=$row["Id"];
}

$NewMail = new PHPMailer();
$NewMail->Host     = "localhost";
$NewMail->From     = "mateo@webevolution.com.co"; 
$NewMail->FromName = utf8_decode("Mateo Guzmán");  
$NewMail->Subject  = "Recordatorio de pago"; 	 
$NewMail->AddAddress("mateoguzman2010@hotmail.com",utf8_decode("Mateo Guzmán"));
$NewMail->Body     = utf8_decode("Se ha creado el pago recurrente Nro. ".$Id." revisar. <a href='http://webevolution.com.co/system/html/pages/act-pagos-2.php?Id=".$Id."&Idcliente=&Idmenu=4&Idsubmenu=7&Idopcmenu=21'>Ver cuenta creada en el sistema.</a>");
$NewMail->AltBody  = utf8_decode("Se ha creado el pago recurrente Nro. ".$Id." revisar.");
$NewMail->Send();
}
?>