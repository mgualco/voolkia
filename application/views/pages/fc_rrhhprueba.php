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
    <link href="../../../res/front/css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- MetisMenu CSS -->
    <link href="../../../res/front/css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
    <link href="../../../res/front/css/dist/css/sb-admin-2.css" rel="stylesheet">
	
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
	</head>
	<body>
	<div id="page-wrapper">
   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Carga de Staff</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    <div class="form-group panel-body">
      <form data-toggle="validator" role="form">
			<div class="col-lg-6">
			   <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" placeholder="ingrese el Nombre" required> 
                </div>
				<div class="form-group">
				<label>Apellido</label>
				   <input class="form-control" type="text" placeholder="ingrese el Apellido" > 
				</div>
				 <div class="form-group">
                    <label>Fecha de Nacimiento</label>
					<input class="form-control" type="text" placeholder="ingrese la fecha de Nacimiento" > 
				</div> 
				<div class="form-group">
					<label>Razon Social</label>
					<select class="form-control" >
						<option></option>
						<option>Casado</option>
						<option>Soltero</option>
						<option>Concubino</option>
					</select>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label>Localidad</label>
						<select class="form-control" >
							<option></option>
							<option>Caballito </option>
							<option>Belgrano</option>
						</select>
					</div>
					   <div class="form-group">
						<label>Otra Localidad</label>
						 <input class="form-control" type="text" placeholder="ingrese otra localidad" 	> 
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label>Provincia</label>
						<select class="form-control" >
							<option></option>
							<option>Bs As </option>
							<option>Córdoba</option>
						</select>
					</div>
					<div class="form-group">
						<label>Otra Provincia</label>
						 <input class="form-control" type="text" placeholder="ingrese otra provincia" > 
					</div>
				</div>
				<div class="col-lg-6 form-group">
					<label>Dirección</label>
					<input class="form-control" type="text" placeholder="ingrese dirección" > 
				</div>
				<div class="col-lg-2 form-group">
					<label>Numero</label>
				   <input class="form-control" type="text" placeholder="Número" > 
				</div>  
				<div class="col-lg-2">
					<label>Dpto</label>
				   <input class="form-control" type="text" placeholder="Dpto"> 
				</div>  
				<div class="col-lg-2">
					<label>Piso</label>
				   <input class="form-control" type="text" placeholder="Piso"> 
				</div>  
			</div>
			<div class="col-lg-6" >
				<div class="form-group">
					<label>Area</label>
					<select class="form-control" >
						<option></option>
						<option>rrhh </option>
						<option>it</option>
					</select>
				</div>
				<label>Teléfonos</label>
				<div class="form-group">
					<div class="col-lg-6 form-group">
							<label for="inputTipo" class="control-label">Tipo</label>
							<select class="form-control" >
								<option></option>
								<option>Laboral </option>
								<option>Celular</option>
							</select>
                    </div>
				
					<div class="col-lg-6 form-group">
						<label  for="inputNumero" class="control-label">Número</label>
						<input class="form-control" type="tel"  placeholder="Numero de Teléfono" > 
					</div>
					
					<div class="col-lg-6  col-md-offset-6 ">
						<label  for="inputInterno" class="Interno">Interno</label>
						<input class="form-control" type="tel"  placeholder="interno" > 
					</div>
               </div>
				<div class="form-group">
					<label  for="inputEmail" class="control-label">Email</label>
					<input class="form-control" type="email" placeholder="ingrese mail del contacto" > 
				</div>
				<div class="form-group">
					<label for="inputNota" class="control-label">Notas</label>
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
		
        <div class="form-group col-md-offset-9">
		   <button type="button" class="btn btn-default"  disabled="disabled">Aceptar</button> 
		   <button type="reset" class="btn btn-default ">Limpiar</button>
        </div>
      </form>
    </div> <!-- cierra formulario de carga-->
	
	 <!-- jQuery -->
	<script src="../../../res/front/css/bower_components/jquery/dist/jquery.min.js"></script>
	
     <!-- Bootstrap Core JavaScript -->
    <script src="../../../res/front/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src="../../../res/front/css/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
    <script src="../../../res/front/css/js/sb-admin-2.js"></script>
	
	 <!-- Validator js  -->
	 <script src="../../../res/front/css/js/validator.min.js"></script> <!-- deshabilita el boton aceptar -->
	 
	     
    <script src="../../../res/front/css/js/application.js"></script>
    <script type="text/javascript">

            $(document).ready(function(){
                /*
                $('#dialog-message').dialog({
                  autoOpen: false
                });
				*/
                $('#aceptar').click(function(){
                    var dataString = $('#form-datos').serialize();
                    $.post('guardarEmpleado',{dataString},function(response){
                        if(response){
                        	alert("Mensaje de exito");
                            $('#dialog-message').dialog('open');
                        }
                    },'json');  
                });
                $('#btnAceptar').click(function(){
                    $('#limpiar').click();
                });
                $('#form-datos').validator('validate');
            });
        </script>
    
	</body>
</htlm>
	 