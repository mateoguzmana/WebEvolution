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
					
					
					
					$TipoForm			=$_REQUEST["Opcion"];
					if (!empty($TipoForm)) {
						if ($TipoForm=="1") {
						$Opcion="SI";
					}
					if ($TipoForm=="2") {
						$Opcion="NO";
					}
					}

					$Proveedor 				=$_REQUEST["IdProve"];

					$queryMEN				="SELECT* FROM Proveedores WHERE Id = '$Proveedor'" ;
					$resultMEN				=mysql_query($queryMEN, $id);
							
					While($rowMEN			=mysql_fetch_array($resultMEN))
					{
					$NombreProve			=$rowMEN["Nombre"];
					$Ciudad 				=$rowMEN["Ciudad"];
					$Dir 					=$rowMEN["Dir"];
					$TipoCta 				=$rowMEN["TipoCuenta"];
					$NumeroCuenta			=$rowMEN["NumeroCuenta"];
					$FormaPago 				=$rowMEN["FormaPago"];
					$Banco 					=$rowMEN["Banco"];
					}
					


					$LineaMenuS			=$NombreTITMEN;
					
					$Idobra				=$_REQUEST["Idobra"];
					
					$queryTITMEN		="SELECT* FROM Conceptos WHERE Id = '$Idobra'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreobra			=$rowTITMEN["Nombre"];
					}

					 			
					
					$queryTITMEN		="SELECT* FROM Facturacion order by Fechafact ASC" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Fechafact			=$rowTITMEN["Fechafact"];
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
        
<script type="text/javascript">
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
</script> 


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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Crear Cuenta por Pagar</a></li>
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
                                            
                                            
                                            
                                            
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="add-pagar-expo-2.php" id="form1" name="form1" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  id="form1" name="form1" novalidate>
                                                        <?
														}
														?>
												<div class="row">
												
                                                <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Proveedor</label>
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un proveedor" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Proveedor))
																		{
																		?>
                                                                  <option value="add-pagar-recu.php?Opcion=<?=$TipoForm?>&IdProve=<?=$Idproveedor?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$NombreProve?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-pagar-recu.php" selected>Seleccione un proveedor</option>
                                                                        <?
																		}
																		if ($TipoForm=="1") {
																		$queryRR		="SELECT * FROM Proyectoprov WHERE Idproyect = '$Idobra'" ;
																		$resultRR		=mysql_query($queryRR, $id);
					
																		While($rowRR	=mysql_fetch_array($resultRR))
																		{
																		$Asunto			=$rowRR["Proveedor"];
																		
																		$queryX		="SELECT* FROM Proveedores WHERE Id = '$Asunto' ";
																		$resultX		=mysql_query($queryX, $id);
                                                                        
                                                                        While($rowX	=mysql_fetch_array($resultX))
                                                                        {
                                                                        $Idproveedor			=$rowX["Id"];
																		$Nombreproveedor		=$rowX["Nombre"];
																		$Dirclien 				=$rowX["Dir"];
																		$Ciudadclien			=$rowX["Ciudad"];
																		$TipoCuentaclien 		=$rowX["TipoCuenta"];
																		$NumeroCuentaclien 		=$rowX["NumeroCuenta"];
																		$FormaPagoclien			=$rowX["FormaPago"];
                                                                        ?>
                                                                        <option value="add-pagar-recu.php?Opcion=<?=$TipoForm?>&IdProve=<?=$Idproveedor?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$Nombreproveedor?></option>
																		<?
																		}
																		}
																		}else{
																		$queryX		="SELECT* FROM Proveedores WHERE Id <> '$Proveedor' order by Nombre";
																		$resultX		=mysql_query($queryX, $id);
                                                                        
                                                                        While($rowX	=mysql_fetch_array($resultX))
                                                                        {
                                                                        $Idproveedor			=$rowX["Id"];
																		$Nombreproveedor		=$rowX["Nombre"];
																		$Dirclien 				=$rowX["Dir"];
																		$Ciudadclien			=$rowX["Ciudad"];
																		$TipoCuentaclien 		=$rowX["TipoCuenta"];
																		$NumeroCuentaclien 		=$rowX["NumeroCuenta"];
																		$FormaPagoclien			=$rowX["FormaPago"];
                                                                        ?>
                                                                        <option value="add-pagar-recu.php?Opcion=<?=$TipoForm?>&IdProve=<?=$Idproveedor?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$Nombreproveedor?></option>
																		<?
																		}
																		}
																		?>

                                                                </select>
                                                                <input name="Idproveedor" id="Idproveedor" type="hidden" value="<?=$Idproveedor?>">
                                                              	<input name="Nombreproveedor" id="Nombreproveedor" type="hidden" value="<?=$NombreProve?>">
																</div>
															</div>
														</div>
                                                
													<? if(!empty($Proveedor)){?>
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Concepto</label>
                                                              	<input name="Idobra" id="Idobra" type="hidden" value="<?=$Idobra?>">
                                                              	<input name="Nombreobra" id="Nombreobra" type="hidden" value="<?=$Nombreobra?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione una Obra" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Idobra))
																		{
																		?>
                                                                  <option value="add-pagar-recu.php?Idobra=<?=$Idobra?>&IdProve=<?=$Idproveedor?>&Opcion=<?=$TipoForm?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreobra?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-pagar-recu.php" selected>Seleccione un Concepto</option>
                                                                        <?
																		}

                                                                        $queryTIP		="SELECT * FROM Conceptos where Muestra = 0 and Id <> '$Idobra' order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                        <option value="add-pagar-recu.php?Idobra=<?=$IdTIP?>&IdProve=<?=$Proveedor?>&Opcion=<?=$TipoForm?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTIP?></option>
																		<?
																		}
																		?>

                                                                </select>

																</div>
															</div>
														</div>
														<? } ?>
                                                    
														
														
                                              
