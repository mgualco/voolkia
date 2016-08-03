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
				
                    <h1 class=" text-warning fa-warning" >Ingrese la observacion deseada.</h1>
					 <div class="col-lg-9" >
						<textarea class="form-control" name="motivoObservacion" rows="2"></textarea>
					 </div>
				<br><br><br><br>
			
                <!-- /.col-lg-12 -->
				<div class="col-lg-6">
					<div class="form-group col-md-offset-5">
					    <button type="button" class="btn " id="aceptarSolicitu">Aceptar</button> 
					    <button type="button" class="btn " id="cancelaSolicitud">Cancelar</button> 
					</div>
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


</body>

</html>
