<?
session_start();


include("../../includes/conexion.php");

$Actual = date('Y-m-d');

$query = "SELECT * FROM Seg_proyecto WHERE Muestra=0 AND Estado=0";
$result= mysql_query($query,$id);

while ($row = mysql_fetch_array($result)) {

$Id    = $row["Id"];
$Fin   = $row["Fin"];

if($Fin<$Actual){

	$query2 = "UPDATE Seg_proyecto SET Estado=2 WHERE Id='$Id'";
	$result2= mysql_query($query2,$id);

}

}



?>


