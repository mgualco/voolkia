<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                    <div class="panel-heading">
                           Validación del puesto de trabajo IT
                    </div>
                    
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                                <label>Puesto correcto cargado: </label>
                                                <input type"label" class="form-control" name="puestoCorrectoCargado" placeholder="{solicitud}{puestoCorrecto}{/solicitud}" disabled/>
                                        </div>
                                        <div class="form-group">
                                            
                                            <label>Puesto Correcto : </label>
                                                
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="opcionPuestoCorrecto" id="optionsRadios1" value="optionSi" checked>SI
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="opcionPuestoCorrecto" id="optionsRadios2" value="optionNo">NO
                                                    </label>
                                                </div>
                                        
                                        </div>
                                        <div class="form-group">
                                                <label>Opci&oacute;n contacto con el cliente cargado: </label>
                                                <input type"label" class="form-control" name="contactoClienteCargado" placeholder="{solicitud}{contactoCliente}{/solicitud}" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Hubo contacto con el cliente :  </label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="opcionContactoCliente" id="optionsRadios3" value="option1" checked>SI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="opcionContactoCliente" id="optionsRadios4" value="option2">NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Responsable IT seleccionado: </label>
                                                <input type"label" class="form-control" name="responsableITCargado" placeholder="{solicitud}{nombreResponsableIT}{/solicitud}" disabled/>
                                        </div>
                                          <div class="form-group">
                                            <label>Responsable de It</label>
                                            <select class="form-control">
                                                {responsablesIT}
                                                <option value="{id}">{apyn}</option>
                                                {/responsablesIT}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                           <div class="form-group">
                                                <label>Puesto exacto</label>
                                                </br>
                                                <input class="form-control" value="{solicitud}{puestoExacto}{/solicitud}">
                                            </div>
                                            </br>
                                            <div class="form-group">
                                                <label>Fecha de validacion</label> 
                                                </br>
                                                <input type='date' class="form-control" value="{solicitud}{fechaValidacion}{/solicitud}">
                                            </div>
                                            </br>
                                            <div class="form-group">
                                                <label>Notas sobre lo hablado con el cliente  </label>
                                                <textarea class="form-control" rows="3" placeholder="{solicitud}{notasEvaluacionIT}{/solicitud}"></textarea>
                                            </div>
                                    </div>
                                    <div class="col-lg-12">    
                                        <div class="form-group">
                                            <label>Comentario adicional   </label>
                                            <textarea class="form-control" rows="3" placeholder="{solicitud}{comentarioAdicionalEvaluacionIT}{/solicitud}"></textarea>
                                        </div>    
                                    </div>
                                 <div class="col-md-offset-7">
                                    <button type="submit" id="aceptarInfoIT" class="btn btn-default" >Aceptar</button>
                                    <button type="reset" id="limpiarInfoIT" class="btn btn-default">Limpiar</button>       
                                </div>
                            </form>
                          
                        </div>
                </div>
              
                </br>
            </div>
        </div>
    </div>