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


$Casillero		=	$_SESSION['IdR'];

$Id					= $_REQUEST["Id"];
$Correos 			= $_REQUEST["Correos"];
if (isset($Correos)) {
	$Envio=1;
}
else{
	$Envio=0;
};

$horaactual 		= date("Y-m-d H:i:s");
$Usuario	 		= $_SESSION['usuario'];

$queryka		=	"UPDATE Facturacion set Estado = '3', Auto='$Envio' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);



?>


	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
