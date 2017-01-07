<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$datos		= $_REQUEST["hidY"];
$datos	 	= explode(',', $datos);

$horaactual = date("Y-m-d H:i:s");
$Usuario	 = $_SESSION['usuario'];

$Idcliente			=$_REQUEST["Idcliente"];
$Razon				=$_REQUEST["Nombre"];
$Fechafact			=$_REQUEST["Fechafact"];
$Fechalim			=$_REQUEST["Fechalim"];
$Nit				=$_REQUEST["Nit"];
$Direccion			=$_REQUEST["Direccion"];
$Ciudad				=$_REQUEST["Ciudad"];
$Descripcion		=$_REQUEST["Descripcion"];
$Obra 				=$_REQUEST["Idobra"];
$Retencion  		=$_REQUEST["Retencion"];
$ReteICA 			=$_REQUEST["ReteICA"];
$Periodicidad 		=$_REQUEST["Periodicidad"];

$IvaK 				=$_REQUEST["Iva"];





$sql="INSERT INTO  Facturacion (Idcliente,Idobra ,Razon, Nit, Direccion, Ciudad, Fechafact, Fechalim, Descripcion, Iva, Retencion, ReteICA,Fecha, Usuario,Recurrente,Periodicidad)";
$sql.= "VALUES ('$Idcliente','$Obra','$Razon','$Nit','$Direccion','$Ciudad','$Fechafact','$Fechalim','$Descripcion','$IvaK','$Retencion','$ReteICA','$horaactual','$Usuario',1,'$Periodicidad')";
mysql_query($sql);


$query		="SELECT* FROM Facturacion Order by Id ASC" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Id			=$row["Id"];
}

$Iva		=($IvaK/100);	
		
for ( $i = 1 ; $i <= 30 ; $i ++) 
{	
$cant						= $_POST["cant".$i];
$Idobra						= $_POST["Idobra"];
$descri						= $_POST["descri".$i];	
$vlr						= $_POST["vlr".$i];	

	if(!empty($cant) || !empty($plano) || !empty($descri) || !empty($vlr))	
	{
	$vlr					= str_replace(".","",$vlr);
	$cant					= str_replace(".","",$cant);
	$total					= $vlr*$cant;
	$Ivin					= $total*$Iva;
	
	
		$sql="INSERT INTO  Facturacionmov (Idfact, Idobra, Cant, Descripcion, Neto, Valor, Iva)";
		$sql.= "VALUES ('$Id', '$Idobra', '$cant', '$descri', '$vlr', '$total','$Ivin')";
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

$Url			=	$_SESSION['anterior'];
$Url			=	str_replace("Idcliente","c",$Url);
?>


	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$Url?>';
</script>	
