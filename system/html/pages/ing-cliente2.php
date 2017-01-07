<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero		=	$_SESSION['IdR'];

$Nombre				=$_REQUEST["Nombre"];
$Cedula				=$_REQUEST["Cedula"];
$Ciudad				=$_REQUEST["Ciudad"];
$Dir				=$_REQUEST["Direccion"];
$Telefono			=$_REQUEST["Telefono"];
$Celular			=$_REQUEST["Celular"];
$Contacto			=$_REQUEST["Contacto"];
$Celcontacto		=$_REQUEST["Celcontacto"];
$Email				=$_REQUEST["Email"];
$Retencion			=$_REQUEST["Retencion"];
$Contrasena			=$_REQUEST["Contrasena"];
$TipoCuenta 		=$_REQUEST["TipoCuenta"];
$NumeroCuenta  		=$_REQUEST["NumeroCuenta"];
$Titular 			=$_REQUEST["Titular"];
$Identificacion 	=$_REQUEST["Identificacion"];
$FormaPago 			=$_REQUEST["FormaPago"]; 
$Banco 				=$_REQUEST["Banco"];
$Hosting 			=$_REQUEST["Hosting"];
$Observaciones 		=$_REQUEST["Observaciones"];


$Usuario 			=$_REQUEST["Usuario"];


$queryevep			="SELECT COUNT(*) AS TOTAL FROM Clientes where Cedula = '$Cedula' and Muestra = 0";
$resultevep			=mysql_query($queryevep, $id);

while($rowevep		=mysql_fetch_array($resultevep))
{
$TOTAL				=$rowevep["TOTAL"];
}

if($TOTAL > 0)
{
?>
<script type="text/javascript">
alert('El cliente ingresado ya existe en el sistema.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?	
}
else
{
$sql="INSERT INTO  Clientes (Nombre, Cedula, Ciudad, Dir, Telefono, Celular, Contacto, Celcontacto, Email,
 Retencion, Contrasena, TipoCuenta, NumeroCuenta, Titular, Identificacion, FormaPago, Banco,Observaciones)";
$sql.= "VALUES ('$Nombre','$Cedula','$Ciudad','$Dir','$Telefono','$Celular','$Contacto','$Celcontacto','$Email',
'$Retencion','$Contrasena','$TipoCuenta','$NumeroCuenta','$Titular','$Identificacion','$FormaPago','$Banco','$Observaciones')";
mysql_query($sql);

$query		="SELECT* FROM Clientes Order by Id ASC" ;
$result		=mysql_query($query, $id);
		
while($row	=mysql_fetch_array($result))
{
$Id			=$row["Id"];
}

$Numero = $_REQUEST["Numero"];
$Numero2= $_REQUEST["Numero2"];

	for ($i=1; $i <=$Numero; $i++) { 
	$NombreH = $_REQUEST["NombreH".$i];
	$UrlH = $_REQUEST["UrlH".$i];
	$FechaH = $_REQUEST["FechaH".$i];
	$UsuarioH = $_REQUEST["UsuarioH".$i];
	$ContrasenaH = $_REQUEST["ContrasenaH".$i];
	$query1 = "INSERT INTO Hosting (Idcliente,Nombre,Url,Fecha,Usuario,Contrasena) 
	VALUES ('$Id','$NombreH','$UrlH','$FechaH','$UsuarioH','$ContrasenaH')";
	$result1=mysql_query($query1,$id);
	}

	for ($x=1; $x <=$Numero2; $x++) { 
	$NombreD = $_REQUEST["NombreD".$x];
	$UrlD = $_REQUEST["UrlD".$x];
	$ProveedorD = $_REQUEST["ProveedorD".$x];
	$FechaD = $_REQUEST["FechaD".$x];
	$UsuarioD = $_REQUEST["UsuarioD".$x];
	$ContrasenaD = $_REQUEST["ContrasenaD".$x];
	$query2 = "INSERT INTO Dominio (Idcliente,Nombre,Url,Proveedor,Fecha,Usuario,Contrasena) 
	VALUES ('$Id','$NombreD','$UrlD','$ProveedorD','$FechaD','$UsuarioD','$ContrasenaD')";
	$result2=mysql_query($query2,$id);
	}

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?
}
?>