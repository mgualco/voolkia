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
			<?php include '/application/views/pages/bl_fc_ss_visualizacion.php';?>
		</div>
		<div id="example" style="display: none;" title="Informaci&oacute;n">
		     <div class="modal-body">
		        <p>Los datos han sido guardados en forma exitosa.</p>
		        <br/>
		        <button type="button" id="btnAceptarInfoPrincipal">Aceptar</button>
		    </div>
		   
		</div>
		<div id="noActualizacion" style="display: none;" title="Informaci&oacute;n">
		     <div class="modal-body">
		        <p>No se ha efectuado la actualización de alg&uacute;n campo de la solicitud.</p>
		        <br/>
		        <button type="button" id="btnNoActualizacion">Aceptar</button>
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
	<script type="text/javascript">
		 $(document).ready(function(){
                $('#aceptarInfoPrincipal').click(function(){
                    var dataString = $('#form-datosInfoPrincipal').serialize();
                    $.post('../ss/guardarInfoPrincipal',{dataString},function(response){
                        if(response == "transaccionCompleta"){
                            $('#example').dialog({
                            	autoOpen: false, 
				               	modal: true,
				               	//buttons: {
				                // 	 OK: function() {$(this).dialog("close");}
				               	//},
                            });
                            $( "#example" ).dialog( "open" );
                        }else{
                        	$('#noActualizacion').dialog({
                            	autoOpen: false, 
				               	modal: true,
                            });
                            $( "#noActualizacion" ).dialog( "open" );
                        }
                    },'json');  
                });
                $('#divMotivoRechazo').hide();
                $('#btnMotivoRechazo').click(function(){
                	$('#divMotivoRechazo').show();
                });
                $('#btnRechazar').click(function(){
			 	var dataString = $('#form-datosInfoPrincipal').serialize();
			 		$.post('../ss/rechazarSS',{dataString},function(response){
			 			if(response == true){
			 				window.location.href = <?php echo "'".base_url()?>ss/mensajeRechazoSS<?php echo "'"?>;
			 			}
			 		},'json');	
				});
                $('#aceptarInfoRRHH').click(function(){
                    var dataString = $('#form-datosInfoAdicional').serialize();
                    $.post('../ss/guardarInfoAdicional',{dataString},function(response){
                        if(response == "transaccionCompleta"){
                            $('#example').dialog({
                            	autoOpen: false, 
				               	modal: true,
                            });
                            $( "#example" ).dialog( "open" );
                        }else{
                        	$('#noActualizacion').dialog({
                            	autoOpen: false, 
				               	modal: true,
                            });
                            $( "#noActualizacion" ).dialog( "open" );
                        }
                    },'json');  
                });
                $('#btnNoActualizacion').click(function(){
                	window.location.href = '../../ss/paginaPrincipal';
                });
                $('#btnAceptarInfoPrincipal').click(function(){
                	window.location.href = '../../ss/paginaPrincipal';
                });
                $('#btnAceptar').click(function(){
                	$('#example').dialog("close");
                    $('#limpiarInfoPrincipal').click();
                    $('#limpiarInfoRRHH').click();
                    $('#limpiarInfoIT').click();
                });
                
                
            });
	</script>
	</body>
	
</html>