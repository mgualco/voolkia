        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Información adicional
                        </div>
                    <div class="panel-body">
                        <div class="row">
                            <form id="form-datosInfoAdicional" method="post">                
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Región del puesto de trabajo</label>
                                            <input class="form-control" name="region" placeholder="Ej. Capital Federal" >
                                        </div>
                                        <div class="form-group">
                                            <label>Comentario adicional</label>
                                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                                        </div> 
                                    </div>   
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                                <label>Ubicación del puesto de trabajo</label>
                                                <input class="form-control" name="ubicacion" placeholder="Ej. Belgrano">
                                        </div>

                                        <div class="form-group">
                                                <label>RRHH</label>
                                                <select class="form-control" name="idRepresentanteStaff">
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
                                    </div>
                        </div> <!-- class="row" --> 
                                <div class="col-md-offset-7">
                                    <button type="button" id="aceptarInfoRRHH" class="btn btn-default" >Aceptar</button>
                                    <button type="reset" id="limpiarInfoRRHH" class="btn btn-default">Limpiar</button>       
                                </div>
                            </form>
                         
                    </div> <!-- class="panel-body" -->
                </div> <!-- class="panel panel-default" -->
            </div> <!-- class="col-lg-12" -->
        </div> <!-- class="row" -->