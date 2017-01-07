			<!-- BEGIN NAVBAR -->
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="btn btn-transparent btn-equal btn-menu" href="javascript:void(0);"><i class="fa fa-bars fa-lg"></i></a>
				    <div class="navbar-brand">
						<a class="main-brand" href="zona.php">
							<h3 class="text-light text-white"><span><strong><?=$NombreEmpresa?></strong> </span></h3>
						</a>
					</div><!--end .navbar-brand -->
					<a class="btn btn-transparent btn-equal navbar-toggle" data-toggle="collapse" data-target="#header-navbar-collapse"><i class="fa fa-wrench fa-lg"></i></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="header-navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="zona.php"><i class="fa fa-home fa-lg"></i></a></li>
					</ul><!--end .nav -->
					<ul class="nav navbar-nav navbar-right">
						<?
						$queryRRR		="SELECT COUNT(*) AS TOTAL FROM Notificaciones WHERE Muestra = 0" ;
						$resultRRR		=mysql_query($queryRRR, $id);
								
						while($rowRRR	=mysql_fetch_array($resultRRR))
						{
						$TOTAL 			=$rowRRR["TOTAL"];
						}
						?>
					  <li><span class="navbar-devider"></span></li>
						<li class="dropdown">
							<a href="javascript:void(0);" id="Campana" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-bell"></i><sup class="badge badge-support2" id="Toting"><?if($TOTAL!=0){echo($TOTAL);}?></sup></a>
						<?if ($TOTAL>0) {?>
							<ul id="Listas" class="dropdown-menu animation-zoom" id="Noti">
								<li class="dropdown-header">Notificaciones de hoy</li>
								<?
								$query000		="SELECT * FROM Notificaciones WHERE Muestra = 0" ;
								$result000		=mysql_query($query000, $id);
								
								while($row000	=mysql_fetch_array($result000))
								{
								$IdNoti 		=$row000["Id"];
								$Texto	  		=$row000["Mensaje"];
								$Noti++;
								?>
								<li id="ContenedorV<?=$Noti?>">
								<a class="alert alert-info" style="cursor:pointer;" onclick="Leer(<?=$IdNoti?>,<?=$Noti?>);">
								<small><?=$Texto?></small><br/>
								</a>
								</li>
								<? } ?>
								<li class="dropdown-header">Opciones</li>
								<li><a style="cursor:pointer;" onclick="cargar();">Marcar como leidas <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							</ul><!--end .dropdown-menu -->
						<?}else{?>
						<ul class="dropdown-menu animation-zoom">
								<li class="dropdown-header">No tiene notificaciones pendientes.</li>
						</ul>								
						<?}?>
						</li><!--end .dropdown --> 

					  <li><span class="navbar-devider"></span></li>
						<li class="dropdown">
							<a href="javascript:void(0);" class="navbar-profile dropdown-toggle text-bold" data-toggle="dropdown"><?=$_SESSION['NombreR']?><i class="fa fa-fw fa-angle-down"></i></a>
							<ul class="dropdown-menu animation-slide">
                           	  <li class="divider"></li>
								<li><a href="perfil.php?Idmenu=2&Idsubmenu=1">Mi Cuenta</a></li>
								<li class="divider"></li>
								<li><a href="../../html/pages/salir.php"><i class="fa fa-fw fa-power-off text-danger"></i> Cerrar Sesion</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .nav -->
				</div><!--end #header-navbar-collapse -->
			</nav>
			<!-- END NAVBAR -->
			<script type="text/javascript">
			function Leer(Id,Cont){
			$.ajax({
  			url: "leido.php",    
  			type: "GET",   
  			data: "Id="+Id,  
  			success: function(html){
  			$("#ContenedorV"+Cont).empty();
  			$("#ContenedorV"+Cont).append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Leido!</strong></div>").fadeIn(1000);
  			$("#ContenedorV"+Cont).delay(2500);
  			$("#ContenedorV"+Cont).fadeOut(2500);
  			$("#Toting").html(html);
  			if (html=="") {
  			$("#Listas").empty();
  			$("#Listas").html("<li class='dropdown-header'>No tiene notificaciones pendientes.</li>");
  			};
  			$("#Campana").click();
  			}
			});	
			};

			function cargar(){
			var Id=1;
				$.ajax({
  					url: "marcar-leidas.php",
  					data: "Id="+Id,
  					type: "get",
  					success: function(data) {
  						$("#Listas").empty();
  						$("#Toting").html("");
  						$("#Listas").html("<li class='dropdown-header'>No tiene notificaciones pendientes.</li>");
  						$("#Campana").click();
  					}
  			});
			
			};
			</script>
