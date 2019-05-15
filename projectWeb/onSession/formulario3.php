<?php include '../php/headerSession.php';?>
<div class="row">
  <!--s -> Mobile
      l -> Desk
      m -> Tablet-->
  <div class="col s12 l2 m12"></div>
  <div class="col s12 l8 m12">
    <div class="card black">
      <div>
        <center> <img src="/projectWeb/img/logo.jpg" alt="Logo ESCOM" class="responsive-image logoEscom"></center>
        <center><span class="card-title white-text">Experiencia Profesional (No Academica)</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="input-field col s12 l6 m6">
              <input value="" id="actividadPuesto" type="text"
                class="validate white-text" data-length="90">
                <label class="active white-text" for="actividadPuesto">Actividad o Puesto</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="Org" type="text"
                    class="validate white-text" data-length="90">
                <label class="active white-text" for="Org">Organizaci&oacute;n</label>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="datePrin">
                  <label for="FEDe" class="white-text">De:</label>
                  <input type="text" class="datepicker white-text" placeholder="Ingrese la Fecha">
                </section>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="dateNext">
                  <label for="FA" class="white-text">A:</label>
                  <input type="text" class="datepicker white-text" placeholder="Ingrese la Fecha">
                </section>
              </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="alert('initSave');"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal black-text">Guardar</a></span>
              </div>
              <div class="col s12 l6 l6">
                <a id="Next" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal black-text">Siguiente</a><br>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('input#actividadPuesto , input#Org').characterCounter();
  });
</script>
<?php include '../php/footerSession.php';?>
