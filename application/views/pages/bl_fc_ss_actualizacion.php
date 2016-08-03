 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    	Edici&oacute;n de Solicitud de Servicio
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SS N° {solicitud}{idSolicitud}{/solicitud}
                            <div style="float: right">
                                Estado: {solicitud}{estadoSolicitud}{/solicitud}
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="form-datosInfoPrincipal" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="idSolicitud" class="form-control" value="{solicitud}{idSolicitud}{/solicitud}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de solicitud seleccionada: </label>
                                            <input type"text" class="form-control" name="tipoSolicitudSeleccionada" value="{solicitud}{tipoSolicitud}{/solicitud}" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de solicitud</label>
                                            <select class="form-control" name="tipoBusqueda" placeholder="Ingrese el puesto a cubrir">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                                <option value="Busqueda y selecci&oacute;n">Busqueda y selecci&oacute;n</option>
                                                <option value="Busqueda y contrataci&oacute;n">B&uacute;squeda y contrataci&oacute;n</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto seleccionado</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombrePuestoSolicitado}{/solicitud}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto solicitado</label>
                                            <select class="form-control" name="tipoBusqueda" placeholder="Seleccione el puesto a cubrir">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                                {puestos}
                                                <option value="{id}">{nombre}</option>
                                                {/puestos}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Especificaci&oacute;n del puesto seleccionado</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombrePuestoSolicitado}{/solicitud}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Especificacion</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombrePuestoSolicitado}{/solicitud}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Descripción del puesto</label>
                                            <textarea class="form-control" name="descripcionPuesto" placeholder="{solicitud}{descripcionPuesto}{/solicitud}" rows="3"></textarea>
                                        </div>   
                                        <label>Ingrese la fecha de presentación del personal</label>
                                        <div class='input-group date'  id='datetimepicker'>
                                            
                                            <input type='date' class="form-control" name="fechaPresentacionDelPersonal" value="{solicitud}{fechaPresentacionDelPersonal}{/solicitud}"/>
                                            <span class="input-group-addon">
                                                <span class=" glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </div>
                                        </br>
                                        
                                        <div class="form-group">
                                            <label>Provincia seleccionada</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombreProvincia}{/solicitud}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Provincia</label>
                                            <select class="form-control" name="idProvincia">
                                                <option value="">Seleccione una provincia</option>
                                                {provincias}
                                                <option value="{id}">{nombre}</option>
                                                {/provincias}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Localidad seleccionada</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombreLocalidad}{/solicitud}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Localidades</label>
                                            <select class="form-control" name="idLocalidad">
                                                <option value="">Seleccione una localidad</option>
                                                {localidades}
                                                <option value="{id}">{nombre}</option>
                                                {/localidades}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Comentario adicional</label>
                                            <textarea class="form-control" name="comentario" rows="3" placeholder="{solicitud}{comentarioAdicional}{/solicitud}"></textarea>
                                        </div> 
                                     
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Asignado: </label>
                                            <input type"label" class="form-control" name="asignado" value="{solicitud}{nombreEmpleadoAsignado}{/solicitud}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente seleccionado: </label>
                                            <input type"label" class="form-control" name="clienteSeleccionado" placeholder="{solicitud}{razonSocialCliente}{/solicitud}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <select class="form-control" name="idCliente">
                                                <option value="">Seleccione un cliente</option>
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
                                        <label>Representante comercial seleccionado: </label>
                                        <input type"label" class="form-control" name="representanteComercialSeleccionado" placeholder="{solicitud}{nombreRepresentanteComercial}{/solicitud}"/>
                                    </div>
                                  	<div class="form-group">
                                            <label>Representante Comercial</label>
                                            <select class="form-control" name="idRepresentanteComercial">
                                                <option value="">Seleccione un representante comercial</option>
                                                {representantesComercial}                                               
                                                <option value="{id}">{apyn}</option>
                                                {/representantesComercial}
                                            </select>
                                    </div>
                            
	                                </br>
	                                </br>

                                         <div class="form-group">
                                            <label>Representante Staff selecccionado: </label>
                                            <input type"label" class="form-control" name="asignado" placeholder="{solicitud}{nombreRepresentanteStaffRRHH}{/solicitud}" disabled/>
                                        </div>
                                        <div class="form-group">
                                                <label>RRHH</label>
                                                <select class="form-control" name="idRepresentanteStaff">
                                                    <option value="">Seleccione un representante de RRHH del Staff</option>
                                                    {representantesStaff}
                                                    <option value="{id}">{apyn}</option>
                                                    {/representantesStaff}
                                                </select>
                                        </div>
                                        <div class="form-group has-warning">
                                                    <label class="control-label" for="inputWarning">
                                                        Se debe tener en cuenta que se debe cargar previamente el recurso del staff.
                                                    </label> 
                                            <a href="/fc_rrhh/index"><i class="fa fa-edit fa-fw"></i> Carga de personal de Recurso Humanos</a>
                                        </div>
                                    
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