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
        <center><span class="card-title white-text">Capacitaci&oacute;n</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="row">
              <div class="input-field col s12 l6 m6">
                <input value="" id="typeCap" type="text"
                    class="validate white-text" length="90">
                <label class="active white-text" for="cap">Tipo de Capacitaci&oacute;n</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="instituReg" type="text"
                    class="validate white-text" length="20">
                <label class="active white-text" for="ins">Instituci&oacute;n</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="state" type="text"
                    class="validate white-text" length="20">
                <label class="active white-text" for="state">Pa&iacute;s</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <label class="active white-text">A&ntilde;o</label>
                <select class="browser-default black-text" name="year" id="year">
                  <?php
                      for ($i=1980; $i!=2020; $i++){
                        echo "<option value=\"$i\">$i</option>";
                      }
                   ?>
                </select>
              </div>
              <div class="col s12 l12 m12">

              </div>
              <div class="input-field col s12 l6 m6">
                <label class="active white-text">Horas</label>
                <select class="browser-default black-text" name="hours" id="hours">
                  <?php
                      for ($i=1; $i!=381; $i++){
                        echo "<option value=\"$i\">$i</option>";
                      }
                   ?>
                </select>
              </div>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="alert('initSave');"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal black-text">Guardar</a></span>
              </div>
              <div class="col s12 l6 l6">
                <a id="addAnotherReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal black-text">Agregrar otro</a><br>
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
    $('input#typeCap , input#instituReg , input#state').characterCounter();
  });
</script>
<?php include '../php/footerSession.php';?>
