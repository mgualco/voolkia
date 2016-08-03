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

        <?php include '/application/views/pages/menu.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" ></br></br></br></br></br></br></br>
                    <h1 class="text-success">
                        <p class="fa fa-check" style="color:green">La solicitud ha sido observada.</p>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
					<div class="form-group col-md-offset-7">
					   <button type="button" class="btn btn-success" id="btnListarNuevamente">Volver al listado</button> 
					</div>
            </div>
            <!-- /.row -->
          
        
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
                   window.location.href = <?php echo "'".base_url()?>ss/paginaPrincipal<?php echo "'"?>; 
                });
                $('#btnNoActualizacion').click(function(){
                   window.location.href = <?php echo "'".base_url()?>ss/paginaPrincipal<?php echo "'"?>;
                });

                $('#btnListarNuevamente').click(function(){
                   window.location.href = <?php echo "'".base_url()?>ss/paginaPrincipal<?php echo "'"?>;
                });

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