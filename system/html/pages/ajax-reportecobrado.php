<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Desde =$_GET["FechaInicio"];
$Hasta =$_GET["FechaFin"];

$result=0;

$query="SELECT * FROM HistorialCobros WHERE (FechaAbono>='$Desde') AND (FechaAbono<='$Hasta') AND Muestra=0";
$result=mysql_query($query,$id);
while ($row=mysql_fetch_array($result)) {
$result++;
$Idcuenta 		=$row["Idcuenta"];
$Fecha 			=$row["FechaAbono"];
$Abono 			=$row["Abono"];
$Abono=number_format($Abono,0,'','.');

$query2="SELECT * FROM Facturacion WHERE Id='$Idcuenta'";
$result2=mysql_query($query2,$id);
while ($row2=mysql_fetch_array($result2)) {
$Idproyecto =$row2["Idobra"];
$Idcliente  =$row2["Idcliente"];
}

$queryKK		="SELECT* FROM Clientes where Id='$Idcliente'";
$resultKK		=mysql_query($queryKK, $id);

While($rowKK	=mysql_fetch_array($resultKK))
{
$Cliente		=$rowKK["Nombre"];		
}	

$queryDD		="SELECT * FROM Proyectos where Id='$Idproyecto'";
$resultDD		=mysql_query($queryDD, $id);

While($rowDD	=mysql_fetch_array($resultDD))
{
$Proyecto		=$rowDD["Nombre"];		
}		
if($Idproyecto==0){
$Proyecto		="OTRO";	
}


$fila="<tr><td>".$Idcuenta."</td><td>".$Cliente."</td><td>".$Proyecto."</td><td> $ ".$Abono."</td></tr>";	


echo ($fila);


} 


					
?>
