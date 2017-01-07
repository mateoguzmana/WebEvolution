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

$query="SELECT * FROM Prospectos WHERE (FechaInicio>='$Desde') AND (Fechainicio<='$Hasta') AND Muestra=0";
$result=mysql_query($query,$id);
while ($row=mysql_fetch_array($result)) {
$result++;
$Id 				=$row["Id"];
$Idcliente 			=$row["Idcliente"];
$Fechafact 			=$row["Fechainicio"];
$Valor 				=$row["Valor"];
$ValorCobrado 		=$row["ValorCobrado"];
$Deuda				=($Valor-$ValorCobrado);
$Deuda=number_format($Deuda,0,'','.');
$Valor=number_format($Valor,0,'','.');

$queryKK		="SELECT* FROM Clientes where Id='$Idcliente'";
$resultKK		=mysql_query($queryKK, $id);

While($rowKK	=mysql_fetch_array($resultKK))
{
$Cliente		=$rowKK["Nombre"];		
}	
	

$fila="<tr><td>".$Id."</td><td>".$Cliente."</td><td>".$Fechafact."</td><td> $ ".$Valor."</td></tr>";	


echo ($fila);


} 


					
?>
