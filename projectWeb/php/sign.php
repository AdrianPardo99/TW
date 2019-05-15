<?php
  include 'header.php';
  $var = "sing";
  include 'fileNav.php';?>
  <script>
      $(document).ready(function(){
          $('.datepicker').datepicker({
             format: 'dd/mm/yyyy',
             minDate: new Date(1930,12,1),
             maxDate: new Date(2090,11,31),
              i18n:{
                  months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                  monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                  weekdays: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                  weekdaysShort:['Dom','Lun','Mar','Mier','Jue','Vie','Sab'],
                  weekdaysAbbrev:['D','L','M','M','J','V','S'],
              }
          });
        });
  </script>
  <div class="row">
    <!--s -> Mobile
        l -> Desk
        m -> Tablet-->
  <div class="col s12 l2 m12"></div>
  <div class="col s12 l8 m12">
    <div class="card black">
      <div>
        <center> <img src="/projectWeb/img/logo.jpg" alt="Logo ESCOM" class="responsive-image logoEscom"></center>
        <center><span class="card-title white-text">Sign-up Registro</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="input-field col s12 l6 m6">
              <input value="" id="nameU" type="text"
                  class="validate white-text" length="90">
              <label class="active white-text" for="nameU">Nombre</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="app" type="text"
                  class="validate white-text" length="90">
              <label class="active white-text" for="app">Apellido Paterno</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="apm" type="text"
                  class="validate white-text" length="90">
              <label class="active white-text" for="cap">Apellido Materno</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <label class="active white-text">Edad</label>
              <select class="browser-default black-text" name="age" id="age">
                <?php
                    for ($i=18; $i!=100; $i++){
                      echo "<option value=\"$i\">$i</option>";
                    }
                 ?>
              </select>
            </div>
            <div class="col s12 l12 m12">

            </div>
            <div class="col s12 l6 m6 black-text">
              <section id="dateNext">
                <label for="FN" class="white-text">Fecha de Nacimiento:</label>
                <input type="text" class="datepicker white-text" placeholder="Fecha">
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="puesto" type="text"
                  class="validate white-text" length="90">
              <label class="active white-text" for="cap">Puesto</label>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="initSave();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal black-text">Guardar</a></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    function initSave(){
      l=document.getElementById('saveReg');
      console.log("Saving data");
    }
    $(document).ready(function() {
        $('input#nameU , input#app , input#apm , input#puesto').characterCounter();
      });
</script>

<?php include 'footer.php' ?>
