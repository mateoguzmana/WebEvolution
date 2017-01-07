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

if ($Correos==1) {
	$Envio=0;
}
else{
	$Envio=1;
};

$horaactual 	= date("Y-m-d H:i:s");
$Usuario	 	= $_SESSION['usuario'];

$queryka		=	"UPDATE Facturacion set Auto='$Envio' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);

echo ($Envio);

?>