<?
if(!empty($Idobra))
{
?>
														
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Direccion" class="control-label">Forma Pago</label>
                                                                	<input type="text" name="FormaPago" id="FormaPago" class="form-control" placeholder="Forma de pago" value="<?=$FormaPago?>" required readonly style="background-color:#CCC">
																</div>
															</div>
														</div>
														<?if ($FormaPago!="EFECTIVO") { ?>

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Direccion" class="control-label">Tipo Cuenta</label>
                                                                	<input type="text" name="TipoCta" id="TipoCta" class="form-control" placeholder="Tipo de cuenta" value="<?=$TipoCta?>" required readonly style="background-color:#CCC">
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <label class="control-label">Nro Cuenta</label>
                                                                    <input type="text" class="form-control" name="NumeroCuenta" id="NumeroCuenta"  value ="<?=$NumeroCuenta?>" placeholder="Numero de cuenta" required readonly style="background-color:#CCC">
                                                                </div>
                                                            </div>
														</div>

														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <label class="control-label">Banco</label>
                                                                    <input type="text" class="form-control" name="Banco" id="Banco" value ="<?=$Banco?>" placeholder="Numero de cuenta" required readonly style="background-color:#CCC">
                                                                </div>
                                                            </div>
														</div>
														<? } ?>
														




                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Fecha</label>
														<div class='input-group date' id='demo-date-start'>
															<input type="text" class="form-control" required name="FechaPago" id="FechaPago"/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
                                                                

                                                                </div>
                                                                
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fin" class="control-label">Fecha Vencimiento</label>
														<div class='input-group date' id='demo-date-end'>
															<input type="text" class="form-control" required name="FechaVencimiento" id="FechaVencimiento"/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
                                                                

                                                                </div>
                                                                
															</div>
														</div>
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
													<label class="control-label">Nro. Factura</label>
													<input type="text" name="NumeroFactura" id="NumeroFactura" onkeypress="isNumberKey()" class="form-control">

													</div>
												</div>
												</div>
                                                    
                                                    
                                                    <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
													<label class="control-label">Valor</label>
													<input type="text" name="Valor" id="Valor" class="form-control dollar-mask" required>

													</div>
												</div>
												</div>
												</div>
												<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Retencion" class="control-label">% Retención</label>
                                                                	<!-- <input type="text" name="Retencion" id="Retencion" class="form-control" placeholder="% de Retención"  onKeyPress="return isNumberKey(event);" required> -->
																	<select name="Retencion" id="Retencion" class="form-control select2-list" data-placeholder="Seleccione el tipo de cuenta" required>
            
                                                                        <option value="" selected>Seleccione el porcentaje de retención</option>

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
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Periodicidad" class="control-label"> Periodicidad</label>
																	<select name="Periodicidad" id="Periodicidad" class="form-control select2-list" required>
                                                                        <option value="" selected>Periodicidad</option>
                                                                        <option value="10">10 DÍAS</option>
                                                                        <option value="15">15 DÍAS</option>
                                                                        <option value="20">20 DÍAS</option>
                                                                        <option value="30">1 MES</option>
                                                                        <option value="60">2 MESES</option>
                                                                        <option value="90">3 MESES</option>
                                                                        <option value="180">6 MESES</option>
                                                                </select>
																</div>
															</div>
															</div>
												</div>
														
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Descripcion" class="control-label">Concepto</label>
                                                                  <textarea name="Concepto" rows="3" required class="form-control" id="Concepto" placeholder="Concepto del pago" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
																<input name="TipoCuenta" id="TipoCuenta" type="hidden" value="1">
																<input name="IdProve" id="IdProve" type="hidden" value="<?=$Proveedor?>">	

																</div>
															</div>
															
													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<br/><br/><button type="submit" id="enviar" class="btn btn-primary">Realizar Operación</button>
                                                        <?
														}
														?> 
														</div>
													</div>
                                                    </div>
                                                    
