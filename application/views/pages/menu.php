
  <!-- Dropdowns
  ================================================== -->
	 <div id="wrapper">

        <!-- Navigation	-->
          <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
               <a class="navbar-brand" href="index.html">RRHH-Sistema Selección</a>
            </div>
		
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
             
                
                        <li>
							
                            <a href=<?php echo "'".base_url()?>fc_cliente/index<?php echo "'"?>><i class="fa fa-wrench fa-fw"></i>&nbsp;Cliente</a>
							<a href=<?php echo "'".base_url()?>fc_cliente/listado<?php echo "'"?>><i class="fa fa-search"></i>&nbsp;Listar cliente</a>
              				<a href=<?php echo "'".base_url()?><?php echo "'"?>><i class="fa fa-gears"></i>&nbsp;Generar informe</a>
                            <a href=<?php echo "'".base_url()?>fc_rrhh/index<?php echo "'"?>><i class="fa fa-wrench fa-fw"></i>&nbsp;Empleado</a>
                            <a href=<?php echo "'".base_url()?><?php echo "'"?>><i class="fa fa-search"></i>&nbsp;Listar empleados</a>
                            <a href=<?php echo "'".base_url()?><?php echo "'"?>><i class="fa fa-gears"></i>&nbsp;Generar informe</a>	
                            <a href=<?php echo "'".base_url()?>ss/index<?php echo "'"?>><i class="fa fa-wrench fa-fw"></i>&nbsp;Solicitud de Servicio</a>
              				<a href=<?php echo "'".base_url()?>ss/paginaPrincipal<?php echo "'"?>><i class="fa fa-search"></i>&nbsp;Listar Solicitudes</a>
                      <a href=<?php echo "'".base_url()?>ss/paginaPrincipalSSRechazadas<?php echo "'"?>><i class="fa fa-search"></i>&nbsp;Listar solicitudes observadas</a>
              				<a href=<?php echo "'".base_url()?>logout/index<?php echo "'"?>><i class="fa fa-user"></i>&nbsp;Logout</a>
							
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


	
	<!--================================================== -->
	

 

    <script src=<?php echo "'".base_url()?>res/front/css/js/application.js<?php echo "'"?>></script>

             <!-- Validator js  -->
    <script src=<?php echo "'".base_url()?>res/front/css/js/validator.min.js<?php echo "'"?>></script> <!-- deshabilita el boton aceptar -->
    <!--
    <script type="text/javascript">

            $(document).ready(function(){
                $('#dialog-message').dialog({
                  autoOpen: false
                });
                $('#aceptar').click(function(){
                    var dataString = $('#form-datos').serialize();
                    $.post('guardarEmpleado',{dataString},function(response){
                        if(response){
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
    -->  