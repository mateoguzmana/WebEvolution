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
$Idcliente 			=$_REQUEST["Cliente"];
$Fecha 				=$_REQUEST["Fecha"];
$Detalles 			=$_REQUEST["Detalles"];


$sql="UPDATE Seguimiento SET Idcliente='$Idcliente',Fecha='$Fecha',Detalles='$Detalles' WHERE Id='$Id'";
mysql_query($sql);

		

$archivo1 = $_FILES['Archivo']['tmp_name'];

$archiv			=			$_FILES['Archivo']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];

if (!empty($archiv)) {
$foto1= $Id.".".$ext;

$ruta="clientes/".$Idcliente;
if(!file_exists($ruta))
{
mkdir ($ruta);
}
(copy($archivo1, $ruta."/".$foto1));



$query="UPDATE Seguimiento set Archivo='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);
}	
?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
