<?
session_start(); 

include("../../includes/conexion.php");

$horaactual 		= date("Y-m-d H:i:s");
$fechahoy 			= date("Y-m-d");


		$Id				  =$_REQUEST["Id"];
		
		$query			="SELECT* FROM Informacion" ;
		$result			=mysql_query($query, $id);
		
		While($row	=mysql_fetch_array($result))
		{
		$NitM			  =$row["Nit"];
		$NombreM		=utf8_decode($row["Nombre"]);
		$EmailM			=utf8_decode($row["Email"]);
		$PaisM			=utf8_decode($row["Pais"]);
		$CiudadM		=utf8_decode($row["Ciudad"]);
		$DirM			  =utf8_decode($row["Dir"]);
		$TelefonoM	=utf8_decode($row["Telefono"]);
		$CelularM		=utf8_decode($row["Celular"]);
		$LogoM			=utf8_decode($row["Logo"]);
    $PieFactura =utf8_decode($row["PieFactura"]);


		}
		
		
		$query			="SELECT* FROM Facturacion where Id = '$Id' ORDER BY Id Desc" ;
		$result			=mysql_query($query, $id);
		
		While($row	=mysql_fetch_array($result))
		{
		$Nit			  =$row["Nit"];
		$Razon			=utf8_decode($row["Razon"]);
		$Direccion  =utf8_decode($row["Direccion"]);
		$Telefono		=utf8_decode($row["Telefono"]);
		$Ciudad			=utf8_decode($row["Ciudad"]);
		$Fechaf			=utf8_decode($row["Fechafact"]);
		$Fechau			=utf8_decode($row["Fechalim"]);
		$Idcotiz		=utf8_decode($row["Id"]);
		$Ciudad			=utf8_decode($row["Ciudad"]);
		$Valors			=($row["Valor"]);
		$Totals			=($row["Total"]);
		$Ivas			  =($row["Iva"]);
		
    

    $Utilidad   =($Ivas*0.05);
    $Completo   =($Ivas+$Valors);
		$Valors			=number_format($Valors,0,'','.');
		$Totals			=number_format($Totals,0,'','.');
		$Ivas			  =number_format($Ivas,0,'','.');
    $Utilidad   =number_format($Utilidad,0,'','.');
    $Completo   =number_format($Completo,0,'','.');
    
    
		}
		

		
?>
<style>
table {
text-align:justify;
}
td {
text-align:justify;
}
#Madre{
background-image: url(factura.jpg);
}
</style>
<page backtop="0mm" backbottom="0mm" backleft="4mm" backright="4mm">
<table id="Madre">
<tr><td width="1040" height="730">&nbsp;</td></tr>
</table>
<page_footer></page_footer>
</page>

