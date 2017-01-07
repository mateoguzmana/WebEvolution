<?
session_start();

include("../../includes/conexion.php");

$query1         	="SELECT * FROM Clientes WHERE Id=7";
$result1        	=mysql_query($query1,$id);
while 				($row1=mysql_fetch_array($result1)) {
$Idcliente 			=$row1["Id"];
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
}

$FechaActual	= date('Y-m-d');
$DiasActual     = date('d',strtotime($FechaActual));

//Funcion diferencia de días

function DiferenciaDias($Actual,$Proxima){
	if (!is_integer($Actual)) $Actual = strtotime($Actual);
    if (!is_integer($Proxima)) $Proxima = strtotime($Proxima);  
    
       return ($Actual - $Proxima) / 60 / 60 / 24;
}

if (!empty($FechaVenceH)) {
$DiferenciaHosting = DiferenciaDias($FechaVenceH,$FechaActual);
if ($DiferenciaHosting<15 && $DiferenciaHosting>0) {
$Mensaje1= "Restan ".$DiferenciaHosting." días para vencerse el hosting del cliente ".$Nombre;
$query2 = "INSERT INTO Notificaciones (Mensaje,Fecha) VALUES ('$Mensaje1','$FechaActual')";
$result2=mysql_query($query2,$id);
}
}

if (!empty($FechaVenceD)) {
$DiferenciaDominio = DiferenciaDias($FechaVenceD,$FechaActual);
if ($DiferenciaDominio<15 && $DiferenciaDominio>0) {
$Mensaje2= "Restan ".$DiferenciaDominio." días para vencerse el dominio del cliente ".$Nombre;
$query2 = "INSERT INTO Notificaciones (Mensaje,Fecha) VALUES ('$Mensaje2','$FechaActual')";
$result2=mysql_query($query2,$id);
}
}
?>