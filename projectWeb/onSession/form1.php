<?php include '../php/headerSession.php';?>
        <div id="contenedor" class="col-md-12 col-xs-12 col-sm-12">
            <div id="formu1" class="col-md-12 col-xs-12 col-sm-12">
                <img id="avatar2" src="/projectWeb/img/logo.jpg" alt="Logo escom">
                <!--encabezado-->
                <h1>Capacitacion docente</h1>
                <!--Formulario-->
                <form class="form-inline col-md-12 col-xs-12 col-sm-12">
                  <div style="width: 50%">
                    <!--Tipo de Capacitacion-->
                  <label for="TipoCap" class="mr-sm-2">Tipo de Capacitacion</label>
                  <input type="Text" class="form-control mb-2 mr-sm-2" id="TipCap" placeholder="Capacitacion:">
                  </div>
                  <div style="width: 50%">
                  <!--Institucion-->
                  <label for="Institucion" class="mr-sm-2">Institucion:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="Institucion" placeholder="Institucion:">
                  </div>

                  <div style="width: 50%">
                  <!--Pais-->
                  <label for="Pais" class="mr-sm-2">Pais:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="Pais" placeholder="Pais:">
                  </div>

                  <div style="width: 25%">
                  <!--Año-->
                  <label for="Año" class="mr-sm-2">Año de obtencion:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="Año" placeholder="Año de obtencion">
                  </div>

                  <div style="width: 25%">
                  <!--Horas-->
                  <label for="Horas" class="mr-sm-2">Horas:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="Horas" placeholder="Horas:">
                  </div>

                  <div style="width: 50%">
                  <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                  </div>

                  <div style="width: 50%">
                  <button type="submit" class="btn btn-primary mb-2">Agregar otro</button>
                  </div>
                </form>
            </div>
        </div>
<?php include '../php/footerSession.php';?>
