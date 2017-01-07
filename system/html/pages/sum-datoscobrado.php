<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Desde =$_GET["FechaInicio"];
$Hasta =$_GET["FechaFin"];

$query2="SELECT SUM(Abono) AS VALOR FROM HistorialCobros WHERE (FechaAbono>='$Desde') AND (FechaAbono<='$Hasta') AND Muestra=0";
$result2=mysql_query($query2,$id);
while ($row2=mysql_fetch_array($result2)) {
$TOTAL=$row2["VALOR"];	
}
$TOTAL=number_format($TOTAL,0,'','.');
echo($TOTAL);
?>