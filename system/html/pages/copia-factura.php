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
</style>
<page backtop="0mm" backbottom="0mm" backleft="4mm" backright="4mm">
  
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="228" height="110"align="left" valign="top"> <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>

      <td width="225" height="90">
      <table width="225" height="90" border="1px" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr height="90">
          <td width="225" height="90">
          <table width="225" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br>&nbsp;SE<?=utf8_decode("Ñ")?>OR(ES):</td>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br>&nbsp;<?=$Razon?></td>
              </tr>
          </table>
         <table width="225" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;C<?=utf8_decode("É")?>DULA/NIT:</td>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;<?=$Nit?></td>
              </tr>
          </table>
         <table width="225" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;DIRECCI<?=utf8_decode("Ó")?>N:</td>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;<?=$Direccion?></td>
              </tr>
          </table>
          <table width="225" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;CIUDAD:</td>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;<?=$Ciudad?></td>
              </tr>
          </table>
          <table width="225" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;PERIODO Nro.:</td>
              <td width="112.5" height="16" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;2</td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table></td>
      <td width="222"align="left" valign="top"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="220" height="94" align="right" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #6ab8c2;">
          <?
          if($Estado == 0)
		  {
		  ?>
          SIN FINALIZAR
          <?
		  }
          elseif($Estado == 2)
		  {
		  ?>
          ANULADA
          <?
		  }
		  ?>
      <img align="right" src="logo/<?=$LogoM?>" width="220">
		</td> 
        </tr>
      </table></td>
      <td width="250"align="left" valign="top"><table width="220" border="1px" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="220" height="94" align="center" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">FACTURA DE VENTA<br />
            <br />
            <span style="color: #F00">            <?=utf8_decode("Nº")?> <?=$Id?></span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="114" height="50" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"> 
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25" width="114" bgcolor="#2b2a28" style="color:white;text-align:center;font-size:11.5px;">Fecha de facturaci<?=utf8_decode("ó")?>n</td>
          </tr>
          <tr width="114">
            <td height="25" bgcolor="#f0f4f4" style="text-align:center;font-size:12.5px;"><?=$Fechaf?></td>
          </tr>
        </table>
      </td>
      <td width="114" height="50" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"> 
        <table width="114" border="0"  cellpadding="0" cellspacing="0">
          <tr>
            <td height="25" width="114" bgcolor="#2b2a28" style="color:white;text-align:center;font-size:11.5px;">Fecha de vencimiento</td>
          </tr>
          <tr width="114">
            <td height="25" bgcolor="#f0f4f4" style="text-align:center;font-size:12.5px;"><?=$Fechau?></td>
          </tr>
        </table>
      </td>
      <td width="241" height="50" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"> 
      <table width="241">
        <tr>
          <td width="241" style="text-align:center;"> JUAN ALEJANDRO ZAPATA CARDONA<br>NIT: 71.216.799-2<br>R<?=utf8_decode("É")?>GIMEN COM<?=utf8_decode("Ú")?>N<br><br>Resoluci<?=utf8_decode("ó")?>n DIAN No. 110000625653<br>Fecha: 2015/04/20 Habilita del 5040 al 10000</td>
        </tr>
      </table>  
      </td>
      <td width="223" height="50" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"> 
        <table width="223" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="223"height="25" bgcolor="#2b2a28" style="color:white;text-align:center;font-size:12.5px;">Forma de pago</td>
          </tr>
          <tr>
            <td width="223" bgcolor="#f0f4f4" style="text-align:center;font-size:12.5px;" height="25">Efectivo</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <br />
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="60" height="49" align="left"><table width="50" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="50" height="31" align="left" bgcolor="#2b2a28"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;color:white;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;color:white;">Cant.</span></td>
        </tr>
      </table></td>
      <td width="385" align="left"><table width="375" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="375" height="31" align="left" bgcolor="#2b2a28"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;color:white;">Descripci<?=utf8_decode("ó")?>n</span></td>
        </tr>
      </table></td>
      <td width="126" align="left"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="31" align="left" bgcolor="#2b2a28"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;color:white;">Vlr. Unitario</span></td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
          <tr>
            <td width="120" height="31" align="left" bgcolor="#2b2a28"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;color:white;">Vlr. Neto</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" <?if($Estado==0){ ?> style="background-image:url(../../assets/img/marca.jpg); background-position:center; background-repeat:no-repeat" <?}?>>
    <tr>
      <td width="60" height="549" valign="top"><table width="50" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="50" height="534" valign="top"><table width="40" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="40" height="5" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</td>
            </tr>
          </table>
            <?
		$query						="SELECT* FROM Facturacionmov where Idfact = '$Idcotiz'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Cant						= $row["Cant"];

?>
            <table width="40" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="40" height="35" align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;
                  <?=$Cant?></td>
              </tr>
            </table>
<?
		$Cant						=0;  
		} 
?></td>
        </tr>
      </table></td>
      <td width="385" valign="top"><table width="375" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="375" height="534" valign="top"><table width="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="365" height="5" align="left">&nbsp;</td>
            </tr>
          </table>
            <?
		$query						="SELECT* FROM Facturacionmov where Idfact = '$Idcotiz'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Plano						  = $row["Idobra"];
		$Descripcion				= $row["Descripcion"];
?>
            <table width="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="10" height="35" align="left">&nbsp;</td>
                <td width="355" align="left">
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                  <?=$Plano?> - <?=$Descripcion?>
                </span></td>
              </tr>
            </table>
<?
		}
?>
</td>
        </tr>
      </table></td>
      <td width="126" valign="top"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="534" valign="top"><table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="116" height="5" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</td>
            </tr>
          </table>
        <?
		$query						="SELECT* FROM Facturacionmov where Idfact = '$Idcotiz'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Valox						= $row["Neto"];
		$Valox						=number_format($Valox,0,'','.');
		
?>
            <table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="116" height="35" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">$ <?=$Valox?></td>
              </tr>
            </table>
            <?
		$Valox						= 0;
			
		}
?></td>
        </tr>
      </table></td>
      <td width="129" valign="top"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="534" valign="top"><table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="116" height="5" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</td>
            </tr>
          </table>
            <?
		$query						="SELECT* FROM Facturacionmov where Idfact = '$Idcotiz'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Valor						= $row["Valor"];
		$Valor						=number_format($Valor,0,'','.');
		
?>
            <table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="116" height="35" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">$ <?=$Valor?></td>
              </tr>
            </table>
          <?
		$Cant						= 0;
		$Valor						= 0;
		  
		}
?></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="431" height="118" rowspan="3" align="left" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif; text-align:justify;">
        <?=nl2br($PieFactura);?>
    </td>
      <td width="14" rowspan="3" align="left" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif; text-align:justify;">&nbsp;</td>
      <td width="126" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" bgcolor="#2b2a28" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;color:white;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;color:white;">&nbsp;</span>Subtotal</td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" bgcolor="#f0f4f4" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Valors?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="126" height="45" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
          <tr>
            <td width="120" height="33" bgcolor="#2b2a28" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;color:white;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>IVA</span></td>
          </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" bgcolor="#f0f4f4" align="right"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Ivas?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="126" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" bgcolor="#2b2a28" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;color:white;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Total</span></td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" bgcolor="#f0f4f4" align="right"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Completo?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <page_footer></page_footer>
</page>

