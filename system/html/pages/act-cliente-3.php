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



$Casillero			=$_SESSION['IdR'];

$Id					=$_REQUEST["Id"];
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


$queryka		=	"UPDATE Clientes set Nombre = '$Nombre', Cedula = '$Cedula', Ciudad = '$Ciudad', Dir = '$Dir', 
Telefono = '$Telefono', Celular = '$Celular', Contacto = '$Contacto', Celcontacto = '$Celcontacto', Email = '$Email', Retencion = '$Retencion', Contrasena = '$Contrasena',
TipoCuenta='$TipoCuenta', NumeroCuenta='$NumeroCuenta' ,Titular='$Titular', Identificacion='$Identificacion', FormaPago='$FormaPago', Banco='$Banco',
Hosting='$Hosting',Observaciones='$Observaciones'
 Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);

$query4 = "DELETE FROM Hosting WHERE Idcliente='$Id'";
mysql_query($query4,$id);
$query5 = "DELETE FROM Dominio WHERE Idcliente='$Id'";
mysql_query($query5,$id);	

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
