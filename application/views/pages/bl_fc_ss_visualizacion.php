<div class="row">
                <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                           SS N° {solicitud}{idSolicitud}{/solicitud}
                            <div style="float: right">
                                Estado: {solicitud}{nombreEstado}{/solicitud}
                            </div>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="form-datosInfoPrincipal" data-toggle="validator">
                                        <input type="hidden" name="idSolicitud" value="{solicitud}{idSolicitud}{/solicitud}"/>
                                        <div class="form-group">
                                            <label>Tipo de solicitud</label>
                                            <input type"text" class="form-control" name="tipoSolicitudSeleccionada" value="{solicitud}{tipoSolicitud}{/solicitud}" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombrePuestoSolicitado}{/solicitud}" readonly>
                                        </div>
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion">
                                                    <label>Habilidades requeridas</label>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" id="habilidadesReq">
                                                        {habilidadesRequeridas}   
                                                            <div class="checkboxHabilidadesRequeridas"><label><input type="checkbox" name="habilidadRequerida" id="habilidadRequerida" value= "{idSkill}" checked>&nbsp; {nombreSkill}</label></div>
                                                        {/habilidadesRequeridas}      
                                                        </div>
                                                        
                                                    </div>
                                                    <br/>
                                                    <label>Habilidades deseables</label>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" id="habilidadesReq">
                                                        {habilidadesDeseables}   
                                                            <div class="checkboxHabilidadesDeseables"><label><input type="checkbox" name="habilidadDeseable" id="habilidadDeseable" value= "{idSkill}" checked>&nbsp; {nombreSkill}</label></div>
                                                        {/habilidadesDeseables}      
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <label>Tecnologias</label>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" id="tecnologias">
                                                        {tecnologias}   
                                                            <div class="checkboxTecnologias"><label><input type="checkbox" name="tecnologia" id="tecnologia" value= "{idSkill}" checked>&nbsp; {nombreSkill}</label></div>
                                                        {/tecnologias}      
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <br/>
                                                <label>Beneficios</label>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" id="beneficios">
                                                        {beneficios}   
                                                            <div class="checkboxBeneficios"><label><input type="checkbox" name="beneficios" id="beneficio" value= "{idBeneficio}" checked>&nbsp; {nombreBeneficio}</label></div>
                                                        {/beneficios}      
                                                        </div>
                                                    </div>
                                                <label>Competencias</label>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" id="beneficios">
                                                        {competencias}   
                                                            <div class="checkboxCompetencias"><label><input type="checkbox" name="competencias" id="competencia" value= "{idCompetencia}" checked>&nbsp; {nombreCompetencia}</label></div>
                                                        {/competencias}      
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label>Nivel de estudio&nbsp;&nbsp;<i class="fa fa-flag"></i></label>
                                                        <input type"text" class="form-control" name="tipoSolicitudSeleccionada" value="{solicitud}{nivelEstudio}{/solicitud}" readonly/>
                                                </div>
                                                    
                                            </div>
                                            <i class="fa fa-flag"></i>&nbsp;&nbsp;Campos obligatorios.
                                        <br/>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6"> 
                                    <div class="form-group">
                                            <label>Titulo</label>
                                            <input type"text" class="form-control" name="tipoSolicitudSeleccionada" value="{solicitud}{tituloObtenido}{/solicitud}" readonly/>
                                    </div>
                                        <div class="form-group">
                                            <label>Sueldo neto pretendido</label>
                                            <input type"text" class="form-control" name="tipoSolicitudSeleccionada" value="{solicitud}{sueldoNetoPretendido}{/solicitud}" readonly/>
                                        </div>   
                                        <div class="form-group">
                                            <label>Asignado</label>
                                            <input type"label" class="form-control" name="asignado" value="{solicitud}{nombreEmpleadoAsignado}{/solicitud}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type"label" class="form-control" name="clienteSeleccionado" placeholder="{solicitud}{razonSocialCliente}{/solicitud}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Representante comercial</label>
                                            <input type"label" class="form-control" name="representanteComercialSeleccionado" placeholder="{solicitud}{nombreRepresentanteComercial}{/solicitud}"/>
                                        </div>
                              
                                    <br/>
                                  	<div class="form-group">
                                        <label>Representante Staff</label>
                                        <input type"label" class="form-control" name="asignado" placeholder="{solicitud}{nombreRepresentanteStaffRRHH}{/solicitud}" disabled/>
                                    </div>
	                                
	                                </br>
                                    <div class="form-group">
                                        <label>Provincia</label>
                                        <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombreProvincia}{/solicitud}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Localidad</label>
                                        <input class="form-control" name="puestoSolicitado" value="{solicitud}{nombreLocalidad}{/solicitud}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Comentario adicional</label>
                                        <textarea class="form-control" name="comentario" rows="3" placeholder="{solicitud}{comentarioAdicional}{/solicitud}" readonly></textarea>
                                    </div>
                                    <button type="button" id="btnMotivoRechazo" class="btn btn-default">Motivo de observacion</button>
                                    <div class="form-group" id="divMotivoRechazo">
                                        <label>Motivo de observacion</label>
                                        <textarea class="form-control" id="motivoRechazo" name="motivoRechazo" rows="3" placeholder="{solicitud}{motivoRechazo}{/solicitud}"></textarea>
                                    </div>
                                   
                                </div>
                                </div> <!-- class="row" --> 
                                	<div class="col-md-offset-7" >          
                                        <button type="button" id="aceptarInfoPrincipal" class="btn btn-default">Aceptar</button>                        
                                        <button type="button" id="btnRechazar" class="btn btn-default">Observar</button>
                                        <!-- <button type="button" id="btnObservar" class="btn btn-default">Observar</button> -->
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
        