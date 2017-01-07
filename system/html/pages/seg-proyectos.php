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


					$Actual = date('Y-m-d');

					$queryAA = "SELECT * FROM Seg_proyecto WHERE Muestra=0 AND Estado=0";
					$resultAA= mysql_query($queryAA,$id);

					while ($rowAA = mysql_fetch_array($resultAA)) {
					
					$Ids    = $rowAA["Id"];
					$Fin    = $rowAA["Fin"];
					
					if($Fin<$Actual){
					
						$query22 = "UPDATE Seg_proyecto SET Estado=2 WHERE Id='$Ids'";
						$result22= mysql_query($query22,$id);
					
					}
					
					}



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
										<table id="datatable3" class="table table-striped table-hover">
											<thead>
												<tr>
													<th>Codigo</th>
                                                    <th>Proyecto</th>
													<th>Cliente</th>
													<th>Fecha de Inicio</th>
													<th>Tareas pendientes</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
                                            
												<?
							$MosPerz1		=	0;
							$MosPerz2		=	0;
					

							
							$queryPerz1			="SELECT * FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
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
												
                                                $queryUSERS			="SELECT* FROM Proyectos where Muestra = 0 AND Estado=0 Order by Id DESC";
                                                $resultUSERS		=mysql_query($queryUSERS, $id);
                                                
                                                While($rowUSERS		=mysql_fetch_array($resultUSERS))
                                                {
                                                $NombreUSERS		=$rowUSERS["Nombre"];
                                                $IdclienteUSERS		=$rowUSERS["Idcliente"];
												$FechainicioUSERS	=$rowUSERS["Fechainicio"];
												$UbicacionUSERS		=$rowUSERS["Ubicacion"];
												$IdUSERS			=$rowUSERS["Id"];
												$Estado				=$rowUSERS["Estado"];

												
                                                $queryTIP		="SELECT* FROM Clientes where Id = '$IdclienteUSERS' and Muestra = 0 order by Nombre";
                                                $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                while($rowTIP	=mysql_fetch_array($resultTIP))
                                                {
												$NombreTIP		=$rowTIP["Nombre"];
												}
												$Muestra=0;
												$queryXD		="SELECT * FROM Facturacion where Idobra = '$IdUSERS' and (Estado = 3 || Estado = 4)";
                                                $resultXD		=mysql_query($queryXD, $id);
                                                                        
                                                while($rowXD	=mysql_fetch_array($resultXD))
                                                {
                                                $Cobro 			=$rowXD["Id"];
                                                $Muestra++;
												}
												$queryOL		="SELECT* FROM CuentasPagar where Idobra = '$IdUSERS' and (Estado = 3 || Estado = 4)";
                                                $resultOL		=mysql_query($queryOL, $id);
                                                                        
                                                while($rowOL	=mysql_fetch_array($resultOL))
                                                {
                                                $Pago 			=$rowOL["Id"];
                                                $Muestra++;
												}
												
												$query88		="SELECT COUNT(*) AS Total FROM Seg_proyecto WHERE Idproyecto = '$IdUSERS' AND Estado=0";
                                                $result88		=mysql_query($query88, $id);
                                                                        
                                                while($row88	=mysql_fetch_array($result88))
                                                {
                                                $Total 			=$row88["Total"];
												}

                                                ?>
                                            
												<tr class="gradeA">
													<td><?=$IdUSERS?></td>
                                                    <td><?=$NombreUSERS?></td>
													<td><?=$NombreTIP?></td>
													<td><?=$FechainicioUSERS?></td>
													<td><?=$Total?></td>
													<td class="text-right">
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>                                             
													<input name="Procesar" type="button" class="btn btn-primary" style="width:100px;" value="VER"  onClick="location.href='seg-proyectos-2.php?Id=<?=$IdUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">
														<?
														}
														?> 
                                                        
                                                    </td>

												</tr>
												
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$IdUSERS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel"><?=$NombreUSERS?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Realmente desea realizar esta operación?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <?if($Muestra=="SI"){?>
                                                                <button type="button" class="btn btn-success" onclick="location.href='eli-proyecto.php?Id=<?=$IdUSERS?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Confirmar</button>
                                                            	<?}?>
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
