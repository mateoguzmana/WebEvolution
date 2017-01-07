<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Desde =$_GET["FechaInicio"];
$Hasta =$_GET["FechaFin"];

$query2="SELECT SUM(Valor) AS VALOR FROM Prospectos WHERE (Fechainicio>='$Desde') AND (Fechainicio<='$Hasta') AND Muestra=0";
$result2=mysql_query($query2,$id);
while ($row2=mysql_fetch_array($result2)) {
$VALOR=$row2["VALOR"];	
}

$TOTAL=number_format($VALOR,0,'','.');
echo($TOTAL);
?>