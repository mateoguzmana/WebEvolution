<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");

$Id 	=    $_REQUEST["IdL"];
$Inicio = 	 $_REQUEST["Inicio"];
$Fin 	= 	 $_REQUEST["Fin"];
$Titulo = 	 $_REQUEST["Titulo"];
$Nota 	= 	 $_REQUEST["Nota"];	
$Proveedor=  $_REQUEST["Proveedor"];


$sql="UPDATE Seg_proyecto SET Inicio='$Inicio', Fin='$Fin', Titulo='$Titulo', Nota='$Nota', Proveedor='$Proveedor' WHERE Id='$Id'";
mysql_query($sql);

//Archivo



$archivo1 = $_FILES['Archivo']['tmp_name'];

$archiv			=			$_FILES['Archivo']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];

if (!empty($archiv)) {
$foto1= $Id.".".$ext;

$ruta="Seg_proyecto";
if(!file_exists($ruta))
{
mkdir ($ruta);
}
(copy($archivo1, $ruta."/".$foto1));



$query="UPDATE Seg_proyecto set Archivo='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}
?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>