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


					$Idfact				=$_REQUEST['Id']; 
				
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					$Idcliente			=$_REQUEST["Idcliente"];
					
					$queryTITMEN		="SELECT* FROM Clientes WHERE Id = '$Idcliente'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreclien		=$rowTITMEN["Nombre"];
					$Nitclien			=$rowTITMEN["Cedula"];
					$Ciudadclien		=$rowTITMEN["Ciudad"];
					$Dirclien			=$rowTITMEN["Dir"];
					}
					
					$queryTITMEN		="SELECT* FROM Prospectos where Id <> '$Idfact' order by Fechainicio ASC" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Fechafact			=$rowTITMEN["Fechainicio"];
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
					
					
					
					
					
					
					
					
					
					 $queryUSERS		="SELECT* FROM Prospectos where Id = '$Idfact' and Muestra = 0";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$Razon				=$rowUSERS["Razon"];
						$Nit				=$rowUSERS["Nit"];
						$Direccion			=$rowUSERS["Direccion"];
						$Ciudad				=$rowUSERS["Ciudad"];
						$Fechafact			=$rowUSERS["Fechainicio"];
						$Fechalim			=$rowUSERS["Fechalim"];
						$Descripcion		=$rowUSERS["Descripcion"];
						$Idobra 			=$rowUSERS["Idobra"];
						$Valor				=$rowUSERS["Valor"];
						$Total				=$rowUSERS["Total"];
						$Iva				=$rowUSERS["Iva"];
						$Retencion 			=$rowUSERS["Retencion"];
						$ReteICA 			=$rowUSERS["ReteICA"];
						$Deuda 				=$rowUSERS["ValorCobrado"];
						$Estado				=$rowUSERS["Estado"];
						$Usuario			=$rowUSERS["Usuario"];
						$Fecha				=$rowUSERS["Fecha"];
						$Estado				=$rowUSERS["Estado"];
						$FechaAnulacion		=$rowUSERS["FechaAnulacion"];
						$MotivoAnulacion	=$rowUSERS["MotivoAnulacion"];
						$UsuarioAnula 	 	=$rowUSERS["UsuarioAnula"];
						$Recurrente 		=$rowUSERS["Recurrente"];
						$Periodicidad 		=$rowUSERS["Periodicidad"];

						if ($Periodicidad==10) {
						$DiaPer="10";
						$NombrePer="10 DÍAS";
						}
						elseif ($Periodicidad==15) {
						$DiaPer="15";
						$NombrePer="15 DÍAS";
						}
						elseif ($Periodicidad==20) {
						$DiaPer="20";
						$NombrePer="20 DÍAS";
						}
						elseif ($Periodicidad==30) {
						$DiaPer="30";
						$NombrePer="1 MES";
						}
						elseif ($Periodicidad==60) {
						$DiaPer="60";
						$NombrePer="2 MESES";
						}
						elseif ($Periodicidad==90) {
						$DiaPer="90";
						$NombrePer="3 MESES";
						}
						elseif ($Periodicidad==180) {
						$DiaPer="180";
						$NombrePer="6 MESES";
						}
						else{
						$DiaPer="";
						$NombrePer="";
						}


						if($Estado == 1 || $Estado == 2)
						{
						$ponebloqueo	=	'disabled';
						}
						
						$queryQQ		="SELECT * FROM Retenciones WHERE Valor = '$Retencion'";
						$resultQQ		=mysql_query($queryQQ, $id);
						
					    while ($rowQQ   =mysql_fetch_array($resultQQ)) {
					    $NombreRetencion=$rowQQ["Nombre"];
					    }

						$querySAS		="SELECT * FROM Retenciones WHERE Valor = '$ReteICA'";
						$resultSAS		=mysql_query($querySAS, $id);
						
					    while ($rowSAS   =mysql_fetch_array($resultSAS)) {
					    $NombreReteICA	=$rowSAS["Nombre"];
					    }

						$queryPM		="SELECT * FROM Facturacionmov WHERE Idfact = '$Idfact'";
						$resultPM		=mysql_query($queryPM, $id);
						
						while ($rowPM	=mysql_fetch_array($resultPM)) {
						$Idobrax 		=$rowPM["Idobra"];
						}

						$queryWW		="SELECT * FROM Proyectos WHERE Id = '$Idobra'";
						$resultWW		=mysql_query($queryWW, $id);
						
					    while ($rowWW   =mysql_fetch_array($resultWW)) {
					    $NombreObra     =$rowWW["Nombre"];
					    }

					    $query11		="SELECT * FROM Usuarios WHERE Cedula = '$UsuarioAnula'";
						$result11		=mysql_query($query11, $id);
						
					    while ($row11   =mysql_fetch_array($result11)) {
					    $NombreUsuario  =$row11["Nombre"];
					    }
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
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Modificar</h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Modificar recibo de caja Nro. <?=$Idfact?></a></li>
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
												<form class="form-horizontal form-validate" role="form" method="post" id="form1" name="form1" action="act-prospecto-3.php" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" id="form1" name="form1" novalidate>
                                                        <?
														}
														?>
												
                                                
                                                
													<div class="row">
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Tipo" class="control-label">Cliente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                              	<input name="Id" id="Id" type="hidden" value="<?=$Idfact?>">
                                                              	<input name="Idcliente" id="Idcliente" type="hidden" value="<?=$Idcliente?>">
                                                              	<input name="Nombre" id="Nombre" type="hidden" value="<?=$Nombreclien?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione el Cliente" style="background-color:#CCC" <?=$ponebloqueo?>>
            
                                                                        <?
                                                                        if(!empty($Idcliente))
																		{
																		?>
                                                                  <option value="act-prospecto-2.php?Idcliente=<?=$Idcliente?>&Id=<?=$Idfact?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreclien?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                  <option value="act-prospecto-2.php?Id=<?=$Idfact?>" selected>Seleccione el Cliente</option>
                                                                        <?
																		}
																		
                                                                        $queryTIP		="SELECT* FROM Clientes where Muestra = 0 and Id <> '$Idcliente' order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                  <option value="act-prospecto-2.php?Idcliente=<?=$IdTIP?>&Id=<?=$Idfact?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTIP?></option>
																		<?
																		}
																		?>

                                                                </select>
																</div>
															</div>
														</div>
                                                    
