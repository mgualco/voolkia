        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    	Carga de Solicitud de Servicio
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SS N° 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="form-datosInfoPrincipal">
                                        <div class="form-group">
                                            <label>Tipo de solicitud</label>
                                            <select class="form-control" name="tipoBusqueda" placeholder="Ingrese el puesto a cubrir">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                                <option value="busqueda y selecci&oacute;n">B&uacute;squeda y selecci&oacute;n</option>
                                                <option value="busqueda y contrataci&oacute;n">B&uacute;squeda y contrataci&oacute;n</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto solicitado</label>
                                            <input class="form-control" name="puestoSolicitado" placeholder="Ingrese el puesto a cubrir">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Descripción del puesto</label>
                                            <textarea class="form-control" name="descripcionPuesto" rows="3"></textarea>
                                        </div>   
                                        <label>Ingrese la fecha de presentación del personal</label>
                                        <div class='input-group date'  id='datetimepicker'>
                                            
                                            <input type='date' class="form-control" name="fechaPresentacionDelPersonal"/>
                                            <span class="input-group-addon">
                                                <span class=" glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </div>
                                        </br>
                                  
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Asignado: </label>
                                            <input type"label" class="form-control" name="asignado" placeholder="No hay usuario asignado." disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <select class="form-control" name="idCliente">
                                                {clientes}
                                                <option value="{id}">{razonSocial}</option>
                                                {/clientes}
                                            </select>
                                        </div>
                                  
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning">Se debe tener en cuenta que se debe cargar previamente el cliente</label> 
                                    </div>
                                    <a href="/fc_cliente/index"><i class="fa fa-edit fa-fw"></i> Carga de Cliente</a>
                                
                                	</br>
                                	</br>
                                  	<div class="form-group">
                                            <label>Representante Comenrcial</label>
                                            <select class="form-control" name="idRepresentanteComercial">
                                                {representantesComercial}                                               
                                                <option value="{id}">{apyn}</option>
                                                {/representantesComercial}
                                            </select>
                                    </div>
                            
	                                </br>
	                                </br>
	                                </br>
	                                </br>
                                	<div class="col-md-offset-7" >          
                                                <button type="button" id="aceptarInfoPrincipal" class="btn btn-default">Aceptar</button>                        
                                                <button type="reset" id="limpiarInfoPrincipal" class="btn btn-default">Limpiar</button>
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
        
            </div>
          