<?
}
?>
                                                    
                                                    

												</form>
                                                
                                                
                                                
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
	 
$(document).ready(function() 
{

    var MaxInputs       = 50; //Número Maximo de Campos
    var contenedor      = $("#contenedor"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor div").length + 1;
    var FieldCount = x-1; //para el seguimiento de los campos
	


    $(AddButton).click(function (e) 
	{
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;

            //agregar campo
            $(contenedor).append('<div><table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4;" cellpadding="0" cellspacing="0" height="20"><tr><td width="10%"><input type="text" name="cant'+ FieldCount +'" id="cant'+ FieldCount +'" placeholder="Cantidad" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td> <td width="15%"><input type="text" name="plano'+ FieldCount +'" id="plano'+ FieldCount +'" placeholder="Obra" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" onChange="javascript:this.value=this.value.toUpperCase();" onClick="window.open(&quot;lista-obras.php?Idcliente=<?=$Idcliente?>&Cont='+ FieldCount +'&quot;,&quot;precios&quot;,&quot;menubar=no,scrollbars=yes, width=600, height=600&quot;);return false" readonly/><input type="hidden" name="Idobra'+ FieldCount +'" id="Idobra'+ FieldCount +'"></td><td width="55%"><input type="text" name="descri'+ FieldCount +'" id="descri'+ FieldCount +'" placeholder="Descripcion" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/> </td><td width="10%"><input type="text" name="vlr'+ FieldCount +'" id="vlr'+ FieldCount +'" placeholder="V/Unid" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td><td width="10%" align="right"><a href="#" class="borrar"><img src="../../assets/img/delete.png" border = "0" style="margin-right:5px;"></a></td></tr></table></div>');

            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".borrar", function(e)
	{ //click en eliminar campo
        if( x > 1 ) 
		{
            $(this).parent().parent().remove(); //eliminar el campo
            x--;
			
        }
        return false;
    });
	

	
	
});
 
</script>

    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
