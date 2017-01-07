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

$Id					=$_REQUEST["Id"];
$Idcliente			=$_REQUEST["Idcliente"];
$Razon				=$_REQUEST["Nombre"];
$Fechafact			=$_REQUEST["Fechafact"];
$Fechalim			=$_REQUEST["Fechalim"];
$Nit				=$_REQUEST["Nit"];
$Direccion			=$_REQUEST["Direccion"];
$Ciudad				=$_REQUEST["Ciudad"];
$Descripcion		=$_REQUEST["Descripcion"];
$Obra 				=$_REQUEST["Idobra"];
$Retencion 			=$_REQUEST["Retencion"];
$ReteICA 			=$_REQUEST["ReteICA"];
 
$queryka		=	"UPDATE Facturado set Idcliente = '$Idcliente',Idobra='$Obra' ,Razon = '$Razon', Nit = '$Nit', Direccion = '$Direccion', Ciudad = '$Ciudad', Fechafact = '$Fechafact', Fechalim = '$Fechalim', Descripcion = '$Descripcion', Retencion='$Retencion', ReteICA='$ReteICA' ,Fecha = '$horaactual', Usuario = '$Usuario' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);

$SQL="Delete From Facturadomov Where Idfact='$Id'";
mysql_query($SQL);	

$query		="SELECT* FROM Impuestos" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Iva		=$row["Iva"];
}	
		
		
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
	
	
		$sql="INSERT INTO  Facturadomov (Idfact, Idobra, Cant, Descripcion, Neto, Valor, Iva)";
		$sql.= "VALUES ('$Id', '$Idobra', '$cant', '$descri', '$vlr', '$total','$Ivin')";
		mysql_query($sql);
		
	}
	
$cant						= '';
$plano						= '';
$descri						= '';
$vlr						= '';
$total						= '';

}


$query		="SELECT SUM(Valor) AS TOTAL FROM Facturadomov where Idfact = '$Id'" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$TOTAL		=$row["TOTAL"];
}


$query		="SELECT* FROM Impuestos" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Iva		=$row["Iva"];
}

$Ret=($ReteICA+$Retencion);
$Retenciones=($TOTAL*$Ret);
$Subtotal	=$Total*$Utilidad;
$Iva 		=(($TOTAL*$Iva)*0.05);
$Total 		=($TOTAL+$Iva)-$Retenciones;



$queryka		=	"UPDATE Facturado set Valor = '$TOTAL', Total = '$Total', Iva = '$Iva' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);

$Url			=	$_SESSION['anterior'];
?>


	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$Url?>';
</script>	