<?
if(!empty($Idcliente))
{
?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Nit" class="control-label">Nit</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Nit" id="Nit" class="form-control" placeholder="Nit del Cliente" value="<?=$Nitclien?>" required readonly style="background-color: #CCC" <?=$ponebloqueo?>>
																</div>
															</div>
														</div>
                                                        
                                                     </div>
<?
}
?>
                                                     
                                                     <div class="row">   
                                                        
<?
if(!empty($Idcliente))
{
?>












                                                        
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Inicio" class="control-label">Fecha</label>
																</div>
                                                                
                                                                <div class="col-md-10">
                                                                
														<div class='input-group date' id='demo-date-start'>
															<input name="Fechafact" type="text" required class="form-control" id="Fechafact" value="<?=$Fechafact?>" <?=$ponebloqueo?>/>
<?
						if($Estado == 0)
						{
?>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
<?
						}
?>
														</div>
                                                                

                                                                </div>
                                                                
															</div>
														</div>
													
                                                
                                                    
                                                        </div>
                                                        
                                                        
                                                        
	

                                                        
													
													
                                                    
														
															<div class="form-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="Descripcion" class="control-label">Detalles</label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                                                                  <textarea name="Descripcion" rows="3" required class="form-control" id="Descripcion" placeholder="Detalles de la Factura" onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponebloqueo?>><?=$Descripcion?></textarea>
																	<br>
																</div>
															</div>

														
                                                        
<div class="row"> 
													
                        <div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                          

                                <table width="100%" border="1" class="btn-support3" style="font-size:10px; font-weight:bold; height:15px; margin-bottom:10px;" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%" height="33">&nbsp;CANT.</td>
                                    <td width="55%">&nbsp;DESCRIPCIÓN</td>
                                    <td width="10%">&nbsp;V/UNID.</td>
                                    <td width="10%" align="right">
<?
						if($Estado == 0)
						{
?>
                                    <a id="agregarCampo" href="#" style="border:0px;"><img src="../../assets/img/add.png" border= "0" style="margin-right:5px;"></a>
<?
						}
?>
                                    </td>
                                  </tr>
                                </table>
                          										</div>
                        </div> 

                                                     
                                                     
                                                     
                                                     
						<div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
																	<div id="contenedor">
<?
							$cont				=0;
							$queryPerz1			="SELECT* FROM Prospectosmov where Idfact = '$Idfact' order by Id";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$Cant			=$rowPerz1["Cant"];
							$Idobra			=$rowPerz1["Idobra"];
							$Obra			=$rowPerz1["Obra"];
							$Descripcion	=$rowPerz1["Descripcion"];
							$Neto			=$rowPerz1["Neto"];
							$Valor			=$rowPerz1["Valor"];
							
							
							$queryTITMEN		="SELECT COUNT(*) AS TOTAL FROM Obras WHERE Idcliente = '$Idcliente' and Id = '$Idobra'" ;
							$resultTITMEN		=mysql_query($queryTITMEN, $id);
							
							While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
							{
							$TOTALOBRA			=$rowTITMEN["TOTAL"];
							}
							
							if($TOTALOBRA == 0)
							{
							$Idobra			='';
							$Obra			='';	
							}
							
							
							$Neto			=number_format($Neto,0,'','.');
							$Valor			=number_format($Valor,0,'','.');
							
							$cont++;

?>                          



    <div class="added">
                                <table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%"><input type="text" name="cant<?=$cont?>" id="cant<?=$cont?>" placeholder="Cantidad" value="<?=$Cant?>" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required <?=$ponebloqueo?>/></td>
                                    <td width="55%"><input type="text" name="descri<?=$cont?>" id="descri<?=$cont?>" placeholder="Descripcion" value="<?=$Descripcion?>" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required <?=$ponebloqueo?>/></td>
                                    <td width="10%"><input type="text" name="vlr<?=$cont?>" id="vlr<?=$cont?>" required placeholder="V/Unid" value="<?=$Neto?>"  style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" <?=$ponebloqueo?>/></td>
                                    <td width="10%" align="right">
<?
						if($Estado == 0)
						{
?>
                                    <a href="#" class="borrar"><img src="../../assets/img/delete.png" border = "0" style="margin-right:5px;"></a>
<?
						}
?>
                                    </td>
                                  </tr>
                                </table>






    
        
        
    </div>
<?
							}
