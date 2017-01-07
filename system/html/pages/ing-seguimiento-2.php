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


$Idcliente 			=$_REQUEST["Cliente"];
$Fecha 				=$_REQUEST["Fecha"];
$Detalles 			=$_REQUEST["Detalles"];


$sql="INSERT INTO  Seguimiento (Idcliente,Fecha,Detalles)";
$sql.= "VALUES ('$Idcliente','$Fecha','$Detalles')";
mysql_query($sql);

		
$query="SELECT * FROM Seguimiento ORDER BY Id DESC LIMIT 1";
$result=mysql_query($query,$id);
while ($row=mysql_fetch_array($result)) {
$Id 		=$row["Id"];
}



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
