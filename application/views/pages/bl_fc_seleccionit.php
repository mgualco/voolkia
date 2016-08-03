
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
                                            <label>Puesto Correcto : </label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>SI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">NO
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Hubo contacto con el cliente :  </label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option1" checked>SI
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="option2">NO
                                                </label>
                                            </div>
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
                                                <input class="form-control" placeholder="Ej. Analista de Sistemas">
                                            </div>
                                            </br>
                                            <div class="form-group">
                                                <label>Fecha de validacion</label> 
                                                </br>
                                                <input type='date' class="form-control" placeholder="fecha actual">
                                            </div>
                                            </br>
                                            <div class="form-group">
                                                <label>Notas sobre lo hablado con el cliente  </label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                    </div>
                                    <div class="col-lg-12">    
                                        <div class="form-group">
                                            <label>Comentario adicional   </label>
                                            <textarea class="form-control" rows="3"></textarea>
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