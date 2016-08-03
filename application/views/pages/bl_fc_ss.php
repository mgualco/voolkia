<div class="row">
                <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                           Carga de Solicitud de Servicio
                    </div>
                        <div class="panel-body">
                            <div class="row">
							 <form role="form" id="form-datosInfoPrincipal" data-toggle="validator">
								<div class="col-lg-6">
									<div class="panel panel-red">
									<div class="panel-heading">
									Datos Principales
									</div>
									
									    <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Prioridad</label>
											<select class="form-control" id="tipoPrioridad" name="tipoPrioridad" placeholder="Ingrese el tipo de prioridad">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                                {prioridades}
                                                    <option value="{id}">{nombre}</option>
                                                {/prioridades}
                                            </select>
                                        </div>
                                        <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Forma de contrataciòn</label>
                                            <select class="form-control" id="formaContratacion" name="idFormaContratacion" placeholder="Ingrese el tipo de contratacion">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                                {formasContratacion}
                                                <option value="{id}">{nombre}</option>
                                                {/formasContratacion}
                                            </select>
                                        </div>
										<div class="for-group ">
                                            <label>Ingrese la fecha de presentación del personal</label>
											<div class="input-group date "  id='datetimepicker'>
                                                       <input type="date" class="form-control" name="fechaPresentacionDelPersonal" value="<?php echo date("Y-m-d")?>"/>
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar "> </span>
														</span>
                                        	</div>
                                        </div>
										<div class="for-group">
											<div class="col-lg-3">
												<label>Fecha de Carga</label>
											</div>
											<div class="input-group date col-lg-2 "  id='datetimepicker'>
                                                       <input type="date" class="form-control" id="fechaCarga" name="fechaCarga" disabled="" value="<?php echo date("Y-m-d")?>"/>
                                            </div>							
                                    </div>
                                    </div>
									<div class="panel panel-green">
									<div class="panel-heading">
									Descripcion del puesto
									</div>
								
                                        <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Puesto solicitado</label>
                                            <select class="form-control" name="idPuesto" id="comboPuesto">
                                                <option value="">Seleccione</option>
                                                {puestos}
                                                <option value="{id}">{nombre}</option>
                                                {/puestos}
                                                <option value="otro">Otro</option>
                                            </select>
											</br>
                                            <div class="form-group">
												<label>Descripcion adicional del puesto</label>
												<textarea class="form-control" name="comentario" rows="4"></textarea>
											</div> 
                                        </div>
                                       <div class="form-group has-error has-feedback" id="divEspecificacionPuesto">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Especificaci&oacute;n del puesto solicitado</label>
                                            <input class="form-control" type="text" name="detallePuestoSolicitado" placeholder="Ingrese el detalle del puesto a cubrir">
                                        </div>
                                        <!-- textarea nuevos -->
                                        <div class="form-group has-error has-feedback" id="divHabilidadesEspecificacionPuesto">
                                            <span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Habilidades</label>
                                            <textarea class="form-control" type="textarea" name="detalleHabilidadesPuestoSolicitado" placeholder="Ingrese las habilidades del puesto a cubrir" rows="3"></textarea>
                                        </div>
                                        <div class="form-group has-error has-feedback" id="divTecnologiasEspecificacionPuesto">
                                            <span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Tecnologias</label>
                                            <textarea class="form-control" type="textarea" name="detalleTecnologiasPuestoSolicitado" placeholder="Ingrese las tecnologias del puesto a cubrir" rows="3"></textarea>
                                        </div>
                                        <div class="form-group has-error has-feedback" id="divCompetenciasEspecificacionPuesto">
                                            <span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Competencias</label>
                                            <textarea class="form-control" type="textarea" name="detalleCompetenciasPuestoSolicitado" placeholder="Ingrese las competencias del puesto a cubrir" rows="3"></textarea>
                                        </div>
                                        <!-- -->
                                        <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Cantidad de vacantes</label>
                                            <select class="form-control" name="vacantes" id="comboVacantes">
                                                <option value="">Seleccione</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                         <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Nivel de experiencia </label>
                                            <select class="form-control" name="seniority" id="comboSeniority">
												<option value="">Seleccione</option>
                                                <option value="1">Becario</option>
                                                <option value="2">Junior</option>
                                                <option value="3">Senior</option>
                                                <option value="4">Semisenior</option>
                                                <option value="5">Junior/Semisenior</option>
                                                <option value="6">Semisenior/Senior</option>
                                            </select>
                                        </div>
										   <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Experiencia </label>
                                            <select class="form-control" name="experiencia" id="comboExperiencia">
												<option value="">Seleccione</option>
                                                <option value="Hadwar">Hadware</option>
                                                <option value="Lenguaje de Programación">Lenguaje de Programación</option>
                                                <option value="Redes">Redes</option>
                                                <option value="Sistemas Operativos">Sistemas Operativos</option>
                                                <option value="Sistemas Aplicativos">Sistemas Aplicativos</option>
                                            </select>
                                        </div>
										</div>
                                        <!-- Acordion -->
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default" id="divHabilidadesRequeridas">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#habilidadesRequeridas">Habilidades requeridas</a>
                                                            </h4>
                                                        </div>
                                                        <div id="habilidadesRequeridas" class="panel-collapse collapse">
                                                            <div class="panel-body" id="habilidadesReq">
                                                                <script type="text/javascript">
                                                                    function habilidadesRequeridas(data,indice){
                                                                        $('#habilidadesReq').append("<div class='checkboxHabilidadesRequeridas'><label><input type='checkbox' name='habilidadRequerida' id='habilidadRequerida"+indice+"'"+"' value='"+data[indice].id+"' checked>&nbsp;"+data[indice].nombre+"</label></div>");
                                                                    }   
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default" id="divHabilidadesDeseables">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#habilidadesDeseables">Habilidades deseables</a>
                                                            </h4>
                                                        </div>
                                                        <div id="habilidadesDeseables" class="panel-collapse collapse">
                                                            <div class="panel-body" id="habilidadesDes">
                                                                <script type="text/javascript">
                                                                    function habilidadesDeseables(data,indice){
                                                                        $('#habilidadesDes').append("<div class='checkboxHabilidadesDeseables'><label><input type='checkbox' name='habilidadDeseable' id='habilidadDeseable"+indice+"'"+"' value='"+data[indice].id+"'>&nbsp;"+data[indice].nombre+"</label></div>");
                                                                    }   
                                                                </script>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default" id="divTecnologias">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#tecnologia">Tecnologias</a>
                                                            </h4>
                                                        </div>
                                                        <div id="tecnologia" class="panel-collapse collapse">
                                                            <div class="panel-body" id="tecnologias">
                                                            
                                                                <script type="text/javascript">
                                                                    function tecnologias(data,indice){
                                                                        $('#tecnologias').append("<div class='checkboxTecnologias'><label><input type='checkbox' name='tecnologia' id='tecnologia"+indice+"'"+"' value='"+data[indice].id+"'>&nbsp;"+data[indice].nombre+"</label></div>");
                                                                    }   
                                                                </script>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br/>
												 <div class="panel panel-default">
                                                        <label>Servicio</label>
                                                        <select class="form-control" id="servicio" name="idServicio">
                                                            <option value="">Seleccione</option>
                                                            {servicios}
                                                            <option value="{id}">{nombre}</option>
                                                            {/servicios}
                                                        </select>
                                                </div>
                                                <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseBeneficios">Beneficios</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseBeneficios" class="panel-collapse collapse">
                                                            <div class="panel-body" id="beneficios">
                                                                {beneficios}
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" id="beneficio{index}" name="beneficio" value="{id}">{nombre}
                                                                        </label>
                                                                    </div>
                                                                {/beneficios}
																<div class="col-lg-3">
																<label>Vacaciones</label>
																</div>
																
																<div class="col-lg-6">
																<input class="form-control" type="text" id="vacaciones" name="vacaciones" placeholder="Ingrese la cantidad de días">
																</div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="panel panel-default" id="divCompetencias">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCompetencias">Competencias/Aptitudes</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCompetencias" class="panel-collapse collapse">
                                                            <div class="panel-body" id="competencias">
                                                                {competencias}
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" class="checkboxCompetencias" id="competencia{index}" name="competencia" value="{id}">{nombre}
                                                                        </label>
                                                                    </div>
                                                                {/competencias}
                                                            </div>
                                                        </div>
                                                </div>
												<div class="form-group has-error has-feedback">
													<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
													<label>Horario de trabajo</label>
													<select class="form-control" name="horarioTrabajo" id="horarioTrabajo">
														<option value="">Seleccione</option>
														<option value="1">09 - 18 hs</option>
														<option value="2">08- 17 hs</option>
														<option value="otro">Otro</option>
													</select>
												</div>
                                                <div class="form-group has-error has-feedback">
														<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                                        <label>Nivel de estudio</label>
                                                        <select class="form-control" name="nivelEstudio" id="comboEstudio">
                                                            <option value="">Seleccione</option>
                                                            <option value="Secundario Completo">Secundario Completo</option>
                                                            <option value="Terciario en curso">Terciario en curso</option>
                                                            <option value="Terciario completo">Terciario completo</option>
                                                            <option value="Universitario en curso">Universitario en curso</option>
                                                            <option value="Universitario completo">Universitario completo</option>
                                                            <option value="Posgrado">Posgrado</option>
                                                        </select>
                                                </div>
												<div class="form-group">
                                                            <label>Titulo</label>
                                                            <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Ingrese el titulo de su carrera">
                                                </div>
												<div class="form-group has-error has-feedback">
														<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                                        <label>Sexo</label>
                                                        <select class="form-control" name="sexo" id="sexo">
                                                            <option value="">Seleccione</option>
                                                            <option value="Femenino">Femenino</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Indistinto">Indistinto</option>
                                                        </select>
                                                </div>
												<div class="form-group has-error has-feedback">
														<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                                        <label>Edad</label>
                                                        <select class="form-control" name="edad" id="edad">
                                                            <option value="">Seleccione</option>
                                                            <option value="18 a 20 años">18 a 20 años</option>
                                                            <option value="20 a 30 años">20 a 30 años</option>
                                                            <option value="20 a 30 años">30 a 40 años</option>
                                                            <option value="indistinto">Indistinto</option>
                                                        </select>
                                                </div>
                                                    
                                            </div>
                                            
                                        <br/>
										
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6"> 
											<div class="form-group has-error has-feedback">
												<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
												<label>Ejecutivo</label>
												<select class="form-control" id="representantesComercial" name="idRepresentanteComercial">
													<option value="">Seleccione</option>
													{representantesComercial}                                               
													<option value="{id}">{apyn}</option>
													{/representantesComercial}
													 <option value="otro">Otro</option>
												</select>
											</div>	
											<div class="form-group has-error has-feedback">
												<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
												<label>Contacto</label>
												<select class="form-control" id="comboContacto" name="idContacto">
													<option value="">Seleccione</option>
													{contactos}                                               
													<option value="{id}">{apyn}</option>
													{/contactos}
													<option value="otro">Otro</option>
												</select>	
											</div>	

                                            <div class="form-group has-error has-feedback" id="divDetalleCliente">
                                                <span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                                <label>Cliente</label>
                                                    <script type="text/javascript">
                                                        function clienteAsociado(data,indice){
                                                            $('#divDetalleCliente').append("<div class='inputDetalleCliente'><input type='hidden' name='idDetalleCliente' id='idDetalleCliente"+indice+"'"+"' value='"+data[indice].id+"' readonly/>&nbsp;<input class='form-control' type='text' id='cliente' name='cliente' placeholder='"+data[indice].razonSocial+"' readonly></div>");
                                                        }   
                                                    </script>
                                            </div>
                                            <!--
											<div class="form-group has-error has-feedback">
												<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
												<label>Cliente</label>
												<select class="form-control" id="cliente" name="idCliente">
													<option value="">Seleccione</option>
													{clientes}
													<option value="{id}">{razonSocial}</option>
													{/clientes}
													<option value="otro">Otro</option>
												</select>
											</div>
                                            -->
											<div class="form-group has-error has-feedback" id="divEspecificacionCliente">
												<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
												<label>Especificación del cliente</label>
												<input class="form-control" type="text" id="inputEspecificacionCliente" name="especificacionCliente" placeholder="Ingrese la raz&oacute;n social del nuevo cliente">
											</div>
                                            
											
													   <div class="form-group has-error has-feedback">
														<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                              
                                                        <label>Sueldo pretendido</label>
                                                        <select class="form-control" id="sueldoPretendido" name="sueldoPretendido">
                                                            <option value="">Seleccione</option>
                                                            <option value="$0 - $6000">$0 - $6000</option>
                                                            <option value="$6000 - $12000">$6000 - $12000</option>
                                                            <option value="$12000 - $20000">$12000 - $20000</option>
                                                            <option value="$20000 - $28000">$20000 - $28000</option>
                                                            <option value="$28000 - $35000">$28000 - $35000</option>
                                                            <option value="$35000 - $42000">$35000 - $42000</option>
                                                            <option value="A convenir">A convenir</option>
                                                        </select>
                                                        <!--<input type="hidden" id="valsueldoPretendido" placeholder="Debe seleccionar el sueldo pretendido" readonly>-->
                                                    </div>    
                                    
                            
                                    <br/>
                                 
	                                </br>
										
								
                                        <br/>
                                        <div class="form-group has-error has-feedback">
											<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                            <label>Provincia del puesto de trabajo</label>
                                            <select class="form-control" name="idProvincia" id="comboProvincia">
                                                <!-- Provincia por default -->
                                                {provinciaDefault}
                                                <option value="{id}">{nombre}</option>
                                                {/provinciaDefault}
                                                {provincias}
                                                <option value="{id}">{nombre}</option>
                                                {/provincias}
                                            </select>
                                        </div>
                                        <br/>
                                        <div class="form-group has-error has-feedback">
												<span class="glyphicon glyphicon-remove  form-control-feedback"></span>
                                                <label>Ubicación del puesto de trabajo</label>
                                            <select class="form-control" name="idLocalidad" id="comboUbicacion">
                                                <script type="text/javascript">
                                                    function localidad(data,indice){
                                                        $('#comboUbicacion').append("<option value="+data[indice].id+">"+data[indice].nombre+"</option>");
                                                    }
                                                </script>
                                            </select>
                                        </div>
	                                </br>
								
                                   </br>
                                    <div class="form-group">
                                            <label>Observaciones</label>
                                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                                    </div> 
	                                </br>
	                                </br>
									 
                                </div>
                                </div> <!-- class="row" --> 
								<span style="color:#A60629"><label>Los campos resaltados son obligatorios</label></span>
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
        