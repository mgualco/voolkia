<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/bootstrap/dist/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/metisMenu/dist/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <!-- DataTables CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css<?php echo "'"?> rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/datatables-responsive/css/dataTables.responsive.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'".base_url()?>res/front/css/dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo "'".base_url()?>res/front/css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">
    <link href=<?php echo "'".base_url()?>res/front/css/dataTables.bootstrap.css<?php echo "'"?> rel="stylesheet">

    <!-- archivos externos para el paginado -->
            <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'".base_url()?>res/bower_components/bootstrap/dist/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo "'".base_url()?>res/bower_components/metisMenu/dist/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href=<?php echo "'".base_url()?>res/bower_components/datatables-responsive/css/dataTables.responsive.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'".base_url()?>res/dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo "'".base_url()?>res/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

    <!--  -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function popup(idSolicitud){
            var dataString = idSolicitud;
            $.post('../ss/getDatosVistaPreliminar',{dataString},function(response){

            },'json');
            //var ventana = window.open('','datosSolicitud','width=300,height=500,scrollbars=YES');
            
        }
    </script>
</head>

<body>

    <div id="wrapper">
        <?php include 'menu.php';?>
        <div id="page-wrapper">
            <br/>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de Solicitudes
                        </div>
                        

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover pagination" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Razon Social</th>
                                            <th>CUIT</th>
                                            <th>Email</th>
                                            <th>Detalle</th>
                                            <!--<th>Vista</th>-->
                                        </tr>
                                    </thead>
                                    <!-- Esta seccion es la carga dinamica. Fijate que respecto la clase que se carga por cada <tr>-->
                                   
                                    <tbody id="tbodyRegistros">
                                        {clientes}
                                            <tr class="odd gradeX">
                                                <td>{razonSocial}</td>
                                                <td>{cuit}</td>
                                                <td class="center">{email}</td>
                                                 <td  class='center'><form id="form{idCliente}" action='../ss/detalleSolicitud' method='post'><input type='hidden' name='idCliente' value="{idCliente}"><input id="btn{idCliente}" type='submit' class='btn btn-default' value='Editar'/></form></td><!--<td class="center"><input type='button' class='btn btn-default' value='Vista preliminar' onClick='popup({idSolicitud})'></input></td>-->
                                            </tr>
                                        {/clientes}
                                    </tbody>
                                </table>
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

    </div>
    <!-- /#wrapper -->
    <div id="example" style="display: none;" title="Informaci&oacute;n">
             <div class="modal-body">
                <p>Su sesi&oacute;n ha cauducado debido a un tiempo de inactividad de 10 minutos.<br/> Por favor vuelva a registrarse.</p>
                <br/>
                <button type="button" id="btnAceptar">Aceptar</button>
            </div>
           
    </div>
    <input type="hidden" id="btnModalDialog"></input>
    <!-- jQuery -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/jquery/dist/jquery.min.js<?php echo "'"?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/bootstrap/dist/js/bootstrap.min.js<?php echo "'"?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/metisMenu/dist/metisMenu.min.js<?php echo "'"?>></script>

    <!-- DataTables JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/datatables/media/js/jquery.dataTables.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>res/front/css/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js<?php echo "'"?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo "'".base_url()?>res/front/css/dist/js/sb-admin-2.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>res/front/css/js/jquery.dataTables.min.js<?php echo "'"?>></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!--  -->
 
    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo "'".base_url()?>res/bower_components/bootstrap/dist/js/bootstrap.min.js<?php echo "'"?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo "'".base_url()?>res/bower_components/metisMenu/dist/metisMenu.min.js<?php echo "'"?>></script>

    <!-- DataTables JavaScript -->
    <script src=<?php echo "'".base_url()?>res/bower_components/datatables/media/js/jquery.dataTables.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'".base_url()?>res/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js<?php echo "'"?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo "'".base_url()?>res/dist/js/sb-admin-2.js<?php echo "'"?>></script>
    <!--  -->
    <script type="text/javascript">
    /* esta seccion es la encargada de cargar los datos de todas las solicitudes de servicio y llamar a la funcion 'registros' */
    
        $(document).ready(function() {
            /*
            $.post('../ss/datosSolicitudDeServicio',function(response){
                    //var data = JSON.parse(response);
                    if(response != false){
                        var data = eval(response);
                        $.each(data,function(indice){
                            if(data[indice].area == null){
                                data[indice].area = 'No disponible'
                            }
                            if(data[indice].comentario == null){
                                data[indice].comentario = 'No hay comentarios'
                            }
                            registros(data,indice);  
                    });
                }

            },'json');
            
            $('#dataTables-example').DataTable({
                    responsive: true
            });
            */
            $('#dataTables-example').DataTable({
                responsive: true
            });
            function modalDialog(){
                $('#example').dialog({
                    autoOpen: false, 
                    modal: true,
                });
                $( "#example" ).dialog( "open" );
            }
            $('#btnAceptar').click(function(){
                window.location.href = '../../login/index'; 
            });

            $('#btnModalDialog').click(function(){
                modalDialog();
            });
           
        });
    


    </script>
    
</body>

</html>

