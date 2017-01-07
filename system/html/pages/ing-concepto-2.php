<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero		=	$_SESSION['IdR'];

$Nombre				=$_REQUEST["Nombre"];


$sql="INSERT INTO  Conceptos (Nombre)";
$sql.= "VALUES ('$Nombre')";
mysql_query($sql);


?>
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
