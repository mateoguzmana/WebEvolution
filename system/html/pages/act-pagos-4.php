<?
session_start();


if (empty($_SESSION['sesionx']))
{
?>
<script type="text/javascript">

	alert('Su sesion ha finadlizado.');
	parent.location.href=('login.php');

</script>
<?
}

include("../../includes/conexion.php");

$Id 				=$_REQUEST["Id"];
$TipoCuenta 		=$_REQUEST["TipoCuenta"];
$Opcion 			=$_REQUEST["TipoForm"];
$Idobra				=$_REQUEST["Idobra"];
$Idproveedor		=$_REQUEST["IdProve"];
$Obra				=$_REQUEST["Nombreobra"];
$Proveedor			=$_REQUEST["Nombreproveedor"];
$TipoCta 			=$_REQUEST["TipoCta"];
$NumeroCuenta		=$_REQUEST["NumeroCuenta"];
$FormaPago			=$_REQUEST["FormaPago"];
$FechaInicio		=$_REQUEST["FechaInicio"];
$FechaFin			=$_REQUEST["FechaFin"];
$Periocidad 		=$_REQUEST["Periocidad"];
$Valor				=$_REQUEST["Valor"];
$Concepto			=$_REQUEST["Concepto"];

$Valor		=	 str_replace("$","",$Valor);
$Valor		=	 str_replace(" ","",$Valor);
$Valor		=	 str_replace(",","",$Valor);
$Valor		=	 str_replace("_","",$Valor);
$Valor		=	 str_replace("___","",$Valor);
$Valor		=	 str_replace("__","",$Valor);


$sql="UPDATE CuentasPagar SET TipoCuenta='$TipoCuenta' , Opcion='$Opcion', Idobra='$Idobra' , Idproveedor='$Idproveedor', 
Obra='$Obra',Proveedor='$Proveedor' , FechaInicio='$FechaInicio', FechaFin='$FechaFin', Periocidad='$Periocidad' , Valor='$Valor', Concepto='$Concepto',Estado='$Estado' WHERE Id='$Id'  ";
$result	=	mysql_query($sql, $id);
				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
