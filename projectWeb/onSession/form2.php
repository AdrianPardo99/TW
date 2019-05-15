<?php include '../php/headerSession.php';?>
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
  <div class="container">
    <div class="col-sm-12 col-xs-12 col-md-12">
      <div id="formu2">
      <img id="avatar2" src="/projectWeb/img/logo.jpg" alt="Logo escom">
      <h1>Gesti&oacute;n Acad&eacute;mica</h1>
      <form class="form-inline col-sm-12 col-md-12 col-xs-12">
        <!--Actividad o Puesto -->
        <div id="i" class="col-xs-12 col-sm-12 col-md-6">
          <label for="Actividad">Actividad o Puesto</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="i" placeholder="Ingrese la Actividad o Puesto">
        </div>
    <!-- Institucion -->
        <div id="i" class="col-xs-12 col-sm-12 col-md-6">
          <label for="Institucion">Institucion</label>
          <input type="text" id="i" class="form-control mb-2 mr-sm-2" placeholder="Ingrese La Institucion">
        </div>
    <!-- FechaDE -->
        <div id="r" class="col-xs-12 col-sm-12 col-md-6">
          <section id="picker" style=" color: black;">
            <label for="FEDe">DE:</label>
            <input type="text" style="color:#fff" class="datepicker " placeholder="Ingrese la Fecha">
          </section>
        </div>
    <!-- FechaA -->
          <div id="r" class="col-xs-12 col-sm-12 col-md-6">
            <section id="picker" style=" color: black;">
              <label for="FEA">A:</label>
              <input type="text" style="color:#fff" class="datepicker " placeholder="Ingrese la Fecha">
            </section>
          </div>
          <div id="i" class="col-xs-12 col-sm-12 col-md-6">
            <input type="submit" class="btn btn-primary mb-2" value="Guardar">
          </div>
          <div id="i" class="col-xs-12 col-sm-12 col-md-6">
            <input type="submit" class="btn btn-primary mb-2" value="Siguiente">
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
<h1><br><br><br><br><br><br>  </h1>
<?php include '../php/footerSession.php'; ?>
