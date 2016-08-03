<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RRHH - Seleccion</title>
       <!-- Bootstrap core CSS -->
    <link href="../../../res/front/css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="../../../res/front/css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../res/front/css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Validaciones CSS -->
    <link href="../../../res/front/css/validaciones.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="../../../res/front/css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                <div class="col-lg-12" ></br></br></br></br></br></br></br>
                    <h1 class=" text-warning fa-warning" >Ingrese motivo de Observacion.</h1>
                </div>
                <form role="form" id="formRechazo">
                  <input type="text" value="{solicitud}{idSolicitud}{/solicitud}"/>
                  <div class="col-lg-9" >
                      <textarea class="form-control" name="motivoRechazo" rows="2"></textarea>
                  </div>

                        <!-- /.col-lg-12 -->
        					<div class="form-group col-md-offset-7">
        					    <button type="button" class="btn " id="aceptarRechazoSolicitud">Aceptar</button> 
        					    <button type="button" class="btn " id="cancelaRechazoSolicitud">Cancelar</button> 
        					</div>
                </form>
            </div>
            <!-- /.row -->
          
        
  </div>
    </div>
 
  
    <script src="../../../res/front/css/bower_components/jquery/dist/jquery.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="../../../res/front/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../res/front/css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../../../res/front/css/js/sb-admin-2.js"></script>
    
     <!-- Validator js  -->
     <script src="../../../res/front/css/js/validator.min.js"></script> 
     
    <script src="../../../res/front/css/js/application.js"></script>
    <script src="../../../res/front/css/js/bootstrap-modal.js"></script>
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>   


</body>

</html>
