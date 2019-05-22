<?php
  include 'header.php';
  $var = "sing";
  include 'fileNav.php';
?>


  <div class="row">
    <!--s -> Mobile
        l -> Desk
        m -> Tablet-->
  <div class="col s12 l2 m12"></div>
  <div class="col s12 l8 m12">
    <div style="border-radius: 20px;" class="card black">
      <div class="row">
        <div class="col s12 l12 m12 white-text"><h1></h1></div>
        <center> <img src="/projectWeb/img/logo.jpg" alt="Logo ESCOM" class="responsive-image logoEscom"></center>
        <center><span class="card-title white-text">Sign-up Registro</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="input-field col s12 l6 m6">
              <input value="" id="nameU" type="text"
                  class="validate white-text" data-length="90" maxlength="90" required placeholder="Nombre">
              <label class="active white-text" for="nameU">Nombre</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="app" type="text"
                  class="validate white-text" data-length="90" maxlength="90" placeholder="Apellido Paterno">
              <label class="active white-text" for="app">Apellido Paterno</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="apm" type="text"
                  class="validate white-text" data-length="90" maxlength="90" placeholder="Apellido Materno">
              <label class="active white-text" for="cap">Apellido Materno</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <label class="active white-text">Edad</label>
              <select style="border: none; border-bottom: 1px solid #fff;  background: black; " class="browser-default white-text" name="age" id="age">
                <?php
                    for ($i=18; $i!=100; $i++){
                      echo "<option style=\"color:white;\" value=\"$i\">$i</option>";
                    }
                 ?>
              </select>
            </div>
            <div class="col s12 l12 m12">

            </div>
            <div class="col s12 l6 m6 black-text">
              <section id="dateNext">
                <label for="FN" class="white-text">Fecha de Nacimiento:</label>
                <input type="text" class="datepicker white-text" placeholder="Fecha" id="fecha">
                </section>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="puesto" type="text"
                  class="validate white-text" data-length="90" maxlength="90" placeholder="Puesto">
              <label class="active white-text" for="cap">Puesto</label>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="initSave();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Guardar</a></span>
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
        var Nom = $("#nameU").val();
        var app = $("#app").val();
        var apm = $("#apm").val();
        var age = $("#age").val();
        var fecha = $("#fecha").val();
        var puesto = $("#puesto").val();

        var Textos = /[A-Za-zÁÉÍÓÚñáéíóúÑ\']+/;

        if (Nom == "" || app == "" || apm == "" || fecha == "" || puesto == "" || age == ""){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (Nom.length >90 || app.length >90 || apm.length >90 || puesto.length >90){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }
        if (!Textos.test(Nom) || !Textos.test(app) || !Textos.test(apm) || !Textos.test(puesto)) {
            M.toast({html: 'No deben incluir numeros', classes: 'rounded'});
            return false;
        }

      l=document.getElementById('saveReg');
      console.log("Saving data");

    }
    $(document).ready(function() {
        $('input#nameU , input#app , input#apm , input#puesto').characterCounter();
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

<?php include 'footer.php' ?>
