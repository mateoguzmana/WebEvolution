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

$_SESSION['anterior']	=	$_SERVER['REQUEST_URI']; 


				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					$Idfact 			=$_REQUEST["Id"];
					$TipoForm			=$_REQUEST["Opcion"];

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
					$Observaciones="ABONO DE LA FACTURA NRO. ".$Idfact." | ".date('Y-m-d');
					$Ct=$_REQUEST["Ct"];
					$Ob=$_REQUEST["Ob"];
					$Fc=$_REQUEST["Fc"];
					if(empty($Ct)){
					$CuentaContable 	=$CuentaContable;
					}
					else{
					$CuentaContable=$Ct;
					}
					
					if(empty($Ob)){
					$Observaciones 		=$Observaciones;	
					}
					else{
					$Observaciones 		=$Ob;	
					}

					

					$querySZS			="SELECT * FROM Facturacion WHERE Id='$Idfact' Order by Id DESC";
                    $resultSZS			=mysql_query($querySZS, $id);
                    
                    while($rowSZS		=mysql_fetch_array($resultSZS))
                    {
                    $Razon 				=$rowSZS["Razon"];
                    $Nit 				=$rowSZS["Nit"];
                    $Fechafact 			=$rowSZS["Fechafact"];
                    $FechaFin 			=$rowSZS["Fechalim"];
                    $Idcliente 			=$rowSZS["Idcliente"];
                    $Descripcion		=$rowSZS["Descripcion"];
                    $Iva 				=$rowSZS["IvaTemp"];
                    $Valor 				=$rowSZS["Total"];
                    $Estado 			=$rowSZS["Estado"];
                    $Correos 			=$rowSZS["Auto"];
                    $ValorAbonado 		=$rowSZS["ValorCobrado"];
                    $ValRR 				=$rowSZS["Valor"];
                    }      

                    if ($Correos==1) {
                    $Con="checked";
                    }else{
                    $Con="";	
                    }

                    $Valor=($Valor-$ValorAbonado);
						
						$decimales 	= explode(".",$Valor);
						$CuantosS	= $decimales[1];
						$CuantosDS	= strlen($CuantosS);
						
						
						if($CuantosDS == 1)
						{
						$Valor				=$Valor.'0';	
						}
						elseif($CuantosDS == 0)
						{
						$Valor				=$Valor.'00';	
						}
						elseif($CuantosDS == 2)
						{
						$Valor				=$Valor;	
						}
						
						
						$decimales 	= explode(".",$ValorAbonado);
						$CuantosS	= $decimales[1];
						$CuantosDS	= strlen($CuantosS);
						
						if($CuantosDS == 1)
						{
						$ValorAbonado				=$ValorAbonado.'0';	
						}
						elseif($CuantosDS == 0)
						{
						$ValorAbonado				=$ValorAbonado.'00';	
						}
						elseif($CuantosDS == 2)
						{
						$ValorAbonado				=$ValorAbonado;	
						}


					$queryPP		="SELECT * FROM Cuentas WHERE Id='$CuentaContable'";
					$resultPP		=mysql_query($queryPP, $id);
							
					while($rowPP	=mysql_fetch_array($resultPP))
					{
					$NombreCuenta		=$rowPP["Nombre"];
					$NumeroCuentica		=$rowPP["Cuenta"];
					}
					

					/* $Proveedor 			=$_REQUEST["IdProve"];
					if(empty($Proveedor)){
					$queryMEN		="SELECT * FROM Clientes WHERE Id = '$Idproveedor'" ;
					}
					else {
					$queryMEN		="SELECT * FROM Clientes WHERE Id = '$Proveedor'" ;	
					} */
					$queryMEN		="SELECT * FROM Clientes WHERE Id = '$Idcliente'";
					$resultMEN		=mysql_query($queryMEN, $id);
					
					while($rowMEN	=mysql_fetch_array($resultMEN))
					{
					$IdProve 				=$rowMEN["Id"];
					$NombreProve			=$rowMEN["Nombre"];
					$TipoCtaProve 			=$rowMEN["TipoCuenta"];
					$NumeroCuentaProve		=$rowMEN["NumeroCuenta"];
					$FormaPagoProve 		=$rowMEN["FormaPago"];
					$Banco 					=$rowMEN["Banco"];
					}
					

					$LineaMenuS			=$NombreTITMEN;
					
					

					$queryTITMEN		="SELECT* FROM Proyectos WHERE Idcliente = '$Idcliente'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreobra			=$rowTITMEN["Nombre"];
					}
					
			
					
					$horaactual 		=date("Y-m-d");
					
					$queryRE		="SELECT DATEDIFF('$horaactual','$Fechafact') AS diferencia";
					$resultRE		=mysql_query($queryRE, $id);
							
					while($rowRE	=mysql_fetch_array($resultRE))
					{
					$diferencia		=$rowRE["diferencia"];
					}
					
					if(empty($diferencia) || $diferencia == 0)
					{
					$nuevafecha	=-90;	
					}
					else
					{
					$fecha = date('Y-m-d');
					$nuevafecha = strtotime ( '-'.$diferencia.' day' , strtotime ( $fecha ) ) ;
					$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
					
					
					$nuevafecha = substr($nuevafecha, -2);
					$nuevafecha	=(string)(int)$nuevafecha;
					}

					$Abin=$_SESSION["Abono2"];
					
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?
        include("../../includes/title.php");
		?>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1403937764" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox_responsive.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1401481653" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/select2/select2.css?1403937881" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/multi-select/multi-select.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/jquery-ui/jquery-ui-boostbox.css?1403937766" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1403937883" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/typeahead/typeahead.css?1403937883" />
        
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1401481649"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1401481651"></script>
		<![endif]-->
        
        