?>
    
</div>
																</div>
                          
                                
                      </div> 
                                                        
                                                        

                                                        
                                                         
<?if ($Estado==2) { ?>
													<br>
													<span>&nbsp;<br></span>
															<div class="col-sm-12">
															<div class="form-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="MotivoAnulacion" class="control-label">Motivo</label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                                                                  <textarea name="MotivoAnulacion" rows="3" required class="form-control" id="MotivoAnulacion" placeholder="MotivoAnulacion" onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponebloqueo?>> <?=$MotivoAnulacion?> 

FECHA ANULACIÓN: <?=$FechaAnulacion?>&nbsp;&nbsp;|&nbsp;&nbsp;USUARIO: <?=$NombreUsuario?></textarea>
																</div>
															</div>
														</div>
                                                    	
                                                    	<? } ?>
                                                        
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        


                                                        

                                                        
                                                        



													<div class="form-group">
														<div class="col-lg-1 col-md-2 col-sm-3">
															<label for="email" class="control-label"></label>
														</div>
														<div class="col-lg-11 col-md-10 col-sm-9">
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<br/><br/>
<?
						if($Estado == 0)
						{
?>
                                                            <button type="submit" id="enviar" class="btn btn-primary">Realizar Modificación</button> 
                                                           <!-- <button type="button" id="visualizar" class="btn btn-success" onClick="window.open('print-factura.php?Id=<?=$Idfact?>&Estado=<?=$Estado?>');">Visualizar</button>-->
<? 
						}/*
						
						if($Valor!=0){
?> 
                                                            <button type="button" data-toggle="modal" data-target="#textModala" class="btn btn-danger">Finalizar</button>
<?
						}
						elseif($Estado == 1)
						{
						
?>
															<button type="button" id="visualizar" class="btn btn-success" onClick="window.open('print-factura.php?Id=<?=$Idfact?>&Estado=<?=$Estado?>');">Ver Factura Finalizada</button> 
															<!-- <input name="Eliminar" type="button" class="btn btn-danger" value=" ANULAR "  style="width:100px;" data-toggle="modal" data-target="#textModal<?=$Idfact?>" data-placement="top"> -->
<?
						}
						elseif($Estado == 2)
						{
						
?>
															<button type="button" id="visualizar" class="btn btn-success" onClick="window.open('print-factura.php?Id=<?=$Idfact?>&Estado=<?=$Estado?>');">Ver Factura Anulada</button> 
<?
						}
						elseif($Estado == 4 || $Estado == 3)
						{
						
?>
															<button type="button" id="visualizar" class="btn btn-success" onClick="window.open('print-factura.php?Id=<?=$Idfact?>&Estado=<?=$Estado?>');">Ver Factura</button> 
<?
						}
						if($Valor!=0){
?> 
															<input name="Reutilizar" type="button" class="btn btn-support5" value="Reutilizar"  onClick="location.href='re-factura.php?Id=<?=$Idfact?>&Idcliente=<?=$Idcliente?>&Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'">
															<input name="Facturar" type="button" class="btn btn-support1" value="Facturar" onClick="location.href='facturar.php?Id=<?=$Idfact?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">          
<?
} */
?>                                              
															<input name="Volver" type="button" class="btn btn-default" value="Volver"  onClick="location.href='act-factura.php?Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'">
														
														</div>
													</div>
                                                    
                                                    
