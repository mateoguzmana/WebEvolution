<?
session_start(); 

include("../../includes/conexion.php");

$horaactual 			= date("Y-m-d H:i:s");
$fechahoy 				= date("Y-m-d");


	       	$Id				=$_REQUEST["Id"];
		      
          $query      ="SELECT* FROM Informacion" ;
          $result     =mysql_query($query, $id);
    
          While($row    =mysql_fetch_array($result))
          {
          $NitM               =$row["Nit"];
          $NombreM            =utf8_decode($row["Nombre"]);
          $EmailM             =utf8_decode($row["Email"]);
          $PaisM              =utf8_decode($row["Pais"]);
          $CiudadM            =utf8_decode($row["Ciudad"]);
          $DirM               =utf8_decode($row["Dir"]);
          $TelefonoM          =utf8_decode($row["Telefono"]);
          $CelularM           =utf8_decode($row["Celular"]);
          $LogoM              =utf8_decode($row["Logo"]);
          }


          $querySIN   ="SELECT * FROM CuentasCobrar WHERE Id = '$Id'";
          $resultSIN    =mysql_query($querySIN, $id);
          
          While($rowSIN =mysql_fetch_array($resultSIN))
          {
          $TipoCuenta       =$rowSIN["TipoCuenta"];
          $NOpcion          =$rowSIN["Opcion"];
          $Idenobra         =$rowSIN["Idobra"];
          $Idproveedor      =$rowSIN["Idcliente"];
          $Obra             =utf8_decode($rowSIN["Obra"]);
          $NProveedor       =utf8_decode($rowSIN["Cliente"]);
          $TipoCtaIni       =$rowSIN["TipoCta"];
          $NumeroCuentaIni  =$rowSIN["NumeroCuenta"];
          $FormaPagoIni     =$rowSIN["FormaPago"];
          $FechaInicio      =$rowSIN["FechaInicio"];
          $FechaFin         =$rowSIN["FechaFin"];
          $Periocidad       =$rowSIN["Periocidad"];
          $Valor            =$rowSIN["Valor"];
          $Concepto         =utf8_decode($rowSIN["Concepto"]);
          $Estado           =$rowSIN["Estado"];
          $Fecha            =$rowSIN["Fecha"];

          

          $ROpcion      =$NOpcion;

          if($Estado == 1 || $Estado == 2)
            {
            $ponebloqueo  = 'disabled';
            }
          }
          
          
          $TipoForm     =$_REQUEST["Opcion"];

          if(empty($TipoForm)){
          if (!empty($NOpcion)) {
            if ($NOpcion=="1") {
            $Opcion="SI";
            $XOpcion="1";
          }
          if ($NOpcion=="2") {
            $Opcion="NO";
            $XOpcion="2";
          }
          }
          }else{
          if ($TipoForm=="1") {
          $Opcion="SI";
          $XOpcion="1";
          }
          if ($TipoForm=="2") {
          $Opcion="NO";
          $XOpcion="2";
          }
          } 
          
          

          

          
          $queryMEN   ="SELECT* FROM Clientes WHERE Id = '$Idproveedor'" ;
         
          $resultMEN    =mysql_query($queryMEN, $id);
          
          While($rowMEN =mysql_fetch_array($resultMEN))
          {
          $IdProve            =$rowMEN["Id"];
          $Cedula             =$rowMEN["Cedula"];
          $Direccion          =utf8_decode($rowMEN["Dir"]);
          $Ciudad             =utf8_decode($rowMEN["Ciudad"]);
          $NombreProve        =utf8_decode($rowMEN["Nombre"]);
          $TipoCtaProve       =utf8_decode($rowMEN["TipoCuenta"]);
          $NumeroCuentaProve  =$rowMEN["NumeroCuenta"];
          $FormaPagoProve     =utf8_decode($rowMEN["FormaPago"]);
          $Banco              =utf8_decode($rowMEN["Banco"]);
          }
          

          $LineaMenuS         =$NombreTITMEN;
          
          $Idobra             =$_REQUEST["Idobra"];

          $queryTITMEN        ="SELECT* FROM Obras WHERE Id = '$Idobra'" ;
          $resultTITMEN       =mysql_query($queryTITMEN, $id);
          
          While($rowTITMEN    =mysql_fetch_array($resultTITMEN))
          {
          $Nombreobra     =$rowTITMEN["Nombre"];
          }
          
	         
          $query10    ="SELECT * FROM Impuestos" ;
          $result10   =mysql_query($query10, $id);
          
          While($row10  =mysql_fetch_array($result10))
          {
          $Iva     =$row10["Iva"];
          }
          
          $Ivas    =$Valor*$Iva;
          $Totals = $Ivas+$Valor;
		

		
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
      <td width="228" height="110"align="left" valign="top"><img src="logo/<?=$LogoM?>" height="100" /></td>
      <td width="222"align="left" valign="top"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="200" height="94" align="left" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #6ab8c2;">
          <?
          if($Estado == 0)
		  {
		  ?>
          SIN FINALIZAR
          <?
		  }
          elseif($Estado == 1)
		  {
		  ?>
          PAGADA
          <?
		  }
		  ?>
		</td> 
        </tr>
      </table></td>
      <td width="250"align="left" valign="top"><table width="220" border="1px" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="220" height="94" align="center" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold;">FACTURA DE COBRO<br />
            <br />
            <span style="color: #F00">            <?=utf8_decode("Nº")?> <?=$Id?></span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="700" height="25"align="center" bgcolor="#F0F0F0" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;"> 
      <strong><?=$NombreM?></strong> |  NIT. <?=$NitM?> | TELEFONO: <?=$TelefonoM?> | <?=$DirM?> -  <?=$CiudadM?> <?=$PaisM?> </td>
    </tr>
  </table>
  <br />
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="527" height="118" align="left">
      
      <table width="517" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="517" height="121">
          
          
          <table width="500" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="114" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;CLIENTE:</td>
              <td width="386" align="left" style="font-size: 11px; font-family: Arial, Helvetica, sans-serif;"><?=$NProveedor?></td>
            </tr>
          </table>
          <? if(!empty($Obra)){ ?>
          <table width="500" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="114" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;OBRA:</td>
                <td width="386" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><?=$Obra?></td>
              </tr>
            </table>
            <? } ?>
            <table width="500" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="114" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;NIT:</td>
                <td width="386" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><?=$Cedula?></td>
              </tr>
            </table>
            <table width="500" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="114" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;DIRECCION:</td>
                <td width="386" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><?=$Direccion?></td>
              </tr>
            </table>
            <table width="500" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="114" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;CIUDAD:</td>
                <td width="386" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><?=$Ciudad?> (Colombia)</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
      <? if($TipoCuenta=="2"){?>
      <td width="173">
      <table width="170" border="1px" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="170" height="121">
          
          <table width="140" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="140" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;FECHA DE INICIO</td>
              </tr>
          </table>
          
            <table width="160" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="160" height="20" align="left" bgcolor="#F3F3F3" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><?=$FechaInicio?> </td>
              </tr>
            </table>
            <table width="140" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="140" height="27" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;FECHA DE VENCIMIENTO</td>
              </tr>
            </table>
            <table width="160" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="160" height="20" align="left" bgcolor="#F3F3F3" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><?=$FechaFin?> </td>
              </tr>
          </table></td>
        </tr>
      </table></td><?}else{?>
      <td width="173">
      <table width="170" border="1px" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="170" height="121">
            <table width="140" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="140" height="27" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;FECHA DE PAGO</td>
              </tr>
            </table>
            <table width="160" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="160" height="20" align="left" bgcolor="#F3F3F3" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><?=$FechaInicio?> </td>
              </tr>
          </table></td>
        </tr>
      </table></td>
      <? } ?>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="385" align="left"><table width="375" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="571" height="31" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Descripci<?=utf8_decode("ó")?>n</span></td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
          <tr>
            <td width="120" height="31" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">Vlr. Neto</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="571" valign="top"><table width="445" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="571" height="534" valign="top"><table width="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="571" height="5" align="left">&nbsp;</td>
            </tr>
          </table>
            <table width="571" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="10" height="35" align="left">&nbsp;</td>
                <td width="355" align="left">
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                 <?=$Concepto?>
                </span></td>
              </tr>
            </table>
