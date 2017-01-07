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

$query="SELECT * FROM Facturacion WHERE (Fechalim>='$Desde') AND (Fechalim<='$Hasta') AND (Estado=4 || Estado=3)";
$result=mysql_query($query,$id);
while ($row=mysql_fetch_array($result)) {
$result++;
$Id 				=$row["Id"];
$Idcliente 			=$row["Idcliente"];
$Idproyecto 		=$row["Idobra"];
$Fechafact 			=$row["Fechafact"];
$Fechalim 			=$row["Fechalim"];
$Valor 				=$row["Valor"];
$ValorCobrado 		=$row["ValorCobrado"];
$Deuda				=($Valor-$ValorCobrado);
$Deuda=number_format($Deuda,0,'','.');

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

$fila="<tr><td>".$Id."</td><td>".$Cliente."</td><td>".$Proyecto."</td><td> $ ".$Deuda."</td></tr>";	


echo ($fila);


} 


					
?>
