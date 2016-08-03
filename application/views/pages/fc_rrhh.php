<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="RRHH">
    <meta name="author" content="Maira Tossio">

    <title>RRHH-seleccion de staff</title>

       <!-- Bootstrap core CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/bootstrap/dist/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/metisMenu/dist/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">
    <!-- Validaciones CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/validaciones.css<?php echo "'"?> rel="stylesheet">
    
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

  <!-- Dropdowns
  ================================================== -->
<div id="wrapper">
    <?php include 'menu.php';?>
   <div id="page-wrapper">
   <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
    <div class="form-group panel-body">
      <form data-toggle="validator" role="form" method="post" id="form-datos">
			<div class="col-lg-6">
			   <div class="form-group has-error has-feedback ">
                    <label>Nombres</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="ingrese el Nombre" required> 
					<span class="glyphicon glyphicon-remove form-control-feedback "></span>
                    <!--<input type="hidden" id="valnombre" placeholder="Este campo debe estar completo" readonly>-->
                </div>
				<div class="form-group has-error has-feedback ">
				<label>Apellidos</label>
				   <input class="form-control" id="apellido" name="apellido" type="text" placeholder="ingrese el Apellido" required> 
				   <span class="glyphicon glyphicon-remove form-control-feedback "></span>
				    <!--<input type="hidden" id="valapellido" placeholder="Este campo debe estar completo" readonly>-->
                </div>
				 <div class="form-group has-error has-feedback">
                    <label>Fecha de Nacimiento</label>
					<input class="form-control" type='date' id="fechaNacimiento" name="fechaNacimiento" placeholder="ingrese la fecha de Nacimiento"> 
					<span class="glyphicon glyphicon-remove form-control-feedback "></span>
				    <!--<input type="hidden" id="valfechaNacimiento" placeholder="Debe registrar su fecha de nacimiento" readonly>-->
                </div> 
				<div class="form-group has-error has-feedback ">
					<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
					<label>Estado civil</label>
					<select class="form-control" id="estadoCivil" name="estadoCivil" required>
						<option value="">Seleccione</option>
						<option value="Casado">Casado/a</option>
						<option value="Soltero">Soltero/a</option>
						<option value="Concubino/a">Concubino/a</option>
					</select>
				    <!--<input type="hidden" class="" id="valestadoCivil" placeholder="Este campo debe estar completo" readonly>-->
                </div>
                <div class="form-group has-error has-feedback">
							<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                            <label>Nivel de estudio</label>
                            <select class="form-control" id="nivelEstudio" name="nivelEstudio" id="comboEstudio">
                                <option value="">Seleccione</option>
                                <option value="Secundario Completo">Secundario Completo</option>
                                <option value="Terciario en curso">Terciario en curso</option>
                                <option value="Terciario completo">Terciario completo</option>
                                <option value="Universitario en curso">Universitario en curso</option>
                                <option value="Universitario completo">Universitario completo</option>
                                <option value="Posgrado">Posgrado</option>
                            </select>
							<!--<input type="hidden" class="" id="valnivelEstudio" placeholder="Debe seleccionar un nivel de estudios" readonly>-->
                </div>
               
                <div class="col-lg-6">
                    <div class="form-group has-error has-feedback">
						<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                        <label>Provincia</label>
                        <select class="form-control" id="provincia" name="idProvincia" required>
                            <option value="">Seleccione una provincia</option>
                                {provincias}
                                    <option value="{id}">{nombre}</option>
                                {/provincias}
                        </select>
                    <input type="hidden" id="valprovincia" placeholder="Debe seleccionar una provincia" readonly>
                    </div>
                </div>
                
				<div class="col-lg-6">
					<div class="form-group has-error has-feedback">
						<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                        <label>Localidad</label>
                        <select class="form-control" id="localidad" name="idLocalidad" required>
                                <script type="text/javascript">
                                    function localidad(data,indice){
                                        $('#localidad').append("<option value='"+data[indice].id+"'>"+data[indice].nombre+"</option>");
                                    }
                                </script>
                        </select>
                    <input type="hidden" class="" id="vallocalidad" placeholder="Debe seleccionar una localidad" readonly>
                    </div>
				</div>
				 <br/>
				<div class="col-lg-6 form-group has-error has-feedback">
 					<span class="glyphicon glyphicon-remove  form-control-feedback"></span>                 
					<label>Direcci&oacute;n</label>
					<input class="form-control" type="text" id="calle" name="calle" placeholder="ingrese dirección" required> 		
				    <!--<input type="hidden" class="" id="valcalle" placeholder="Este campo debe estar completo" readonly>-->
                </div>
                <br/>
				<div class="col-lg-2 form-group has-error has-feedback">
					<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
					<label>Numero</label>
				    <input class="form-control" type="text" id="nro" name="nro" placeholder="Número" required>	
                    <!--<input type="hidden" id="valnro" placeholder="Este campo debe estar completo" readonly>-->
                </div>
                 <br/>
				<div class="col-lg-2">
					<label>Dpto</label>
				   <input class="form-control" type="text" name="dpto" placeholder="Dpto"> 
				</div>
                <br/>  
				<div class="col-lg-2">
					<label>Piso</label>
				   <input class="form-control" type="text" name="piso" placeholder="Piso"> 
				</div> 
                <br/>
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
			<div class="col-lg-6" >
				<div class="form-group has-error has-feedback">
					<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
					<label>Area</label>
					<select class="form-control" id="area" name="area" required>
                            <option value="">Seleccione un area</option>       
                                {areas}
                                <option value="{id}">{nombre}</option>
                                {/areas}
                    </select>
                    <!--<input type="hidden" class="" id="valarea" placeholder="Debe seleccionar un area" readonly>-->
				</div>          
				<div class="form-group ">
				<label>Tel&eacute;fonos</label>
				<div class="form-group ">
					<div class="col-lg-6  form-group  has-error has-feedback">
							<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
							<label>Tipo</label>
							<select class="form-control" id="tipoContacto" name="tipoContacto" required>
								<option value="">Seleccione</option>
								<option value="Laboral">Laboral</option>
								<option value="Celular">Celular</option>
							</select>
                            <!--<input type="hidden" class="" id="valtipoContacto" placeholder="Debe selecccionar una opci&oacute;n" readonly>-->
                    </div>
				    
					<div class="col-lg-6 form-group has-error has-feedback">
						
						<label>N&uacute;mero</label>
						
						<input class="form-control" type="tel" id="numeroTelefono" name="numeroTelefono"  placeholder="Numero de Teléfono" required > 
						<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
					    <!--<input type="hidden" class="" id="valnumeroTelefono" placeholder="Debe completar este campo" readonly>-->
                    </div>
					<!--<input type="hidden" class="" id="valnumero" placeholder="Este campo debe estar completo" readonly>-->
					<div class="col-lg-6  col-md-offset-6 ">
						<label  for="inputInterno" class="Interno">Interno</label>
						<input class="form-control" type="tel" id="interno" name="interno"  placeholder="interno" > 
					</div>
               </div>
               </div>
			 <div class="form-group ">
			 <br>
			 <br>
			 <br>
			 <br>
			 </div>
				<div class="form-group has-error has-feedback">
					<label>Email</label>
					<input class="form-control" type="email" id="email" name="email" placeholder="ingrese mail del contacto" required> 
					<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
				    <!--<input type="hidden" class="" id="valemail" placeholder="Complete este campo correctamente" readonly>-->
                </div>
				
                <!-- fecha de alta del personal -->
                <div class="form-group has-error has-feedback">
                    <label>Ingrese la fecha de alta del empleado</label>
                        <input type='date' class="form-control" name="fechaAlta" required>
						<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                </div>
                <!-- fecha de baja del personal -->
                <div class="form-group">
                    <label>Ingrese la fecha de baja del empleado</label>
                        <input type='date' class="form-control" name="fechaBaja">
						
                </div>
				<div class="form-group">
					<label for="inputNota" class="control-label">Notas</label>
					<textarea class="form-control" name="notas" rows="3"></textarea>
				</div>
			</div>
		 <span style="color:#A60629"><label>Los campos resaltados son obligatorios</label></span>
        <div class="form-group col-md-offset-9">
		   <button type="button" class="btn btn-default" id="btnAceptar">Aceptar</button> 
		   <button type="reset" class="btn btn-default " id="limpiar">Limpiar</button>
        </div>
      </form>
    
    </div> <!-- cierra formulario de carga-->

  </div><!--cierrra -->
  </div><!--cierrra -->
	
	<!--================================================== -->
	    <div id="example" style="display: none;" title="Informaci&oacute;n">
             <div class="modal-body">
                <p>Los datos han sido guardados en forma exitosa.</p>
                <br/>
                <button type="button" id="btnAceptarInfoPrincipal">Aceptar</button>
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
    <!-- Validation -->
    <script src=<?php echo "'".base_url()?>res/front/js/jquery.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>res/front/js/jquery.validate.min.js<?php echo "'"?>></script>
    <script type="text/javascript">

            $(document).ready(function(){
                $('#provincia').change(function(){
                    var dataString = $('#provincia').val();
                    $.post('../ss/getLocalidades',{dataString},function(response){
                        if(response != "NoHayDatos"){
                                var data = eval(response);
                                $('#localidad').empty();
                                $.each(data,function(indice){
                                    localidad(data,indice);
                                }); 
                        }
                    },'json');
                });  
                $('#example').dialog({
                  autoOpen: false
                });
                $('#btnAceptar').click(function(){
                    var validacion = validar();
                    if(validacion == true){
                        var dataString = $('#form-datos').serialize();
                        $.post('../fc_rrhh/guardarEmpleado',{dataString},function(response){
                            if(response){
                                $('#example').dialog('open');
                            }
                        },'json'); 
                    }
                    
                });
                $('#provincia').change(function(){
                    $('#valprovincia').prop({
                        disabled: true
                    });
                });
                $('#btnAceptarInfoPrincipal').click(function(){
                    $('#limpiar').click();
                    window.location.href = '../../ss/paginaPrincipal';
                });
                function validar(){
                    var selects = ['estadoCivil','nivelEstudio','provincia','localidad','area','tipoContacto'];
                    var cadenas = ['nombre','apellido','calle'];
                    var fechas = ['fechaNacimiento'];
                    var numeros = ['numeroTelefono'];
                    var correos = ['email'];
                    var errores = [];
                    for(i = 0; i < selects.length; i++){
                        $('#val'+selects[i]).get(0).type = 'hidden';
                        if($("#"+selects[i]).val() == ''){
                            errores.push($("#val"+selects[i]).attr('id'));
                        }
                    }
                    //cadenas de texto: funciona correctamente con la expresion regular
                    for(i = 0; i < cadenas.length; i++){
                        $('#val'+cadenas[i]).get(0).type = 'hidden';
                        var regCadena = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.\s]+$/;
                        if(regCadena.test($("#"+cadenas[i]).val()) == false){
                            errores.push($("#val"+cadenas[i]).attr('id'));
                        }
                    }
                    //fechas: funciona
                    for(i = 0; i < fechas.length; i++){
                        $('#val'+fechas[i]).get(0).type = 'hidden';
                        if($("#"+fechas[i]).val() == ''){
                            errores.push($("#val"+fechas[i]).attr('id'));
                        }
                    }
                    //numeros: funciona corretamente con la expresion regular
                    for(i = 0; i < numeros.length; i++){
                        $('#val'+numeros[i]).get(0).type = 'hidden';
                        var regNumeros = /^[0-9]+$/; 
                        if(regNumeros.test($("#"+numeros[i]).val()) == false){
                            errores.push($("#val"+numeros[i]).attr('id'));
                        }
                    }
                    //correos
                    for(i = 0; i < correos.length; i++){
                        $('#val'+correos[i]).get(0).type = 'hidden';
                        var regCorreos = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}[.][a-zA-Z]{2,4}$/; 
                        if(regCorreos.test($("#"+correos[i]).val()) == false){
                            errores.push($("#val"+correos[i]).attr('id'));
                        }
                    }

                    if(errores.length != 0){
                        mostrarMensajes(errores);
                        return false;
                    }else{
                        return true;
                    }
                }
            });

        </script>
</body>
</htlm>