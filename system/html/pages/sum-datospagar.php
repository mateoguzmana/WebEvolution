<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Desde =$_GET["FechaInicio"];
$Hasta =$_GET["FechaFin"];

$query2="SELECT SUM(Valor) AS VALOR FROM CuentasPagar WHERE (FechaFin>='$Desde') AND (FechaFin<='$Hasta') AND (Estado=4 || Estado=0)";
$result2=mysql_query($query2,$id);
while ($row2=mysql_fetch_array($result2)) {
$VALOR=$row2["VALOR"];	
}

$query3="SELECT SUM(ValorAbonado) AS COBRADO FROM CuentasPagar WHERE (FechaFin>='$Desde') AND (FechaFin<='$Hasta') AND (Estado=4 || Estado=0)";
$result3=mysql_query($query3,$id);
while ($row3=mysql_fetch_array($result3)) {
$COBRADO=$row3["COBRADO"];	
}

$TOTAL=($VALOR-$COBRADO);
$TOTAL=number_format($TOTAL,0,'','.');
echo($TOTAL);
?>