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

$query="SELECT * FROM CuentasPagar WHERE (FechaFin>='$Desde') AND (FechaFin<='$Hasta') AND (Estado=4 || Estado=0)";
$result=mysql_query($query,$id);
while ($row=mysql_fetch_array($result)) {
$result++;
$Id 				=$row["Id"];
$Idcliente 			=$row["Idproveedor"];
$Idproyecto 		=$row["Idobra"];
$FechaInicio 		=$row["FechaInicio"];
$FechaFin 			=$row["FechaFin"];
$Valor 				=$row["Valor"];
$ValorCobrado 		=$row["ValorAbonado"];
$Deuda				=($Valor-$ValorCobrado);
$Deuda=number_format($Deuda,0,'','.');

$queryKK		="SELECT* FROM Proveedores where Id='$Idcliente'";
$resultKK		=mysql_query($queryKK, $id);

While($rowKK	=mysql_fetch_array($resultKK))
{
$Cliente		=$rowKK["Nombre"];		
}	

$queryDD		="SELECT * FROM Conceptos where Id='$Idproyecto'";
$resultDD		=mysql_query($queryDD, $id);

While($rowDD	=mysql_fetch_array($resultDD))
{
$Proyecto		=$rowDD["Nombre"];		
}		

$fila="<tr><td>".$Id."</td><td>".$Cliente."</td><td>".$Proyecto."</td><td> $ ".$Deuda."</td></tr>";	


echo ($fila);


} 


					
?>
