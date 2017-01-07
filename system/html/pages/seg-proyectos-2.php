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



$TipoUsuario 			=	$_SESSION['tipo'];

if($TipoUsuario==1){
$bloqueo="";
}else{
$bloqueo="readonly";	
}

					function recortar_texto($texto, $limite=30, $Id){	
						$texto = trim($texto);
						$texto = strip_tags($texto);
						$tamano = strlen($texto);
						$resultado = '';
						if($tamano <= $limite){
							return $texto;
						}else{
							$texto = substr($texto, 0, $limite);
							$palabras = explode(' ', $texto);
							$resultado = implode(' ', $palabras);
							$resultado .= '<a style="cursor:pointer;"  data-toggle="modal" data-target="#Ver'.$Id.'" data-placement="top" data-toggle="tooltip" data-placement="top" title="Ver más">...</a>';
						}	
						return $resultado;
					}
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					
					
					
					$IdUS				=$_REQUEST['Id']; 

					$Seg=0;

					$queryXX		="SELECT * FROM Seg_proyecto WHERE Idproyecto = '$IdUS' and Muestra = '0' order by Id";
                   	$resultXX		=mysql_query($queryXX, $id);
                                                                      	
					while($rowXX	=mysql_fetch_array($resultXX))
					{
					$Seg++;	
					}
					 $queryUSERS		="SELECT* FROM Proyectos where Id = '$IdUS' and Muestra = 0";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$Idcliente			=$rowUSERS["Idcliente"];
						$Nombre				=$rowUSERS["Nombre"];
						$Fechainicio		=$rowUSERS["Fechainicio"];
						$Fechafin			=$rowUSERS["Fechafin"];
						$Ubicacion			=$rowUSERS["Ubicacion"];
						$Valor				=$rowUSERS["Valor"];
						$Utilidad			=$rowUSERS["Utilidad"];
						$Descripcion		=$rowUSERS["Descripcion"];
						$Estado				=$rowUSERS["Estado"];
						$Fechareal			=$rowUSERS["Fechareal"];
						$Usuario			=$rowUSERS["Usuariofin"];
						
						if($Estado == 1)
						{
						$ponebloqueo	=	'disabled';
						}
						$Util=($Utilidad/100);
						$UtilidadO			=($Valor*$Util);
						
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
						
						
						$decimales 	= explode(".",$Utilidad);
						$CuantosS	= $decimales[1];
						$CuantosDS	= strlen($CuantosS);
						/*
						if($CuantosDS == 1)
						{
						$Utilidad				=$Utilidad.'0';	
						}
						elseif($CuantosDS == 0)
						{
						$Utilidad				=$Utilidad.'00';	
						}
						elseif($CuantosDS == 2)
						{
						$Utilidad				=$Utilidad;	
						}
						*/

						$Muestra=0;
						$queryXD		="SELECT * FROM Facturacion where Idobra = '$IdUS' and (Estado = 3 || Estado = 4)";
                        $resultXD		=mysql_query($queryXD, $id);
                                                
                        while($rowXD	=mysql_fetch_array($resultXD))
                        {
                        $Cobro 			=$rowXD["Id"];
                        $Muestra++;
						}
						$queryOL		="SELECT* FROM CuentasPagar where Idobra = '$IdUS' and (Estado = 3 || Estado = 4)";
                        $resultOL		=mysql_query($queryOL, $id);
                                                
                        while($rowOL	=mysql_fetch_array($resultOL))
                        {
                        $Pago 			=$rowOL["Id"];
                        $Muestra++;
						}
						

						
						
						
                                $queryTIP		="SELECT* FROM Clientes where Id = '$Idcliente' and Muestra = '0'  order by Nombre";
                                $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                While($rowTIP	=mysql_fetch_array($resultTIP))
                                {
								$NombreTIP		=$rowTIP["Nombre"];
								}
						
					 }
					
					
					
							$arry0 				= 	array();
							$arry1 				= 	array();
							$querys1			="SELECT* FROM Proyectoprov where Idproyect = '$IdUS'  and Muestra = '0' Order By Id" ;
							$results1			=mysql_query($querys1, $id);
							
							While($rows1		=mysql_fetch_array($results1))
							{
							$Proveedor1	=	$rows1["Proveedor"];	
						
							$arry0[]	=	$Proveedor1;
							$arry1[]	=	$Proveedor1;
							}
							
										if(empty($arry0))
										{
										$cosult0	 =	" and ( Id <> '')";
										}
										else
										{
										$arry0 		 = 	array_unique($arry0);
										$cosult0	 =	" and ( Id  <> ";
										$cosult0	.=	 implode(' and Id  <> ',$arry0);
										$cosult0	.=	 ')';
										}
										
										$datos	 	= implode(',', $arry1);	
					
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