</td>
        </tr>
      </table></td>
      <td width="129" valign="top"><table width="120" border="1" align="right" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="534" valign="top"><table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
            <tr>
              <td width="116" height="5" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</td>
            </tr>
          </table>
            <table width="116" border="0" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
              <tr>
                <td width="116" height="35" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">$&nbsp;<?=$Valor?></td>
              </tr>
            </table>
          </td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="431" height="118" rowspan="3" align="left" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif; text-align:justify;">
        
  <p style="text-align:justify">Esta factura se asimila en todos sus efectos a una letra de cambio, art<?=utf8_decode("í")?>culo 774 del C<?=utf8_decode("ó")?>digo de Comercio y devengar<?=utf8_decode("á")?> intereses de mora a la tasa m<?=utf8_decode("á.")?>xima legal. Por medio de esta factura el comprador declara haber recibido los productos y/o servicios anteriormente descritos.</p>
        
  <p style="text-align:justify">IVA R<?=utf8_decode("é")?>gimen Com<?=utf8_decode("ú")?>n ICA Actividad Econ<?=utf8_decode("ó")?>mica 6201 (9,66/1000) Resoluci<?=utf8_decode("ó")?>n DIAN <?=utf8_decode("No.")?> 110000555575 Fecha: 2013/01/14 Numeraci<?=utf8_decode("ó")?>n autorizada del FC 1201 al FC 2000.</p>
      Facturaci<?=utf8_decode("ó")?>n por computador.</td>
      <td width="14" rowspan="3" align="left" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif; text-align:justify;">&nbsp;</td>
      <td width="126" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span>Subtotal</td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Valor?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="126" height="45" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
          <tr>
            <td width="120" height="33" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>IVA</span></td>
          </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" align="right"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Ivas?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="126" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Total</span></td>
        </tr>
      </table></td>
      <td width="129" align="left"><table width="120" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#E9E9E9">
        <tr>
          <td width="120" height="33" align="right"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">$ <?=$Totals?><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;&nbsp;&nbsp;</span></span></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <page_footer></page_footer>
</page>

