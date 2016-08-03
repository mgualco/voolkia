<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
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
    <!-- Bootstrap Core CSS -->
    

</head>

<body>

    <div id="wrapper">

        <?php include 'menu.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Carga de Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form data-toggle="validator" role="form" method="post" id="form-datos">
                                            <div class="form-group has-error has-feedback ">
                                                <label>Nombre o Razon social</label>
                                                <input class="form-control " type="text" id="razonSocial" name="razonSocial" placeholder="ingrese el Nombre o Razon social del cliente" required> 
                                                <!--<input type="hidden" id="valrazonSocial" placeholder="Este campo debe estar completo" readonly>-->
												<span class="glyphicon glyphicon-remove form-control-feedback "></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Pagìna de la Empresa</label>
                                               <input class="form-control" name="paginaWeb" placeholder="http://" type="url"> 
                                            </div>
                                            <div class="form-group">
                                                <label>Email de contacto</label>
                                               <input class="form-control" name="email" placeholder="Ingrese una direccion de correo de contacto" type="email"> 
                                            </div>
                                           
                                            <label>Tel&eacute;fonos</label>
                                            <div class="form-group">
                                                <div class="col-lg-6 form-group">
                                                        <label for="inputTipo" class="control-label">Tipo</label>
                                                        <select class="form-control" name="tipoContacto">
                                                            <option value="">Seleccione</option>
                                                            <option value="laboral">Laboral</option>
                                                            <option value="celular">Celular</option>
                                                        </select>
                                                        <input type="hidden" id="valtipoTelefono" placeholder="Debe seleccionar una opci&oacute;n" readonly>
                                                </div>
                                            
                                                <div class="col-lg-6 form-group">
                                                    <label  for="inputNumero" class="control-label">N&uacute;mero</label>
                                                    <input class="form-control" type="tel" name="numeroTelefono"  placeholder="Numero de Teléfono" > 
                                                    <input type="hidden" id="valnumero" placeholder="Debe ingresar un n&uacute;mero" readonly>
                                                </div>
                                                
                                                <div class="col-lg-6  col-md-offset-6 ">
                                                    <label  for="inputInterno" class="Interno">Interno</label>
                                                    <input class="form-control" type="tel" name="interno"  placeholder="interno" > 
                                                </div>
                                            </div>
                                           <br/>
                                            <div class="col-lg-6 form-group">
                                                <label>Calle</label>
                                                <input class="form-control" type="text" name="calle" placeholder="ingrese dirección" > 
                                            </div>
                                            <div class="col-lg-2 form-group">
                                                <label>Numero</label>
                                               <input class="form-control" type="text" name="nro" placeholder="Número" > 
                                            </div>  
                                            <div class="col-lg-2">
                                                <label>Dpto</label>
                                               <input class="form-control" type="text" name="dpto" placeholder="Dpto"> 
                                            </div>  
                                            <div class="col-lg-2">
                                                <label>Piso</label>
                                               <input class="form-control" type="text" name="piso" placeholder="Piso"> 
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group has-error  ">
                                                    <label class="has-feedback">Provincia</label>
                                                    <select class="form-control" id="comboProvincia" name="provincia">
                                                        <option value="">Seleccione una provincia</option>
                                                            {provincias}
                                                                <option value="{id}">{nombre}</option>
                                                            {/provincias}
                                                    </select>
                                                    <!--<input type="hidden" id="valcomboProvincia" placeholder="Debe seleccionar una opci&oacute;n" readonly>-->
													<span class="glyphicon glyphicon-remove form-control-feedback "></span>
                                                </div>
                                            </div>    
                                            <div class="col-lg-6">
                                               <div class="form-group">
                                                    <label>Localidad</label>
                                                    <select class="form-control" id="comboLocalidad" name="localidad">
                                                        <script type="text/javascript">
                                                            function localidad(data,indice){
                                                                $('#comboLocalidad').append("<option value="+data[indice].id+">"+data[indice].nombre+"</option>");
                                                            }
                                                        </script>
                                                    </select>
                                                </div>
                                            </div>
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
                                <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
 
                                          <div class="form-group">
                                            <label>CUIT</label>
                                                <input class="form-control" name="cuit" placeholder="CUIT" type="text">
                                            </div>
                                            <div class="form-group" >
                                                <label>Contacto de referencia</label>
                                               <input class="form-control" type="text" name="nombreContactoReferencia" placeholder="ingrese el Nombre contacto de referencia"> 
                                            </div>
                                         <div class="form-group">
                                                <label>Email del contacto de referencia</label>
                                               <input class="form-control" type="email" name="emailContactoReferencia" placeholder="ingrese el mail del contacto"> 
                                            </div>
                                            <label>Tel&eacute;fonos del contacto de referencia</label>
                                                <div class="form-group">
                                                    <div class="col-lg-6 form-group">
                                                            <label for="inputTipo" class="control-label">Tipo</label>
                                                            <select class="form-control" name="tipoContactoReferencia">
                                                                <option></option>
                                                                <option>Laboral </option>
                                                                <option>Celular</option>
                                                            </select>
                                                    </div>
                                                
                                                    <div class="col-lg-6 form-group">
                                                        <label  for="inputNumero" class="control-label">N&uacute;mero</label>
                                                        <input class="form-control" type="tel" name="numeroTelefonoReferencia"  placeholder="Numero de Teléfono" > 
                                                    </div>
                                                    
                                                    <div class="col-lg-6  col-md-offset-6 ">
                                                        <label  for="inputInterno" class="Interno">Interno</label>
                                                        <input class="form-control" type="tel" name="internoReferencia"  placeholder="interno" > 
                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                <label>Notas</label>
                                                <textarea class="form-control" name="notas" rows="3"></textarea>
                                            </div> 
                                            </br></br>
                                            <span style="color:#A60629"><label>Los campos resaltados son obligatorios</label></span>
											 </br></br></br>
                                            <div class="form-group col-md-offset-7">
											  
                                               <button type="button" class="btn btn-default" id="aceptarInfoCliente">Aceptar</button> 
                                               <button type="reset" class="btn btn-default " id="limpiar">Limpiar</button>
                                            </div>
                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                            </div>
                            <!-- /.row (nested) -->
                    
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
         </div><!--cierrra -->
        
  </div>
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
                $('#aceptarInfoCliente').click(function(){
                    var validacion = validar();
                    if(validacion == true){
                        var dataString = $('#form-datos').serialize();
                        $.post('guardarCliente',{dataString},function(response){
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
                    }
                      
                });

                $('#comboProvincia').change(function(){
                var dataString = $('#comboProvincia').val();
                    $.post('../ss/getLocalidades',{dataString},function(response){
                        if(response != "NoHayDatos"){
                            var data = eval(response);
                            $('#comboLocalidad').empty();
                            $.each(data,function(indice){
                                localidad(data,indice);
                            }); 
                        }
                    },'json');  
                });
                $('#btnAceptar').click(function(){
                    $('#limpiar').click();
                });
                $('#btnAceptarInfoPrincipal').click(function(){
                   window.location.href = '../../fc_cliente/listado'; 
                });
                $('#btnNoActualizacion').click(function(){
                   window.location.href = '../../fc_cliente/listado';
                });
                $('#form-datos').validator('validate');

                function validar(){
                    var selects = ['comboProvincia'];
                    var cadenas = ['razonSocial'];
                    //var fechas = ['fechaNacimiento'];
                    //var numeros = ['numeroTelefono'];
                    //var correos = ['email'];
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
                        var regCadena = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/;
                        if(regCadena.test($("#"+cadenas[i]).val()) == false){
                            errores.push($("#val"+cadenas[i]).attr('id'));
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

</html>