<script type="text/javascript">

function deleteOption(theSel, theIndex){ 
var selLength = theSel.length;
if(selLength>0){
theSel.options[theIndex] = null;
}
}

function moveOptions(theselfrom, theselto){

var theSelFrom=document.getElementById(theselfrom);
var theSelTo=document.getElementById(theselto);
var selLength = theSelFrom.length;
var selToLength =theSelTo.length;

count=0

if(theselfrom=="sel1"){
for(var i=0;i<theSelFrom.options.length;i++){
if(theSelFrom.options[i].selected==true){
count++
}
}

if(count+theSelTo.options.length>150){
for(var i=0;i<theSelFrom.options.length;i++){
theSelFrom.options[i].selected=false
}
return
}

}
 
for(var i=selLength-1; i>=0; i--){
if((theSelFrom.options[i].selected)){

msg=theSelFrom.options[i].text;
msgvalue=theSelFrom.options[i].value;
theSelTo.options[selToLength]=new Option(msg,msgvalue);
selToLength=theSelTo.options.length;

deleteOption(theSelFrom, i);
placeInHidden(',', 'sel2', 'hidY');
}
}

}

function placeInHidden(delim, selStr, hidStr){
var selObj = document.getElementById(selStr);
var hideObj = document.getElementById(hidStr);//hidden text box
hideObj.value = '';
for (var i=0; i<selObj.options.length; i++){ 
hideObj.value = hideObj.value =='' ? selObj.options[i].value : hideObj.value + delim + selObj.options[i].value;
}
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Informacion del proyecto <strong>NRO. <?=$IdUS?></strong></a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
												
												<form class="form-horizontal form-validate" role="form" method="post" action="act-proyecto-3.php" novalidate>
                                                
                                                
													<div class="row">
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Cliente</label>
                                                                <select name="Cliente" id="Cliente" class="form-control select2-list" data-placeholder="Seleccione el Cliente" required readonly>
                                                                        <option value="<?=$Idcliente?>" selected><?=$NombreTIP?></option>
                                                                </select>

																</div>
															</div>
														</div>
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Nombre" class="control-label">Proyecto</label>
																	<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre del proyecto" value="<?=$Nombre?>" onChange="javascript:this.value=this.value.toUpperCase();" required data-rule-minlength="3" readonly>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Inicio" class="control-label">Inicio</label>
                                                                        <input type="text" name="Fechainicio" class="form-control"value="<?=$Fechainicio?>" placeholder="Fecha de inicio" required data-date-format="yyyy-mm-dd" readonly/>
                                                                </div>
															</div>
														</div>
													
                                                
                                                    
                                                    

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fin" class="control-label">Fin</label>
                                                                        <input type="text" class="form-control" name="Fechafin"required placeholder="Fecha de entrega" value="<?=$Fechafin?>" readonly/>
                                                                </div>
															</div>
														</div>
													</div>
                                                    
                                                    
													<div class="form-group">
														<div class="col-sm-12">
															<label for="Descripcion" class="control-label">Descripción</label>
                                                            <textarea name="Descripcion" rows="3" required class="form-control" id="Descripcion" placeholder="Descripción de la Obra" onChange="javascript:this.value=this.value.toUpperCase();" readonly><?=$Descripcion?></textarea>
														</div>
													</div>
														
                                                    <?if($Seg>0){?> 
													<div class="row">
														<div class="col-sm-12">
															<table class="table">
																<thead>
																	<th>Fecha inicio</th>
																	<th>Fecha fin</th>
																	<th>Titulo</th>
																	<th>Nota</th>
																	<th>Proveedor</th>
																	<th></th>
																</thead>
																<tbody>
																	<?
                                                                    $querySS		="SELECT * FROM Seg_proyecto WHERE Idproyecto = '$IdUS' and Muestra = '0' order by Inicio,Id";
                                                                    $resultSS		=mysql_query($querySS, $id);
                                                                      	
                                                                    while($rowSS	=mysql_fetch_array($resultSS))
                                                                    {
                                                                    $IdSeg 			= $rowSS["Id"];
                                                                    $Inicio 		= $rowSS["Inicio"];
                                                                    $Fin 			= $rowSS["Fin"];
                                                                    $Titulo 		= $rowSS["Titulo"];
                                                                    $Archivo 		= $rowSS["Archivo"];
                                                                    $Idpp 			= $rowSS["Proveedor"];
                                                                    $Estado 		= $rowSS["Estado"];
                                                                    $Nota 			= $rowSS["Nota"];
                                                                    $Notica 		= recortar_texto($Nota, 50, $IdSeg);


                                                                    $query10 		= "SELECT * FROM Proveedores WHERE Id='$Idpp'";
                                                                    $result10 		= mysql_query($query10,$id);

                                                                    while($row10 	= mysql_fetch_array($result10)){
                                                                    $Encargado 		= $row10["Nombre"];	
                                                                    }

                                                                    if($Estado==0){
                                                                    $Color="";
                                                                    }elseif($Estado==1){
                                                                    $Color="success";
                                                                    }else{
                                                                    $Color="danger";	
                                                                    }

                                                                    ?>
                                                                    <tr id="Fila<?=$IdSeg?>" class="<?=$Color?>">
                                                                    	<td><?=$Inicio?></td>
                                                                    	<td><?=$Fin?></td>
                                                                    	<td><?=$Titulo?></td>
                                                                    	<td><?=$Notica?></td>
                                                                    	<td><?=$Encargado?></td>
                                                                    	<td style="text-align:right;">
                                                                    		<a data-toggle="modal" data-target="#Info<?=$IdSeg?>" data-placement="top"><button type="button" class="btn btn-support5" data-toggle="tooltip" data-placement="left" title="Ver todo"><i class="fa fa-th-large"></i></button></a>
                                                                    		<?if($Archivo!=""){?>
                                                                    		<a href="Seg_proyecto/<?=$Archivo?>" download><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Descargar archivo"><i class="fa fa-download"></i></button></a>
                                                                    		<?}
                                                                    		if($Estado==0){
                                                                    		?>
                                                                    		<a data-toggle="modal" data-target="#Chulo<?=$IdSeg?>" data-placement="top"><button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Marcar como completado"><i class="fa fa-check"></i></button></a>
                                                                    			<?if($TipoUsuario==1){?>
                                                                    			<button type="button" id="Mal<?=$IdSeg?>" class="btn btn-danger"  onclick="Malo(<?=$IdSeg?>);" data-toggle="tooltip" data-placement="bottom" title="Marcar como erroneo">✖</button>
                                                                    			<?}
                                                                    		}?>
                                                                    		<?if($Estado!=0){
                                                                    			if($TipoUsuario==1){
                                                                    		?>
                                                                    		<button type="button" id="Rev<?=$IdSeg?>" onclick="Revivir(<?=$IdSeg?>);" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Revivir"><i class="fa fa-refresh"></i></button>
                                                                    		<?
                                                                    			}
                                                                    		}?>
                                                                    	</td>
                                                                    </tr>

																	<!-- START LARGE TEXT MODAL MARKUP -->
                                                					<div class="modal fade" id="Chulo<?=$IdSeg?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                					    <div class="modal-dialog">
                                                					        <div class="modal-content">
                                                					            <div class="modal-header">
                                                					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                					                <h4 class="modal-title" id="textModalLabel">Verificación</h4>
                                                					            </div>
                                                					            <div class="modal-body">
																				<p>¿Desea marcar esta tarea como completada?</p>
                                                					            </div>
                                                					            <div class="modal-footer">
                                                					            	<button type="button" id="Bien<?=$IdSeg?>" class="btn btn-success" onclick="Correcto(<?=$IdSeg?>);" data-toggle="tooltip" data-placement="top" title="Marcar como completado">Aceptar</button>
                                                					                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                					            </div>
                                                					        </div><!-- /.modal-content -->
                                                					    </div><!-- /.modal-dialog -->
                                                					</div><!-- /.modal -->
                                                					<!-- END LARGE TEXT MODAL MARKUP -->		

                                                                    <!-- START LARGE TEXT MODAL MARKUP -->
                                                					<div class="modal fade" id="Ver<?=$IdSeg?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                					    <div class="modal-dialog">
                                                					        <div class="modal-content">
                                                					            <div class="modal-header">
                                                					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                					                <h4 class="modal-title" id="textModalLabel">Nota</h4>
                                                					            </div>
                                                					            <div class="modal-body">
																				<p><?=$Nota?></p>
                                                					            </div>
                                                					            <div class="modal-footer">
                                                					                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                					            </div>
                                                					        </div><!-- /.modal-content -->
                                                					    </div><!-- /.modal-dialog -->
                                                					</div><!-- /.modal -->
                                                					<!-- END LARGE TEXT MODAL MARKUP -->


                                                					<!-- START LARGE TEXT MODAL MARKUP -->
                                                					<div class="modal fade" id="Info<?=$IdSeg?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                					    <div class="modal-dialog">
                                                					        <div class="modal-content">
                                                					            <div class="modal-header">
                                                					                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                					                <h4 class="modal-title" id="textModalLabel">Seguimiento Nro. <?=$IdSeg?></h4>
                                                					            </div>
                                                					            <div class="modal-body">
                                                					            	<div class="row">
                                                					            	<form class="form-horizontal form-validate" role="form" method="post" action="seg-proyectos-4.php" enctype="multipart/form-data" novalidate>
                                                					            	<input type="hidden" name="IdL" value="<?=$IdSeg?>">
                                                					            	<input type="hidden" name="IdR" value="<?=$IdUS?>">
																						<div class="col-sm-6">
																							<label for="Inicio" class="control-label">Inicio</label>
																								<input type="date" name="Inicio" class="form-control" required value="<?=$Inicio?>" <?=$bloqueo?>>     		
                                                					                	</div>
																						<div class="col-sm-6">
																							<label for="Fin" class="control-label">Fin</label>
																								<input type="date" name="Fin" class="form-control" required value="<?=$Fin?>" <?=$bloqueo?>>
                                                					                	</div>
																						<div class="col-sm-12">
																							<label for="Titulo" class="control-label">Titulo</label>
                                                					    				  	    <input type="text" name="Titulo" class="form-control" onchange="javascript:this.value=this.value.toUpperCase();" value="<?=$Titulo?>" required/ <?=$bloqueo?>>
																						</div>
																						<div class="col-sm-12">
																							<label for="Nota" class="control-label">Nota</label>
                                                					    				  	    <textarea rows="6" name="Nota" required class="form-control"  onchange="javascript:this.value=this.value.toUpperCase();" <?=$bloqueo?>><?=$Nota?></textarea>
																						</div>
																						<div class="col-sm-12">
																							<label for="Proveedor" class="control-label">Proveedor</label>
																									<select name="Proveedor" id="Proveedor" class="form-control" data-placeholder="Seleccione el Proveedor" required>
					                                                                    			<option value="<?=$Idpp?>" selected><?=$Encargado?></option>
																									<?
																									$queryREXX		="SELECT* FROM Proyectoprov WHERE Idproyect = '$IdUS'";
                                                                    					    		$resultREXX		=mysql_query($queryREXX, $id);
                                                                    					    
                                                                    					    		while($rowREXX	=mysql_fetch_array($resultREXX))
                                                                    					    		{
                                                                    					    		$IdAA 			=$rowREXX["Proveedor"];
                                                                    					    		$queryFOXX		="SELECT* FROM Proveedores WHERE Id = '$IdAA' AND Id<>'$Idpp'";
                                                                    					    		$resultFOXX		=mysql_query($queryFOXX, $id);
                                                                    					    
                                                                    					    		while($rowFOXX	=mysql_fetch_array($resultFOXX))
                                                                    					    		{
                                                                    					    		$IdFOXX			=$rowFOXX["Id"];
																									$NombreFOXX		=$rowFOXX["Nombre"];
                                                                    					    		?>
                                                                    					    		<option value="<?=$IdFOXX?>"><?=$NombreFOXX?></option>
																									<?
																									}
																									}
																									?>
																								</select>
																						</div>
																						<div class="col-sm-12">
																							<label for="Archivo" class="control-label">Archivo</label><br>
																							<?if($TipoUsuario==1){?>
																							<div class="col-sm-6">
																							<input type="file" name="Archivo" class="form-control">
																							</div>
																							<?}?>
																							<?if($Archivo!=""){?>
																							<div class="col-sm-6">
                                                                    						<a href="Seg_proyecto/<?=$Archivo?>" download>(Descargar Archivo)</a>
																							</div>
																							<?}else{
																							?>
																							<p>No hay ningun archivo adjunto.</p>
																							<?	
																							}?>
																						</div>
																					</div>
                                                					            </div>
                                                					            <div class="modal-footer">
                                                					            	<?if($TipoUsuario==1){?>
                                                					            	<button type="submit" class="btn btn-info">Actualizar</button>
                                                					            	<?}?>
                                                					                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                					            </div>
                                                					        </form>
                                                					        </div><!-- /.modal-content -->
                                                					    </div><!-- /.modal-dialog -->
                                                					</div><!-- /.modal -->
                                                					<!-- END LARGE TEXT MODAL MARKUP -->
																	<?
																	}
																	?>



																</tbody>
															</table>
														</div>
													</div>
													<?}?>
													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
															<?if($TipoUsuario==1){?>
															<button type="button" class="btn btn-success" data-toggle="modal" data-target="#textModal" data-placement="top">Nuevo seguimiento</button>
															<?}?>
														</div>
													</div>
												</form>
                                                <form class="form-horizontal form-validate" role="form" method="post" action="seg-proyectos-3.php" enctype="multipart/form-data" novalidate>
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">Ingresar nuevo seguimiento</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            	<div class="row">
                                                            	<input type="hidden" name="IdR" value="<?=$IdUS?>">
																	<div class="col-sm-6">
																		<label for="Inicio" class="control-label">Inicio</label>
																		<div class='input-group date' id='demo-date-start'>
																			<input type="text" class="form-control" required name="Inicio" id="Inicio"/>
																			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																		</div>
                                                                	</div>
																	<div class="col-sm-6">
																		<label for="Fin" class="control-label">Fin</label>
																		<div class='input-group date' id='demo-date-end'>
																			<input type="text" class="form-control" required name="Fin" id="Fin"/>
																			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																		</div>
                                                                	</div>
																	<div class="col-sm-12">
																		<label for="Titulo" class="control-label">Titulo</label>
                                                    				  	    <input type="text" class="form-control" name="Titulo" onchange="javascript:this.value=this.value.toUpperCase();" required/>
																	</div>
																	<div class="col-sm-12">
																		<label for="Nota" class="control-label">Nota</label>
                                                    				  	    <textarea name="Nota" rows="3" required class="form-control" id="Nota" onchange="javascript:this.value=this.value.toUpperCase();"></textarea>
																	</div>
																	<div class="col-sm-12">
																		<label for="Archivo" class="control-label">Proveedor</label>
                                                    				  	     <select name="Proveedor" id="Proveedor" class="form-control" data-placeholder="Seleccione el Proveedor" required>
            
                                                                        		<option value="" selected>Seleccione el Proveedor</option>

																				<?
																				$queryREX		="SELECT* FROM Proyectoprov WHERE Idproyect = '$IdUS'";
                                                                        		$resultREX		=mysql_query($queryREX, $id);
                                                                        
                                                                        		while($rowREX	=mysql_fetch_array($resultREX))
                                                                        		{
                                                                        		$IdA 			=$rowREX["Proveedor"];
                                                                        		$queryFOX		="SELECT* FROM Proveedores WHERE Id = '$IdA'";
                                                                        		$resultFOX		=mysql_query($queryFOX, $id);
                                                                        
                                                                        		while($rowFOX	=mysql_fetch_array($resultFOX))
                                                                        		{
                                                                        		$IdFOX			=$rowFOX["Id"];
																				$NombreFOX		=$rowFOX["Nombre"];
                                                                        		?>
                                                                        		<option value="<?=$IdFOX?>"><?=$NombreFOX?></option>
																				<?
																				}
																				}
																				?>
																			</select>
																	</div>
																	<div class="col-sm-12">
																		<label for="Archivo" class="control-label">Archivo</label>
                                                    				  	    <input type="file" class="form-control" name="Archivo" onchange="javascript:this.value=this.value.toUpperCase();"/>
																	</div>
																</div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-success">Guardar</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
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
		<!-- Ajax para marca bueno y marcar malo-->
		<script type="text/javascript">
		function Correcto(Id){
		$.ajax({
  		url: "ajax-seg.php",    // Página destino
  		type: "GET",   // En caso de ser GET o POST
  		data: "Id="+Id+"&Estado="+1,  // Parámetros a enviar en este caso
  		success: function(html){
  		$("#Mal"+Id).css('display','none');
  		$("#Bien"+Id).css('display','none');
  		$("#Fila"+Id).addClass('success');
  		location.reload();
  		}
		});	
		};
		function Malo(Id){
		$.ajax({
  		url: "ajax-seg.php",    // Página destino
  		type: "GET",   // En caso de ser GET o POST
  		data: "Id="+Id+"&Estado="+2,  // Parámetros a enviar en este caso
  		success: function(html){	
  		$("#Mal"+Id).css('display','none');
  		$("#Bien"+Id).css('display','none');
  		$("#Fila"+Id).addClass('danger');
  		location.reload();
  		}
		});	
		};
		function Revivir(Id){
		$.ajax({
  		url: "ajax-seg.php",    // Página destino
  		type: "GET",   // En caso de ser GET o POST
  		data: "Id="+Id+"&Estado="+0,  // Parámetros a enviar en este caso
  		success: function(html){	
  		$("#Mal"+Id).css('display','');
  		$("#Bien"+Id).css('display','');
  		$("#Rev"+Id).css('display','none');
  		$("#Fila"+Id).removeClass('danger');
  		$("#Fila"+Id).removeClass('success');
  		location.reload();
  		}
		});	
		};
		</script>
		<!-- Fin función Ajax-->
	</body>
</html>