<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
	//-->
</SCRIPT> 


<script language="JavaScript" src="js/NumberFormat.js"></script>

 <SCRIPT LANGUAGE="JavaScript">
function puntitos(donde,caracter)
{
pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{

	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " ")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}


var cad1="",cad2="",tres=0
if(largo > 3 && crtr == true)
	{
	for (k=nums.length-1;k>=0;k--)
		{
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0)
			{
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
	 donde.value = cad2
	}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
 </script>       
	</head>
	<body >

		<!-- BEGIN HEADER-->
		<header id="header">

<?
include("../../includes/navbar.php");
?>

		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN SIDEBAR-->
			<div id="sidebar">
			  <div class="sidebar-back"></div>
			  <div class="sidebar-content">
			    <div class="nav-brand"> <a class="main-brand" href="zona.php">
			      <h3 class="text-light text-white"><span>Web<strong>Evolution</strong></span></h3>
			      </a> 
               </div>

<?
include("../../includes/menu.php");
?>


		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->
            
            
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$LineaMenuS?></h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Actualizar Cuenta por cobrar</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
<?
							$MosPerz1		=	0;
					

							
							$queryPerz1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$MosPerzA			=$rowPerz1["Agr"];
							
							
								if($MosPerzA > 0)
								{
								$MosPerz1	=	1;
								}
							}
