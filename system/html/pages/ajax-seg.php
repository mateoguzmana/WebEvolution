<?
session_start();

include("../../includes/conexion.php");

$Id 	= $_REQUEST["Id"];
$Estado = $_REQUEST["Estado"];

$query  = "UPDATE Seg_proyecto SET Estado='$Estado' WHERE Id='$Id'";
$result = mysql_query($query,$id);

echo "Estado modificado correctamente.";
?>