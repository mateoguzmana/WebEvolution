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
			      <h3 class="text-light text-white"><span><strong><?=$NombreEmpresa?></strong></span></h3>
			      </a> 
               </div>
					<?
                    include("../../includes/menu.php");
                    ?>		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->
            
            
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$NombreTITMEN?></h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Reporte cuentas cobradas.</a></li>
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
                                            
												<div class="row">
													<div class="col-sm-5">
														<div class="form-group">
															<div class="col-sm-12">
															<label for="Inicio" class="control-label">Desde</label>
                                                              <div class='input-group date' id='demo-date-start'>
                                                                  <input type="text" name="FechaInicio" class="form-control" id='demo-date-inline' placeholder="Rango de inicio" onclick="cargar()" required data-date-format="yyyy-mm-dd"/>
                                                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                              </div>
                                                            </div>
														</div>
													</div>
													<div class="col-sm-5">
														<div class="form-group">
															<div class="col-sm-12">
															<label for="Fin" class="control-label">Hasta</label>
                                                               <div class='input-group date' id='demo-date-end'>
                                                                   <input type="text" class="form-control" name="FechaFin" id='demo-date-inline' onclick="cargar()" required placeholder="Rango final" />
                                                                   <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                               </div>
                                                            </div>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-group">
															<div class="col-sm-12">
															<label for="Fin" class="control-label">&nbsp;</label><br>
                                                                 <button class="btn btn-support5" title="Revisar" onclick="cargar();"><i class="fa fa-check"></i></button>&nbsp;&nbsp;&nbsp;<span id="Preloader"></span>
                                                            </div>
														</div>
													</div>
												</div>
												<div class="row" id="Tabla" style="display:none;">
													<div class="col-lg-12">
														<div class="box">
															<div class="box-body table-responsive">
												<table class="table table-hover">
												<thead>
													<tr>
														<th>Nro.</th>
														<th>Cliente</th>
														<th>Proyecto</th>
														<th>Valor</th>
													</tr>
												</thead>
													<tbody id="resp">

													</tbody>
													<tr>
													<td></td><td></td><td></td><td id="Valor" class="alert alert-success"><strong>Total: </strong><span id="Total"></span></td>
													</tr>
												</table>
															</div>
														</div>
													</div>
												</div>
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
		<!--  SCRIPT PARA CARGAR REPORTE -->
		<script type="text/javascript">
		function cargar(){
		var Inicio=$('input[name=FechaInicio]').val();
		var Fin=$('input[name=FechaFin]').val();
		var Id=1;
		$.ajax({
  		url: "ajax-reportecobrado.php?FechaFin="+Fin+"&FechaInicio="+Inicio,
  		data: "Id="+Id,
  		type: "get",
  		success: function(data) {
  		document.getElementById("Tabla").style.display="";
  		$('#Preloader').html("<img width='30' src='preloader.GIF'>").fadeIn(500);
  		$('#Preloader').fadeOut(1000);
  		$('#resp').html(data).fadeIn(2000);
  		if (data.length==0) {
  		$('#resp').html("<tr><td></td><td></td><td style='text-align:center;'><h5>No se han encontrado resultados.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></td><td></td></tr>").fadeIn(2000);
  		document.getElementById("Valor").style.display="none";
  		}
  		if (data.length>0) {
  		document.getElementById("Valor").style.display="";
  		}
  		}
  		});
  		$.ajax({
  		url: "sum-datoscobrado.php?FechaFin="+Fin+"&FechaInicio="+Inicio,
  		data: "Id="+Id,
  		type: "get",
  		success: function(data) {
  		$('#Total').html("$ "+data).fadeIn(2000);
  		}
		});

		
		};
		</script>
		<!-- FIN SCRIPT -->
	</body>
</html>
