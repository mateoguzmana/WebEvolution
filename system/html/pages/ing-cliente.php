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

$Count 	= 1;
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Informacion del Cliente</a></li>
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
												<form class="form-horizontal form-validate" role="form" method="post" action="ing-cliente2.php" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  novalidate>
                                                        <?
														}
														?>
												
												
                                                
                                                
													<div class="row">
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Nombre" class="control-label">Razón Social</label>
																	<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Razón Social/Nombre" value="" onChange="javascript:this.value=this.value.toUpperCase();" required data-rule-minlength="3">
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Apellidos" class="control-label">Nit/Cédula</label>
																	<input type="text" name="Cedula" id="Cedula" class="form-control" placeholder="Nit/Cédula" value="">
																</div>
															</div>
														</div>
													</div>
                                                	<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Ciudad" class="control-label">Ciudad</label>
                                                                	<input type="text" name="Ciudad" id="Ciudad" class="form-control" placeholder="Ciudad" onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Direccion" class="control-label">Dirección</label>
                                                                	<input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Dirección" onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
                                                        
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Telefono" class="control-label">Teléfono</label>
                                                                	<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Teléfono" onKeyPress="return isNumberKey(event);">
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
                                                        
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Contacto" class="control-label">Contacto</label>
                                                                	<input type="text" name="Contacto" id="Contacto" class="form-control" placeholder="Nombre de Contacto" onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Celcontacto" class="control-label">Celular</label>
                                                                	<input type="text" name="Celcontacto" id="Celcontacto" class="form-control" placeholder="Celular del Contacto" onKeyPress="return isNumberKey(event);">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Contacto" class="control-label">Email</label>
                                                                	<input type="email" name="Email" id="Email" class="form-control" placeholder="Email" required>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">	
														<div class="form-group">
															<div class="col-sm-12">
																<label for="Observaciones" class="control-label">Observaciones</label>
                                                    		           <textarea name="Observaciones" rows="3" class="form-control" id="Observaciones" placeholder="Observaciones del cliente" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
															</div>
														</div>	
														</div>
													</div>	
													<div class="row">
                                                        <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Contrasena" class="control-label">Contraseña</label>
																	<input type="password" name="Contrasena" id="Contrasena" class="form-control" placeholder="Contraseña" required data-rule-minlength="6">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Contraseña1" class="control-label">Contraseña</label>
																	<input type="password" name="Contrasena1" id="Contrasena1" class="form-control" placeholder="Repita la Contraseña" required  data-rule-equalto="#Contrasena" data-rule-minlength="6">
																</div>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-sm-12">
															<div class="box box-outlined">
																<div class="box-head">
																	<header><h4 class="text-light"><i class="fa fa-fw fa-cogs"></i> Hosting</h4></header>
																	<div class="tools">
																		<div class="btn-group btn-group-transparent">
																			<a class="btn btn-equal btn-sm" onclick="IngFilaHosting();"><i class="fa fa-plus-square"></i></a>
																			<a class="btn btn-equal btn-sm" onclick="DeleteHosting();"><i class="fa fa-minus-square"></i></a>
																			<a class="btn btn-equal btn-sm btn-refresh"><i class="fa fa-refresh"></i></a>
																			<a class="btn btn-equal btn-sm btn-collapse"><i class="fa fa-angle-down"></i></a>
																			<a class="btn btn-equal btn-sm btn-close"><i class="fa fa-times"></i></a>
																		</div>
																	</div>
																</div><input type="hidden" id="Numero" name="Numero" value="<?=$Count?>">
																<div class="box-body">
																	<table class="table table-hover">
																		<thead>
																			<tr>
																				<th></th>
																				<th>Nombre</th>
																				<th>Url</th>
																				<th>Fecha</th>
																				<th>Usuario</th>
																				<th>Contraseña</th>
																			</tr>
																		</thead>
																		<tbody id="Hosting">
																			<tr id="<?=$Count?>">
																				<td><?=$Count?></td>
																				<td><input type="text" class="form-control" name="NombreH<?=$Count?>" id="NombreH<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="UrlH<?=$Count?>" id="UrlH<?=$Count?>"></td>
																				<td><input type="date" class="form-control" name="FechaH<?=$Count?>" id="FechaH<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="UsuarioH<?=$Count?>" id="UsuarioH<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="ContrasenaH<?=$Count?>" id="ContrasenaH<?=$Count?>"></td>
																			</tr>
																		</tbody>
																	</table>
																</div><!--end .box-body -->
															</div><!--end .box -->
							 							</div>
													</div>
													
													<div class="row">
														<div class="col-sm-12">
															<div class="box box-outlined">
																<div class="box-head">
																	<header><h4 class="text-light"><i class="fa fa-fw fa-cogs"></i> Dominio</h4></header>
																	<div class="tools">
																		<div class="btn-group btn-group-transparent">
																			<a class="btn btn-equal btn-sm" onclick="IngFilaDominio();"><i class="fa fa-plus-square"></i></a>
																			<a class="btn btn-equal btn-sm" onclick="DeleteDominio();"><i class="fa fa-minus-square"></i></a>
																			<a class="btn btn-equal btn-sm btn-refresh"><i class="fa fa-refresh"></i></a>
																			<a class="btn btn-equal btn-sm btn-collapse"><i class="fa fa-angle-down"></i></a>
																			<a class="btn btn-equal btn-sm btn-close"><i class="fa fa-times"></i></a>
																		</div>
																	</div>
																</div><input type="hidden" id="Numero2" name="Numero2" value="<?=$Count?>">
																<div class="box-body">
																	<table class="table table-hover">
																		<thead>
																			<tr>
																				<th></th>
																				<th>Nombre</th>
																				<th>Url</th>
																				<th>Proveedor</th>
																				<th>Fecha</th>
																				<th>Usuario</th>
																				<th>Contraseña</th>
																			</tr>
																		</thead>
																		<tbody id="Dominio">
																			<tr id="<?=$Count?>">
																				<td><?=$Count?></td>
																				<td><input type="text" class="form-control" name="NombreD<?=$Count?>" id="NombreD<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="UrlD<?=$Count?>" id="UrlD<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="ProveedorD<?=$Count?>" id="ProveedorD<?=$Count?>"></td>
																				<td><input type="date" class="form-control" name="FechaD<?=$Count?>" id="FechaD<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="UsuarioD<?=$Count?>" id="UsuarioD<?=$Count?>"></td>
																				<td><input type="text" class="form-control" name="ContrasenaD<?=$Count?>" id="ContrasenaD<?=$Count?>"></td>
																			</tr>
																		</tbody>
																	</table>
																</div><!--end .box-body -->
															</div><!--end .box -->
							 							</div>
													</div>

													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
                                                        
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                        <?
														}
														?> 
														</div>
													</div>

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
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/libs/select2/select2.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>

		<!-- END JAVASCRIPT -->

		<!-- Script para la tabla Hosting-->
		<script type="text/javascript">
		function IngFilaHosting(){
		var Tabla  = $("#Hosting");	
		var Ultima = $("#Hosting tr").filter(":last");
		var Numero1 = $("#Numero").val();
		var Numero 	=parseInt(Numero1)+1;
		var Fila   ="<tr id='"+Numero+"'><td>"+Numero+"</td><td><input type='text' class='form-control' name='NombreH"+Numero+"' id='NombreH"+Numero+"'></td><td><input type='text' class='form-control' name='UrlH"+Numero+"' id='UrlH"+Numero+"'></td><td><input type='date' class='form-control' name='FechaH"+Numero+"' id='FechaH"+Numero+"'></td><td><input type='text' class='form-control' name='UsuarioH"+Numero+"' id='UsuarioH"+Numero+"'></td><td><input type='text' class='form-control' name='ContrasenaH"+Numero+"' id='ContrasenaH"+Numero+"'></td></tr>";
		$('#Hosting tr:last').after(Fila);

		$("#Numero").val(Numero);
		};
		function DeleteHosting(){
		$('#Hosting tr:last').remove();

		var Numero1 = $("#Numero").val();
		var Numero  = parseInt(Numero1)-1;
		$("#Numero").val(Numero);
		};
		</script>
		<!-- Fin script-->

		<!-- Script para la tabla dominio -->
		<script type="text/javascript">
		function IngFilaDominio(){
		var Tabla  = $("#Dominio");	
		var Ultima = $("#Dominio tr").filter(":last");
		var Numero1 = $("#Numero2").val();
		var Numero 	=parseInt(Numero1)+1;
		var Fila   ="<tr id='"+Numero+"'><td>"+Numero+"</td><td><input type='text' class='form-control' name='NombreD"+Numero+"' id='NombreD"+Numero+"'></td><td><input type='text' class='form-control' name='UrlD"+Numero+"' id='UrlD"+Numero+"'></td><td><input type='text' class='form-control' name='ProveedorD"+Numero+"' id='ProveedorD"+Numero+"'></td><td><input type='date' class='form-control' name='FechaD"+Numero+"' id='FechaD"+Numero+"'></td><td><input type='text' class='form-control' name='UsuarioD"+Numero+"' id='UsuarioD"+Numero+"'></td><td><input type='text' class='form-control' name='ContrasenaD"+Numero+"' id='ContrasenaD"+Numero+"'></td></tr>";
		$('#Dominio tr:last').after(Fila);

		$("#Numero2").val(Numero);
		};
		function DeleteDominio(){
		$('#Dominio tr:last').remove();

		var Numero1 = $("#Numero2").val();
		var Numero  = parseInt(Numero1)-1;
		$("#Numero2").val(Numero);
		};
		</script>
		<!-- Fin script-->
	</body>
</html>