?>
                                            
                                            
                                            
                                            
                                                
												<form class="form-horizontal form-validate" role="form" method="post" action="cobrar-3.php" id="form1" name="form1" novalidate>
                                                
												<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Cliente</label>
                                                                <select name="jumpMenu" id="jumpMenu" disabled class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un proveedor" style="background-color:#CCC" <?=$ponebloqueo?>>
            
                                                                      
                                                                        <option value="act-cobros-2.php" selected><?=$NombreProve?></option>
                                                                        <?
																		
                                                                        $queryX		="SELECT* FROM Clientes order by Nombre";
                                                                        $resultX		=mysql_query($queryX, $id);
                                                                        
                                                                        while($rowX	=mysql_fetch_array($resultX))
                                                                        {
                                                                        $IdPre				=$rowX["Id"];
																		$Nombreproveedor	=$rowX["Nombre"];
																		$TipoCtaclien 		=$rowSINX["TipoCta"];
																		$NumeroCuentaclien	=$rowSINX["NumeroCuenta"];
																		$FormaPagoclien 	=$rowX["FormaPago"];
                                                                        ?>
                                                                        <option value="act-cobros-2.php?Id=<?=$IdPago?>&Idobra=<?=$IdTIP?>&Opcion=<?=$TipoForm?>&IdProve=<?=$IdPre?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$Nombreproveedor?></option>
																		<?
																		}
																		?>

                                                                </select>
                                                                <?if(empty($Proveedor) || empty($IdProve)) {?>
                                                              	<input name="Nombreproveedor" id="Nombreproveedor" type="hidden" value="<?=$NProveedor?>">
                                                              	<input name="IdProve" id="Idproveedor" type="hidden" value="<?=$Idproveedor?>">
                                                              	<? } else if (!empty($Proveedor)) { ?>
                                                              	<input name="Nombreproveedor" id="Nombreproveedor" type="hidden" value="<?=$NombreProve?>">
                                                              	<input name="IdProve" id="Idproveedor" type="hidden" value="<?=$IdProve?>">
                                                              	<? } ?>
																</div>
															</div>
														</div>
													
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Nro. Factura</label>
																	<input type="text" value="<?=$Idfact?>" disabled class="form-control" required name="NumeroFactura" id="NumeroFactura" <?=$ponebloqueo?>/>
                                                                </div>
															</div>
														</div>
                                                     	
									

                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Fecha Factura</label>
															<input type="text" value="<?=$Fechafact?>" disabled class="form-control" required name="FechaInicio" id="FechaInicio" <?=$ponebloqueo?>/>
														
                                                                </div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Fecha Vencimiento</label>
															<input type="text" value="<?=$FechaFin?>" disabled class="form-control" required name="FechaFin" id="FechaFin" <?=$ponebloqueo?>/>
                                                                </div>
															</div>
														</div>
														
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
													<label class="control-label">Saldo Actual</label>
													<input type="text" name="Valor" id="Valor" disabled value="<?=$Valor?>" class="form-control dollar-mask" <?=$ponebloqueo?> required>
													<input type="hidden" id="ValRR" value="<?=$ValRR?>">
													</div>
													</div>
													</div>
													
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Proyecto</label>
                                                                <select name="Obra" class="form-control" required  data-placeholder="Seleccione una Obra">
            															<?	
            															$queryFOX 		="SELECT * FROM Facturacionmov WHERE Idfact='$Idfact'";
            															$resultFOX 		=mysql_query($queryFOX,$id);

            															while($rowFOX=mysql_fetch_array($resultFOX)){

																		$Obris 			=$rowFOX["Idobra"];   

																		if($Obris==0){  
																		?>
																		<option value="0" selected>OTRO</option>
																		<?       																
																		}else{
                                                                        $queryTIP		="SELECT* FROM Proyectos where Muestra = 0 AND Id='$Obris' order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        while($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $Idobra			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                        <option value="<?=$Idobra?>" selected><?=$NombreTIP?></option>
																		<?
																		}
																		} 
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
														<? if($TipoCuenta=="2") { ?>
														

														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
													<label class="control-label">Ciclo</label>
													<select class="form-control" required disabled name="Periocidad" id="Periocidad" <?=$ponebloqueo?>>
    													<option selected><?=$Periocidad?></option>
    													<option value="5">5 Días</option>
    													<option value="10">10 Días</option>
    													<option value="15">15 Días</option>
    													<option value="20">20 Días</option>
    													<option value="25">25 Días</option>
    													<option value="30">1 mes</option>
    													<option value="60">2 meses</option>
    													<option value="90">3 meses</option>
    													<option value="120">4 meses</option>
    													<option value="150">5 meses</option>
    													<option value="180">6 meses</option>
    												 </select>
													</div>
															</div>
													</div>

													</div>

													<div class="row">

													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Desde</label>
														<div class='input-group date' id='demo-date-start'>
															<input type="text" value="<?=$FechaInicio?>" disabled class="form-control" required name="FechaInicio" id="FechaInicio" <?=$ponebloqueo?>/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
                                                                </div>
															</div>
														</div>

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fin" class="control-label">Hasta</label>
														<div class='input-group date' id='demo-date-end'>
															<input type="text" value="<?=$FechaFin?>" disabled class="form-control" required name="FechaFin" id="FechaFin" <?=$ponebloqueo?>/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
                                                                </div>
															</div>
														</div>
														<? } ?>
													
                                                 
															<div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Descripcion" class="control-label">Concepto</label>
                                                                  <textarea name="Concepto" rows="3" disabled required class="form-control" id="Concepto" <?=$ponebloqueo?>><?=$Descripcion?></textarea>
																<input name="TipoCuenta" id="TipoCuenta" type="hidden" value="<?=$TipoCuenta?>">																
																<input name="Id" id="Id" type="hidden" value="<?=$Idfact?>">
																<input type="hidden" name="Iva" id="Iva" value="<?=$Iva?>">
																</div>
															</div>
															</div>
															<?if($Estado!="1"){?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Cuenta Contable</label>
                                                                <select name="CuentaContable" id="jumpMenu" class="form-control" required <?=$ponebloqueo?>>
            															<?if(!empty($CuentaContable)){?>
                                                                        <option value="<?=$CuentaContable?>" selected><?=$NombreCuenta?> - <?=$NumeroCuentica?></option>
                                                                        <?}else{?>
                                                                        <option value="" selected>Seleccione una cuenta</option>
                                                                        <?
                                                                    	}
                                                                        $queryNKD		="SELECT * FROM Cuentas where Muestra = 0 order by Nombre";
                                                                        $resultNKD		=mysql_query($queryNKD, $id);
                                                                        
                                                                        while($rowNKD	=mysql_fetch_array($resultNKD))
                                                                        {
                                                                        $IdNKD			=$rowNKD["Id"];
																		$NombreNKD		=$rowNKD["Nombre"];
																		$NumCuentaNKD  	=$rowNKD["Cuenta"];
                                                                        ?>
                                                                        <option value="<?=$IdNKD?>"><?=$NombreNKD?> - <?=$NumCuentaNKD?></option>
																		<?
																		}
																		?>

                                                                </select>
																</div>
															</div>
														</div>
														<?if($Estado!="1"){?>
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Fecha Abono</label>
														<div class='input-group date' id='demo-date-start'>
															<input type="text" class="form-control" value="<?=$Fc?>" required name="FechaAbono" id="FechaAbono"/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
                                                                </div>
															</div>
														</div>
														<?}?>
														<div class="row">
														<div class="col-sm-12">
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
																<label class="control-label">Abono</label>
																<input type="text" name="Abono" id="Abono" class="form-control dollar-mask" required onkeypress="descuento()" onkeyup="descuento()" onkeydown="descuento()" onchange="descuento()">
																<input type="hidden" name="Valorcito" id="Valorcito" value="">
																<br>
																<span id="ivita"></span>&nbsp;&nbsp;&nbsp;
																<span id="resp"></span>&nbsp;&nbsp;&nbsp;
																<span id="real"></span>
																<script type="text/javascript">
																function format1(n) {
																    return  n.toFixed(2).replace(/./g, function(c, i, a) {
																        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
																    });
																}
																function descuento(){
																var Abono    =document.getElementById('Abono').value;
																var Valor    =document.getElementById('Valor').value;
																var Retencion=document.getElementById('Retencion').value;
																var Iva 	 =document.getElementById('Iva').value;
																var ValRR 	 =document.getElementById('ValRR').value;

																Abono=Abono.replace(/_/g,"");
																Abono=Abono.replace(/,/g,"");
																Abono=Abono.replace(".00","");
																Abono=Abono.replace("$","");
																Valor=Valor.replace(/_/g,"");
																Valor=Valor.replace(/,/g,"");
																Valor=Valor.replace(".00","");
																Valor=Valor.replace("$","");
																Ivas = (Iva/100);
																Tot  = (Ivas*ValRR);
																Descuento=((ValRR*Retencion));
																Desc=parseFloat(Abono);
																Desc=(Desc+Descuento);
																Descuento=format1(Descuento);
																Desc=format1(Desc);
																Tot =format1(Tot);
																document.getElementById('resp').innerHTML='<span style="padding:5px;" class="alert-success">Descuento de $ '+Descuento+' √</span>';
																document.getElementById('real').innerHTML='<span style="padding:5px;" class="alert-success">Paga $&nbsp;<input class="alert-success" id="ValorReal" type="text" readonly name="ValorReal" value="'+Desc+'"> √</span>';
																document.getElementById('ivita').innerHTML='<span style="padding:5px;" class="alert-success">Iva &nbsp;'+Iva+'%  | $ '+Tot+'</span>';
																}
																</script>
														</div>
														</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Retencion" class="control-label">% Retención</label>
																	<select name="Retencion" id="Retencion" onselect="descuento()" onchange="descuento()" class="form-control select2-list" data-placeholder="Seleccione el tipo de cuenta" required>
            
                                                                        <option value="" selected>Retención aplicada</option>

																		<? 
                                                                        $queryR1		="SELECT * FROM Retenciones WHERE Muestra=0 AND Valor <> '$Retencion' order by Nombre";
                                                                        $resultR1		=mysql_query($queryR1, $id);
                                                                        
                                                                        while($rowR1	=mysql_fetch_array($resultR1))
                                                                        {
                                                                        $IdR1			=$rowR1["Id"];
																		$NombreR1		=$rowR1["Nombre"];
																		$ValorR1 		=$rowR1["Valor"]; 
                                                                        ?>
                                                                        <option value="<?=$ValorR1?>"><?=$NombreR1?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
													</div>

													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fin" class="control-label">&nbsp;</label>
																	<label class="btn checkbox-inline btn-checkbox-default-inverse active">
																		<input type="hidden" id="Corre" value="<?=$Correos?>">
																	<input name="Correos" id="Correos" type="checkbox" class="btn" <?=$Con?> value="default-inverse2" onclick="cargar();"> ¿Desea enviar correos electronicos?
																</label>
                                                                </div>
															</div>
														</div>

													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fin" class="control-label">&nbsp;</label>
																	<span id="Response"></span>
																</label>
                                                                </div>
															</div>
														</div>

													</div>
														<div class="col-sm-12">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Observaciones" class="control-label">Observacion</label>
                                                                  <textarea name="Observaciones" <?=$ponebloqueo?> rows="3" required class="form-control" onChange="javascript:this.value=this.value.toUpperCase();" id="Observaciones"><?=$Observaciones?></textarea>
																</div>
															</div>
														</div>
														<?}?>
                                                     </div>
                                             
                                                        
                                                        
                                                        
                                                        

													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
															<?if($Estado==4 || $Estado==0 || $Estado==3){?>
															<button type="submit" id="enviar" class="btn btn-primary">Realizar Abono</button>
															<? } 
															elseif ($Estado=="1") { ?>
															<input name="Imprimir" type="button" class="btn btn-warning" value="Imprimir"  style="width:100px;" onClick="window.open('print-cobros.php?Id=<?=$IdPago?>&Idcliente=<?=$IdclienteUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>','_blank')">
															<?	
															}
															?>
														</div>
													</div>
												</form>
<?if ($Estado==4) { ?>
<!-- Empezando la tabla de pagos -->
  <div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Abonos de la factura <strong>NRO. <?=$Idfact?></strong></a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
										  <div class="box-body style-white">
												
                                                
                                                
                                                    

                          

                                <table width="100%" border="1" class="btn-support3" style="font-size:10px; font-weight:bold; height:15px; margin-bottom:10px;" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%" height="33">&nbsp;NRO.</td>
                                    <td width="15%">&nbsp;FECHA</td>
                                    <td width="35%">&nbsp;OBSERVACIONES</td>
                                    <td width="20%">&nbsp;ABONO</td>
                                    <td width="20%" align="right">&nbsp;</td>
                                  </tr>
                                </table>
                                
<?
					 
						
					 $queryUSERS		="SELECT * FROM HistorialCobros where Idcuenta = '$Idfact' order by FechaAbono";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
					 	$x++;
						$Idmovi			=$rowUSERS["Id"];
						$FechaAbono		=$rowUSERS["FechaAbono"];
						$Abono			=$rowUSERS["Abono"];
						$Obser 			=$rowUSERS["Observaciones"];
						$Retencion 		=$rowUSERS["Retencion"];
						$CuentaCon 		=$rowUSERS["CuentaContable"];
						$Cuota			=$rowUSERS["Cuota"];
						$Muestra 		=$rowUSERS["Muestra"];
						$MotivoAnulacion=$rowUSERS["MotivoAnulacion"];
						
					 $querydd		="SELECT * FROM Retenciones where Valor = '$Retencion' AND Muestra=0";
					 $resultdd		=mysql_query($querydd, $id);
													
					 while($rowdd	=mysql_fetch_array($resultdd))
					 {
						$ValRetencion			=$rowdd["Nombre"];
				     }
						

					$queryPW="SELECT * FROM Usuarios WHERE Id=$_SESSION[IdR]";
					$resultPW=mysql_query($queryPW,$id);
					while ($rowPW=mysql_fetch_array($resultPW)) {
						$ContraActual=$rowPW["Clave"];
					}

						if($CuantosDS == 1)
						{
						$Valora				=$Abono.'0';	
						}
						elseif($CuantosDS == 0)
						{
						$Valora				=$Abono.'00';	
						}
						elseif($CuantosDS == 2)
						{
						$Valora				=$Abono;	
						}
						
						if($Muestra==0){
						$Melo=$Obser;
						}else{
						$Melo=$MotivoAnulacion;
						}
						
						$Abono			=number_format($Abono,0,'','.');
						

						
						
						 $cont++;
						 
						 if($Totalob == $cont)
						 {
							$stilos		=	''; 
						 }
						 else
						 {
							$stilos		=	'border-bottom: none; '; 
						 }

?>
                                <table width="100%" class="btn-default" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> " >
                                  <tr>
                                    <td width="10%" height="33" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$Idmovi?></td>
                                    <td width="15%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$FechaAbono?></td>
                                    <td width="35%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$Melo?></td>                                  
                                    <td width="20%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> "> $&nbsp;<?=$Abono?></td>
                                    <td width="10%" align="right">
                                    <input name="Procesar" type="button" class="btn btn-success btn-xs" value="VER" style="width:100%;"  onClick="window.open('print-abonocobro.php?Id=<?=$Idfact?>&Idpago=<?=$Idmovi?>&Idcliente=<?=$IdclienteUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>','_blank')"> 
                                    </td><td width="10%" align="right">
                                    <?if(($Estado==0 || $Estado==4 || $Estado==3) && $Muestra==0) { ?>
									<input name="Anular" type="button" class="btn btn-danger btn-xs" value="ANULAR" style="width:100%;"  data-toggle="modal" data-target="#textModal<?=$Idmovi?>" data-placement="top">
									<? } 
									if($Muestra==1){?>  
									<input name="Anular" type="button" class="btn btn-warning btn-xs" value="ANULADA" style="width:100%;">
									<?}?>          
                                    </td>
                                  </tr>
                                </table>

                                
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$Idmovi?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">ANULAR RECIBO DE CAJA NRO.<?=$Idmovi?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>¿Realmente desea anular?</p>
                                                                <?for ($i=0; $i < $x; $i++) { ?>
																	<?}?>
                                                             	<form id="Anulacion" onsubmit="return valida<?=$i?>(this)" action='eliminar-cobro.php?Id=<?=$Idmovi?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>' method="post">
																<div class="col-lg-11 col-md-10 col-sm-9">			
                                                                  <textarea name="MotivoAnulacion" rows="3" required class="form-control" id="MotivoAnulacion" placeholder="Motivo anulacion" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
																	<br>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
																	<label>Digite su contraseña</label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">	
																	
                                                                  <input type="password" id="Contrasena<?=$i?>" name="Contrasena<?=$i?>" rows="3" required class="form-control" placeholder="Contraseña">
                                                                  <input type="hidden" id="ContraActual<?=$i?>" name="ContraActual<?=$i?>" value="<?=$ContraActual?>">
																	<br>
																	<span id="Resp<?=$i?>"></span>
																	<script type="text/javascript">
        														function valida<?=$i?>()
        														{
        														var pass=document.getElementById('Contrasena<?=$i?>').value;
        														var vieja=document.getElementById('ContraActual<?=$i?>').value;
        														var correcto=true;
       															if (pass==vieja) {
       															document.getElementById("Resp<?=$i?>").innerHTML='<span style="font-size:14px;padding:5px;" class="alert-success">Contraseña correcta <strong>√</strong></span>';	
       															correcto=true;
       															}
       															else{
       															document.getElementById("Resp<?=$i?>").innerHTML='<span style="font-size:14px;padding:5px;" class="alert-danger">Contraseña incorrecta <strong>X</strong></span>';
       															correcto=false;
       															}
       															return correcto;
  																}
        														</script>
																	<span id="xd"></span>
																</div>
                                                            </div>
                                                            <div class="modal-footer">
                                                           		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-success" onclick="valida<?=$i?>()">Confirmar</button>
                                                            	</form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP --> 
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <!-- START FORM MODAL MARKUP -->
                                                <div class="modal fade" id="formModal<?=$Idmovi?>" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="formModalLabel">Modificar Movimiento</h4>
                                                            </div>
                                                          <form class="form-horizontal" role="form" action="act-valor-obra.php" method="post">
       
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <div class="col-sm-3">
                                                                            <label for="Valor" class="control-label">Valor</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control dollar-mask" name="Valor" id="Valor"  placeholder="Valor de la Obra" value="<?=$Valora?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-3">
                                                                            <label for="Fecha" class="control-label">Fecha</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <div class='input-group date' id='demo-date'>
                                                                                <input type="text" name="Fecha" class="form-control" id='demo-date' value="<?=$Fecha?>" placeholder="Fecha" required data-date-format="yyyy-mm-dd"/>
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="col-sm-3">
                                                                            <label for="Fecha" class="control-label">Movimiento</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <select name="Tipo" id="Tipo" class="form-control select2-list" data-placeholder="Seleccione el Movimiento" required>
                                                                                    <option value="<?=$Tipo?>" selected><?=$Tipo?></option>
                                                                                    <option value="INGRESO" >INGRESO</option>
                                                                                    <option value="EGRESO" >EGRESO</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="col-sm-3">
                                                                            <label for="Descripcion" class="control-label">Descripcion</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
																
                                                                  			<textarea name="Descripcion" rows="3" required class="form-control" id="Descripcion" placeholder="Descripción de la Obra" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Descripcion?></textarea>
																
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Modificar</button>
                                                                </div>
                                                            </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END FORM MODAL MARKUP -->

                                                
                                                
                                                
                                
                                
                          										
<?
					 }
					 /*
					 $queryUSERS		="SELECT SUM(Valor) AS INGRESOS FROM Obrasgastos where Idobra = '$IdUS' and Muestra = 0 and Tipo = 'INGRESO' order by Fecha";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$INGRESOS		=$rowUSERS["INGRESOS"];
					 }
					 
					 $queryUSERS		="SELECT SUM(Valor) AS EGRESOS FROM Obrasgastos where Idobra = '$IdUS' and Muestra = 0 and Tipo = 'EGRESO' order by Fecha";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$EGRESOS		=$rowUSERS["EGRESOS"];
					 } */
					 
					 $TOTALT			=$INGRESOS-	$EGRESOS;
?>
<br/>
     <!--                           <table width="100%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> " >
                                  <tr>
                                    <td width="10%" height="33" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;</td>
                                    <td width="15%" align="right" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;</td>
                                    <td width="55%" align="right" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;TOTAL &nbsp</td>
                                    <td width="10%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC; background-color:#D6EEC4">&nbsp;
                                      <?/*=number_format($TOTALT,0,'','.') */?></td>
                                    <td width="10%" align="right"></td>
                                  </tr>
                                </table>       -->                 

<!--
<br/><br/>

<?
if($UtilidadO > $TOTALT)
{
?>
												<div class="alert alert-danger">
													<a class="close" data-dismiss="alert" href="#">&times;</a>
													<h4 class="alert-heading">ATENCION!</h4>
													<p>
														Actualmente su proyecto no ofrece la ultilidad programada. La obra hoy tiene una utilidad de <strong>($<?=number_format($TOTALT,0,'','.')?>)</strong> de la programada por <strong>($<?=number_format($UtilidadO,0,'','.')?>)</strong>.<br/>
													</p>

												</div>
<?
}
elseif($UtilidadO <= $TOTALT)
{
?>
                                                
                                                
												<div class="alert alert-success">
													<a class="close" data-dismiss="alert" href="#">&times;</a>
													<h4 class="alert-heading">ATENCION!</h4>
													<p>
														Actualmente su proyecto ofrece la ultilidad programada. La obra hoy tiene una utilidad de <strong>($<?=number_format($TOTALT,0,'','.')?>)</strong> de la programada por <strong>($<?=number_format($UtilidadO,0,'','.')?>)</strong>.<br/>
													</p>
												</div>
<?
}
?>
<br/><br/><br/>  -->
                                                
                                                
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div>
					<!-- Finalizando la tabla de pagos-->
					<?}?>
                                                
                                                
                                                
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
       
		<script src="../../assets/js/libs/jquery/jquery-1.11.0.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/core/BootstrapFixed.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="../../assets/js/libs/moment/accounting.min.js"></script>
		<script src="../../assets/js/libs/jquery-knob/jquery.knob.js"></script>
		<script src="../../assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/libs/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/core/demo/DemoCharts.js"></script>
        
		<script src="../../assets/js/libs/select2/select2.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->
		<script type="text/javascript">
		function cargar(){
		
		var Id=$("#NumeroFactura").val();
		var Auto=$("#Corre").val();
		$.ajax({
  		url: "cambio-auto.php?Correos="+Auto+"&Id="+Id,
  		data: "Id="+Id,
  		type: "get",
  		success: function(data) {
  		document.getElementById("Corre").value=data;
  		$("#Response").html("<span id='Response50' class='alert alert-success'>Actualizado correctamente!</span>").fadeIn(2000);
  		$("#Response50").delay(2000);
  		$("#Response50").fadeOut(1000);
  		}
  		});
		
		};
		</script>
    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
