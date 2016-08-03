<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Recursos Humanos - Solicitud de Servicios</title>

	   <!-- Bootstrap core CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/bootstrap/dist/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">
	
	<!-- MetisMenu CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/metisMenu/dist/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

	<!-- Custom CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

    <!-- Validaciones CSS -->
    <link href<?php echo "'".base_url()?>res/front/css/validaciones.css<?php echo "'"?> rel="stylesheet">
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-45851020-1', '1000hz.github.io');
			  ga('send', 'pageview');

		</script>
	</head>
	<body>
		<?php include '/application/views/pages/menu.php';?>
		<div id="page-wrapper">
			<?php include '/application/views/pages/bl_fc_ss.php';?>

			<div id="#divMensajes">
                <script type="text/javascript">
                        function mostrarMensajes(errores){
                            for(i = 0; i < errores.length; i++){
                                $("#"+errores[i]).get(0).type = 'text';
                                $("#"+errores[i]).addClass("visible");
                            }
                        }
                </script>
            </div> 
		</div>
		<div id="confirmation" style="display: none;">
			<div class="modal-body">
				<p>Los datos han sido guardados en forma correcta.</p>
				<br/>
				<button type="button" id="btnAceptarInfoPrincipal">Aceptar</button>
			</div>
		</div>
		<div id="example" title="Informaci&oacute;n">
		     <div>
		        <p>La información ingresada se está procesando. Por favor aguarde unos instantes.</p>
		        <br/>
		    </div>
		</div>
			 <!-- jQuery -->
	<script src=<?php echo "'".base_url()?>res/front/css/bower_components/jquery/dist/jquery.min.js<?php echo "'"?>></script>
	
     <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/bootstrap/dist/js/bootstrap.min.js<?php echo "'"?>></script>
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/metisMenu/dist/metisMenu.min.js<?php echo "'"?>></script>
	
	<!-- Custom Theme JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/js/sb-admin-2.js<?php echo "'"?>></script>
	
	 <!-- Validator js  -->
	 <script src=<?php echo "'".base_url()?>res/front/css/js/validator.min.js<?php echo "'"?>></script> 
	 
	     
    <script src=<?php echo "'".base_url()?>res/front/css/js/application.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>res/front/css/js/bootstrap-modal.js<?php echo "'"?>></script>
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#divEspecificacionCliente').hide();
		 	$('#divEspecificacionPuesto').hide();
		 	$('#divHabilidadesEspecificacionPuesto').hide();
			$('#divTecnologiasEspecificacionPuesto').hide();
			$('#divCompetenciasEspecificacionPuesto').hide();
			$('#divDetalleCliente').hide();
		 	});
			$('#comboPuesto').change(function(){
				var dataString = $('#comboPuesto').val();
				if(dataString == 'otro'){
					$('#divEspecificacionPuesto input[type=text]').val('');
					$('#divHabilidadesEspecificacionPuesto input[type=textarea]').val('');
					$('#divTecnologiasEspecificacionPuesto input[type=textarea]').val('');
					$('#divEspecificacionPuesto').show();
					$('#divHabilidadesEspecificacionPuesto').show();
					$('#divTecnologiasEspecificacionPuesto').show();
					$('.checkboxHabilidadesRequeridas').remove();
					$('.checkboxHabilidadesDeseables').remove();
					$('.checkboxTecnologias').remove();
					$('#divCompetenciasEspecificacionPuesto').show();
					$('#divCompetencias').hide();
					$('#divHabilidadesRequeridas').hide();
					$('#divHabilidadesDeseables').hide();
					$('#divTecnologias').hide();
					
				}else{
					$('#divEspecificacionPuesto input[type=text]').val('');
					$('#divHabilidadesEspecificacionPuesto textarea').val('');
					$('#divTecnologiasEspecificacionPuesto textarea').val('');
					$('#divEspecificacionPuesto').hide();
					$('#divHabilidadesEspecificacionPuesto').hide();
					$('#divTecnologiasEspecificacionPuesto').hide();
					$('#divCompetenciasEspecificacionPuesto').hide();
					$('#divCompetencias').show();
					$('#divHabilidadesRequeridas').show();
					$('#divHabilidadesDeseables').show();
					$('#divTecnologias').show();
				}
			});

			//combo de cliente
			$('#comboContacto').change(function(){
				var dataString = $('#comboContacto').val();
				if(dataString != 'otro'){
					$('#divEspecificacionCliente').hide();
					$('#inputEspecificacionCliente').val('');
					$('.inputDetalleCliente').remove();
					$('#divDetalleCliente').show();
					//$('#divDetalleCliente').show();
					$.post("<?php echo base_url()?>ss/getClienteAsociado",{dataString},function(response){
						var data = eval(response);
						$.each(data,function(indice){
							clienteAsociado(data,indice);
						});
					},'json');
				}else{
					$('.inputDetalleCliente').val('');
					$('#divDetalleCliente').hide();
					$('#divEspecificacionCliente').show();
					$('#inputEspecificacionCliente').show();
				}
			});

		 	//combobox de puesto solicitado para habilidades requeridas
			$('#comboPuesto').change(function(){
				var dataString = $('#comboPuesto').val();
				//$('#valcomboPuesto').type = "hidden";
				if(dataString != 'otro'){
					$.post('<?php echo base_url()?>ss/getHabilidadesRequeridas',{dataString},function(response){
						var data = eval(response);
						$('.checkboxHabilidadesRequeridas').remove();	
						$.each(data,function(indice){
							habilidadesRequeridas(data,indice);
						});
						
					},'json'); 
					
				}
			});
			//combobox de puesto solicitado para habilidades deseables
			$('#comboPuesto').change(function(){
				var dataString = $('#comboPuesto').val();
				if(dataString != 'otro'){
					$.post('<?php echo base_url()?>ss/getHabilidadesDeseables',{dataString},function(response){
						var data = eval(response);
						$('.checkboxHabilidadesDeseables').remove();	
						$.each(data,function(indice){
							habilidadesDeseables(data,indice);	
						});
						
					},'json');
					
				}
					 
			});
			
			//combobox de puesto solicitado para tecnologias

			$('#comboPuesto').change(function(){
				var dataString = $('#comboPuesto').val();
				if(dataString != 'otro'){
					$.post('<?php echo base_url()?>ss/getTecnologias',{dataString},function(response){
						var data = eval(response);
						$('.checkboxTecnologias').remove();	
						$.each(data,function(indice){
							tecnologias(data,indice);	
						});
						
					},'json');
					
				}
					 
			});
			
			$('#btnAceptar').click(function(){
                	$('#example').dialog("close");
                    $('#limpiarInfoPrincipal').click();
                    $('#limpiarInfoRRHH').click();
                    $('#limpiarInfoIT').click();
	                });
	                $('#btnAceptarInfoPrincipal').click(function(){
	                   window.location.href = '<?php echo base_url()?>ss/paginaPrincipal'; 
	                });

	                $('#comboProvincia').change(function(){
						var dataString = $('#comboProvincia').val();
						$.post('<?php echo base_url()?>ss/getLocalidades',{dataString},function(response){
							if(response != "NoHayDatos"){
								var data = eval(response);
								$('#comboUbicacion').empty();
								$.each(data,function(indice){
									localidad(data,indice);
								});	
							}
						},'json');
					});
			var dataString = $('#comboProvincia').val();
			$.post('<?php echo base_url()?>ss/getLocalidades',{dataString},function(response){
				if(response != "NoHayDatos"){
						var data = eval(response);
						$('#comboUbicacion').empty();
						$.each(data,function(indice){
							localidad(data,indice);
						});	
				}
			},'json');
			
			
			//combobox de cliente seleccionado
			/*
			$('#cliente').change(function(){
				var dataString = $('#cliente').val();
				if(dataString != 'otro'){
					$('#divEspecificacionCliente').hide();
					$('#divEspecificacionCliente input[type=text]').val('');
					$('#valdivEspecificacionCliente').hide();
				}else{
					$('#divEspecificacionCliente').show();
					//$('#valinputEspecificacionCliente').hide();
				}
					 
			});
			*/


                $('#aceptarInfoPrincipal').click(function(){
                	//var validacion = validar();
                	//if(validacion == true){
                		//vector de beneficios
                		var beneficios = [];
                		var index = 0;
                		$("input[name='beneficio']").each(function(indice){
                			if($("#beneficio"+indice).prop("checked")){
                				beneficios.push($('#beneficio'+indice).val());
                				index = index + 1;
                			}	
                		});
                		//vector de competencias
                		var competencias = [];
                		index = 0;
                		$("input[name='competencia']").each(function(indice){
                			if($('#competencia'+indice).prop("checked")){
                				competencias.push($('#competencia'+indice).val());
                				index = index + 1;
                			}	
                		});
                		//vector de habilidades requeridas
                		var habilidadesRequeridas = [];
                		$("input[name='habilidadRequerida']").each(function(indice){
                			if($("#habilidadRequerida"+indice).prop("checked")){
                				habilidadesRequeridas.push($('#habilidadRequerida'+indice).val());
                			}	
                		});
                		
                		//vector de habilidades deseables
                		var habilidadesDeseables = [];
                		$("input[name='habilidadDeseable']").each(function(indice){
                			var indiceId = indice;
                			if($('#habilidadDeseable'+indice).prop("checked")){
                				habilidadesDeseables.push($('#habilidadDeseable'+indice).val());
                			}	
                		});
                		//vector de tecnologias
						var tecnologias = [];
                		$("input[name='tecnologia']").each(function(indice){
                			var indiceId = indice;
                			if($('#tecnologia'+indice).prop("checked")){
                				tecnologias.push($('#tecnologia'+indice).val());
                			}	
                		});
                		
                		var dataString = $('#form-datosInfoPrincipal').serialize();
	                    //almecenamiento de las habilidades seleccionadas
	                    var idPuestoSeleccionado = $('#comboPuesto').val();
	                    if(idPuestoSeleccionado != 'otro'){
	                    	habilidadesRequeridas.push(idPuestoSeleccionado);
		                    habilidadesDeseables.push(idPuestoSeleccionado);
		                    tecnologias.push(idPuestoSeleccionado);
		                    competencias.push(idPuestoSeleccionado);
	                    }
	                    var comboContacto = $('#comboContacto').val();
	                    if(comboContacto != 'otro'){
	                    	var idClienteSeleccionado = $('#idDetalleCliente').val();
	                    	beneficios.push(idClienteSeleccionado);
	                    }
	                    	
	                    index = 0;
	                    var vacantes = $('#comboVacantes').val();
	                    //$('#example').fadeIn(5000,"linear",function(){
	                    		
	                    	//Generación de tantas solicitudes de servicio como cantidad de vacantes hayan seleccionado
	                    	//for(index; index < vacantes; index++){}
			                    //almacenamiento de los campos de combo y texto.
								$.post('<?php echo base_url()?>ss/guardarInfoPrincipal',{dataString},function(response){
									alert(response);	                        
									if(!isNaN(response)){
										beneficios.push(response); 
										//almacenamiento de los checkbox de beneficios
										$.post('<?php echo base_url()?>ss/guardarBeneficios',{beneficios},function(responseBeneficios){
											if(!isNaN(responseBeneficios)){
												competencias.push(responseBeneficios);
												$.post('<?php echo base_url()?>ss/guardarCompetencias',{competencias},function(responseCompetencias){
													if(!isNaN(responseCompetencias)){
														habilidadesRequeridas.push(responseCompetencias);
														$.post('<?php echo base_url()?>ss/guardarHabilidadesRequeridas',{habilidadesRequeridas},function(responseHabilidadesRequeridas){
															if(!isNaN(responseHabilidadesRequeridas)){
																habilidadesDeseables.push(responseHabilidadesRequeridas);
																$.post('<?php echo base_url()?>ss/guardarHabilidadesDeseables',{habilidadesDeseables},function(responseHabilidadesDeseables){
																	if(!isNaN(responseHabilidadesDeseables)){
																		tecnologias.push(responseHabilidadesDeseables);
																		$.post('<?php echo base_url()?>ss/guardarTecnologias',{tecnologias},function(responseTecnologias){
																			//Redirecccionamiento a la pantalla con mensaje de exito
																			window.location.href = <?php echo "'".base_url()?>ss/mensajeExitoSS<?php echo "'"?>;
																			//modal();
																		},'json');
																	}		                        									
																},'json');
															}						
														},'json')			                        						
													}
												},'json');				                        			 
											}
										},'json');         
									}
								},'json');
	                    //});  
                	//}
                	
                /*
				function validar(){
	                    var selects = ['tipoBusqueda','comboPuesto','comboEstudio','representanteComercial','cliente','comboVacantes','sueldoPretendido'];
	                    var cadenas = ['inputEspecificacionCliente'];
	                    var errores = [];
	                    //selects
	                    for(i = 0; i < selects.length; i++){
	                        $('#val'+selects[i]).get(0).type = 'hidden';
	                        if($("#"+selects[i]).val() == ''){
	                            errores.push($("#val"+selects[i]).attr('id'));
	                        }
	                    }
	                    if($('#divEspecificacionCliente').is(':visible')){
	                    	for(i = 0; i < cadenas.length; i++){
		                        $('#val'+cadenas[i]).get(0).type = 'hidden';
		                        if($("#"+cadenas[i]).val() == ''){
		                            errores.push($("#val"+cadenas[i]).attr('id'));
		                        }
	                    	}
	                    }
	                    if(errores.length != 0){
	                        mostrarMensajes(errores);
	                        return false;
	                    }else{
	                        return true;
	                    }
	            }
				*/
	            function modal(){
	            	$('#confirmation').dialog({
						autoOpen: false, 
						modal: true,
						height: 200,
						width: 350,
						my: "center center",
							//buttons: {
							// 	 OK: function() {$(this).dialog("close");}
							//},
					});
					$( "#confirmation" ).dialog( "open" );
	            }
			});
	
	</script>
	</body>
	
</html>