<?
														}
?>
                                                    
                                                    

												</form>
<?
}
?>
                                                
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModala" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">Factura Nro. <?=$Idfact?></h4>
                                                            </div>
                                                            <form action="fin-factura.php" method="post">
                                                            <div class="modal-body">
                                                            	<input type="hidden" name="Id" value="<?=$Idfact?>">
                                                                <p>Realmente desea finalizar esta factura?</p>
                                                                <label class="btn checkbox-inline btn-checkbox-default-inverse active">
																	<input name="Correos" type="checkbox" value="default-inverse2"> ¿Desea enviar correos electronicos?
																</label>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-success">Confirmar</button>
                                                            	</form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$Idfact?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">NRO. <?=$Idfact?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Realmente desea anular este prospecto?</p>
                                                             	<form action='eli-prospecto.php?Id=<?=$Idfact?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>' method="post">
																<div class="col-lg-11 col-md-10 col-sm-9">			
                                                                  <textarea name="MotivoAnulacion" rows="3" required class="form-control" id="MotivoAnulacion" placeholder="Motivo anulacion" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
																	<br>
																</div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-success">Confirmar</button>
                                                            	</form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                
                                                
<?if($Deuda=="xx"){?>                                              
<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Movimientos de la factura  <strong>NRO. <?=$Idfact?></strong></a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
										  <div class="box-body style-white">
												
                                                
                                                
                                                    

                          

                                <table width="100%" border="1" class="btn-support3" style="font-size:10px; font-weight:bold; height:15px; margin-bottom:10px;" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%" height="33">&nbsp;FECHA.</td>
                                    <td width="15%">&nbsp;MOVIMIENTO</td>
                                    <td width="35%">&nbsp;DESCRIPCIÓN</td>
                                    <td width="20%">&nbsp;NRO. FACTURA</td>
                                    <td width="10%">&nbsp;VALOR.</td>
                                    <td width="10%" align="right">&nbsp;</td>
                                  </tr>
                                </table>
                                
<?
					 /* $queryXX 		="SELECT * FROM Facturacionmov WHERE Idobra='$IdUS'";
					 $resultXX 		=mysql_query($queryXX,$id);
					 while ($rowXX	=mysql_fetch_array($resultXX)) {
					 
					 $Idfact 		=$rowXX["Idfact"]; */


					 $queryPAN		="SELECT * FROM Facturacion where Id = '$Idfact'";
					 $resultPAN		=mysql_query($queryPAN, $id);
													
					 while($rowPAN	=mysql_fetch_array($resultPAN))
					 {
						$Idcuenta		=$rowPAN["Id"];
						$Idss 			=$rowPAN["Idcuenta"];
						$FechaAbono		=$rowPAN["Fechafact"];
						$NumeroFactura	=$rowPAN["NumeroFactura"];
						$Tipo 			="INGRESO | NRO. ".$Idcuenta;
						$Observaciones 	=$rowPAN["Descripcion"];
						$ValorA 		=$rowPAN["Valor"];
						$Ingreso 		=$rowPAN["ValorCobrado"];

						$Ing 			=($ValorA-$Ingreso);

						$decimales 	= explode(".",$ValorA);
						$CuantosS	= $decimales[1];
						$CuantosDS	= strlen($CuantosS);
						
						if($CuantosDS == 1)
						{
						$ValorF				=$ValorA.'0';	
						}
						elseif($CuantosDS == 0)
						{
						$ValorF				=$ValorA.'00';	
						}
						elseif($CuantosDS == 2)
						{
						$ValorF				=$ValorA;	
						}

						

						
						
						
						$ValorA			=number_format($ValorA,0,'','.');
						$Ing			=number_format($Ing,0,'','.');
						$ValorP			=number_format($ValorP,0,'','.');
						
						if ($Ingreso!=0) {
						
						
						

?>
                                <table width="100%" class="btn-default" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> " >
                                  <tr>
                                    <td width="10%" height="33" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$FechaAbono?></td>
                                    <td width="15%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$Tipo?></td>
                                    <td width="35%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$Observaciones?></td>
                                    <td width="20%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=$NumeroFactura?></td>
                                    <td width="10%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;<?=number_format($Ingreso,0,'','.')?></td>
                                    <td width="10%" align="right"> 
                                    <a href="print-abonocobro.php?Idpago=<?=$Idcuenta?>&Id=<?=$Idfact?>" title="Imprimir factura" target="_blank" style="border:0px;"><button class="btn btn-xs btn-success"><i class="fa fa-share"></i></button></a>
                                    </td>
                                  </tr>
                                </table>                                                
                  										
<?
						}
					 }
					

					 $query00		="SELECT SUM(ValorCobrado) AS ING FROM Facturacion where Idcliente = '$Idcliente'";
					 $result00		=mysql_query($query00, $id);
													
					 while($row00	=mysql_fetch_array($result00))
					 {
						$INGRESOS		=$row00["ING"];
					 }

					 $queryN		="SELECT SUM(Valor) AS INGRESOS FROM CuentasPagar where Idobra = '$IdUS'";
					 $resultN		=mysql_query($queryN, $id);
													
					 while($rowN	=mysql_fetch_array($resultN))
					 {
						$Ingpagos		=$rowN["INGRESOS"];
					 }
					 
					 $queryQ		="SELECT SUM(ValorAbonado) AS EGRESOS FROM CuentasPagar where Idobra = '$IdUS'";
					 $resultQ		=mysql_query($queryQ, $id);
													
					 while($rowQ	=mysql_fetch_array($resultQ))
					 {
						$Gaspagos		=$rowQ["EGRESOS"];
					 }

					 $EgrePagar =($Ingpagos-$Gaspagos);

					 
					 $TOTALT			=$TOTALT+$INGRESOS;
					 $TOTALT			=$TOTALT-$EgrePagar;
?>					  		
<br/>
                                <table width="100%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> " >
                                  <tr>
                                    <td width="10%" height="33" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;</td>
                                    <td width="15%" align="right" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;</td>
                                    <td width="55%" align="right" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC;  <?=$stilos?> ">&nbsp;TOTAL &nbsp</td>
                                    <td width="10%" style="font-size:10px; height:20px; border: 1px solid #CCC; border-left:1px solid #CCC; border-right:1px solid #CCC; background-color:#D6EEC4">&nbsp;
                                      <?=number_format($TOTALT,0,'','.')?></td>
                                    <td width="10%" align="right"></td>
                                  </tr>
                               </table>                        
<!--
<br/><br/>

<?
//if($UtilidadO > $TOTALT)
//{
?>
												<div class="alert alert-danger">
													<a class="close" data-dismiss="alert" href="#">&times;</a>
													<h4 class="alert-heading">ATENCION!</h4>
													<p>
														Actualmente su proyecto no ofrece la ultilidad programada. La obra hoy tiene una utilidad de <strong>($<?=number_format($TOTALT,0,'','.')?>)</strong> de la programada por <strong>($<?=number_format($UtilidadO,0,'','.')?>)</strong>.<br/>
													</p>

												</div>
<?
//}
//elseif($UtilidadO <= $TOTALT)
//{
?>
                                                
                                                
												<div class="alert alert-success">
													<a class="close" data-dismiss="alert" href="#">&times;</a>
													<h4 class="alert-heading">ATENCION!</h4>
													<p>
														Actualmente su proyecto ofrece la ultilidad programada. La obra hoy tiene una utilidad de <strong>($<?=number_format($TOTALT,0,'','.')?>)</strong> de la programada por <strong>($<?=number_format($UtilidadO,0,'','.')?>)</strong>.<br/>
													</p>
												</div>
<?
// }
?>
<br/><br/><br/>  -->
                                                
                                                </div>
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div>
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
    var x = $("#contenedor div").length +1;
    var FieldCount = x-1; //para el seguimiento de los campos
	


    $(AddButton).click(function (e) 
	{
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;

            //agregar campo
            $(contenedor).append('<div><table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4;" cellpadding="0" cellspacing="0" height="20"><tr><td width="10%"><input type="text" name="cant'+ FieldCount +'" id="cant'+ FieldCount +'" placeholder="Cantidad" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td><td width="55%"><input type="text" name="descri'+ FieldCount +'" id="descri'+ FieldCount +'" placeholder="Descripcion" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/> </td><td width="10%"><input type="text" name="vlr'+ FieldCount +'" id="vlr'+ FieldCount +'" placeholder="V/Unid" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td><td width="10%" align="right"><a href="#" class="borrar"><img src="../../assets/img/delete.png" border = "0" style="margin-right:5px;"></a></td></tr></table></div>');

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
	
	


    $(enviar).click(function (e) 
	{
        if(  x == 0 ) 
		{
           alert("No hay movimientos cargados.");
		    return false;
        }
		else
		{
			 return true;
		}
       
    });
	
	
});
 
</script>

    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
