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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1403937875" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/TableTools.css?1403937875" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/toastr/toastr.css?1403937848" />
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
						<!-- START DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
								<div class="box">
									<div class="box-body table-responsive">
										<table id="datatable7" class="table table-striped table-hover">
											<thead>
												<tr>
													<th>Nro.</th>
                                                    <th>Cliente</th>
                                                    <th>Proyecto</th>
													<th>Fecha</th>
													<th>Valor</th>
													<th>Saldo</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
                                            
												<?
							
							$queryPerz1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$MosPerzA			=$rowPerz1["Act"];
							$MosPerzB			=$rowPerz1["Del"];
							
							
								if($MosPerzA > 0)
								{
								$MosPerz1	=	1;
								}
							
								if($MosPerzB > 0)
								{
								$MosPerz2	=	1;
								}
							}
												
                                                /* $queryUSERS			="SELECT * FROM CuentasCobrar WHERE (Estado=0 || Estado=1 || Estado=4) AND TipoCuenta=1 Order by Id DESC";
                                                $resultUSERS		=mysql_query($queryUSERS, $id);
                                                
                                                While($rowUSERS		=mysql_fetch_array($resultUSERS))
                                                {
                                                $TipoCuenta 		=$rowUSERS["TipoCuenta"];
                                                $NombreUSERS		=$rowUSERS["Cliente"];
                                                $IdclienteUSERS		=$rowUSERS["Idcliente"];
												$FechainicioUSERS	=$rowUSERS["FechaInicio"];
												$NitnUSERS			=$rowUSERS["Nit"];
												$IdUSERS			=$rowUSERS["Id"];
												$ValorUSERS			=$rowUSERS["Valor"];
												$Estado				=$rowUSERS["Estado"];
												$Concepto			=$rowUSERS["Concepto"];

												if ($TipoCuenta=="1") {
													$TipoCuenta="Exporadica";
												}
												if($TipoCuenta=="2") {
													$TipoCuenta="Recurrente";
												}
												*/

												$querySZS			="SELECT * FROM Facturacion WHERE Estado=3 || Estado=4  Order by Id DESC";
                                                $resultSZS			=mysql_query($querySZS, $id);
                                                
                                                while($rowSZS		=mysql_fetch_array($resultSZS))
                                                {
                                                $Idfact 			=$rowSZS["Id"];
                                                $Razon 				=$rowSZS["Razon"];
                                                $Nit 				=$rowSZS["Nit"];
                                                $Fechafact 			=$rowSZS["Fechafact"];
                                                $Descripcion		=$rowSZS["Descripcion"];
                                                $Org 				=$rowSZS["Valor"];
                                                $Valor 				=$rowSZS["Total"];
                                                $Abono 				=$rowSZS["ValorCobrado"];
                                                $Estado				=$rowSZS["Estado"];
                                                $Deuda				=($Valor-$Abono);

                                                $queryRS 			="SELECT * FROM Facturacionmov WHERE Idfact='$Idfact'";
                                                $resultRS 			=mysql_query($queryRS,$id);
                                                while ($rowRS 		=mysql_fetch_array($resultRS)) {
                                                $Idobra 			=$rowRS["Idobra"];
                                                }

                                                $queryNd 			="SELECT * FROM Proyectos WHERE Id='$Idobra'";
                                                $resultNd 			=mysql_query($queryNd,$id);
                                                while ($rowNd 		=mysql_fetch_array($resultNd)) {
                                                $Obra 				=$rowNd["Nombre"];
                                                }

                                                if($Idobra==0){
												$Obra="OTRO";	
												}

												$queryX 			="SELECT SUM(Total) AS Total FROM Facturacion WHERE Estado=3 || Estado=4";
												$resultX 			=mysql_query($queryX,$id);
												while($rowX 		=mysql_fetch_array($resultX)){

												$ValorA	 			=$rowX["Total"];

												}
												$query99 			="SELECT SUM(ValorCobrado) AS Total FROM Facturacion WHERE Estado=3 || Estado=4";
												$result99 			=mysql_query($query99,$id);
												while($row99 		=mysql_fetch_array($result99)){

												$ValorB	 			=$row99["Total"];

												}
												$ValorX 			=($ValorA-$ValorB);
                                                ?>

                                            	
												<tr class="gradeA">
													<td><?=$Idfact?></td>
                                                    <td><?=$Razon?></td>
                                                    <td><?=$Obra?></td>
													<td><?=$Fechafact?></td>
													<td>$ <?=number_format($Org,0,'','.')?></td>
													<td>$ <?=number_format($Deuda,0,'','.')?></td>
													<td class="text-right">
                                                          
                                                        <?
														if($Estado == 3 || $Estado==4)
														{
														?>                                              
													<input name="Procesar" type="button" class="btn btn-primary" value="ABONAR" style="width:100px;"  onClick="location.href='cobrar-2.php?Id=<?=$Idfact?>&Idcliente=<?=$IdclienteUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'"> 
                                                        <?
														}
														elseif($Estado == "1")
														{
														?>
													<input name="Procesar" type="button" class="btn btn-warning" value="FINALIZADA"  style="width:100px;" onClick="location.href='cobrar-2.php?Id=<?=$Idfact?>&Idcliente=<?=$IdclienteUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'"> 
                                                        <?
														}
														elseif($Estado == 2)
														{
														?>
													<input name="Procesar" type="button" class="btn btn-success" value="ANULADA"  style="width:100px;" onClick="location.href='act-cobros-2.php?Id=<?=$Idfact?>&Idcliente=<?=$IdclienteUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'"> 
                                                        <?
														}
														?>
                                                        <?
														/*if($Estado == 0)
														{
														?>  
													<input name="Eliminar" type="button" class="btn btn-danger" value=" ANULAR "  style="width:100px;" data-toggle="modal" data-target="#textModal<?=$IdUSERS?>" data-placement="top">
                                                        <?
														} */
														?>
                                                    </td>

												</tr>
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$IdUSERS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">NRO. <?=$IdUSERS?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Realmente desea anular este cobro?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn btn-success" onclick="location.href='eli-cobros.php?Id=<?=$IdUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Confirmar</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                <?
												}
												?>
                                                
											</tbody>
										</table>
									</div><!--end .box-body -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div>
						<!-- END DATATABLE 1 -->
						<div class="row">
							<div class="col-sm-12">
								<div class="box">
									<div class="box-body">
										<table class="table table-condensed">
											<tr>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td style="width:20%;" class="success text-right"><h4><strong>Saldo total:</strong> $ <?=number_format($ValorX,0,'','.')?></h4></td>
											</tr>
										</table>									
									</div>
								</div>
							</div>
						</div>

					</div>
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
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/ColVis/js/ColVis.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/TableTools/media/js/TableTools.js"></script>
		<script src="../../assets/js/libs/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<script src="../../assets/js/libs/toastr/toastr.min.js"></script>
		<script src="../../assets/js/core/demo/DemoUIMessages.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>

		<!-- END JAVASCRIPT -->

	</body>
</html>
