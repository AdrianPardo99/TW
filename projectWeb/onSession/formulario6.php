<?php include '../php/headerSession.php';?>
<div class="row">
  <!--s -> Mobile
      l -> Desk
      m -> Tablet-->
  <div class="col s12 l2 m12"></div>
  <div class="col s12 l8 m12">
    <div class="card black">
      <div class="row">
        <div class="col s12 l12 m12 white-text"><h1></h1></div>
        <center> <img src="/projectWeb/img/logo.jpg" alt="Logo ESCOM" class="responsive-image logoEscom"></center>
        <center><span class="card-title white-text col s12 l12 m12">Formaci&oacute;n acad&eacute;mica</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="" method="post">
            <div class="input-field col s12 l6 m6">
              <label class="active white-text">Nivel</label>
              <select class="browser-default black-text" name="especilidad" id="especilidad">
                <?php
                    $especial = array( 0 => "Licenciatura" ,
                    1 =>  "Especilidad",2 =>  "Maestría" , 3 => "Doctorado",
                    4 => "Otro");
                    for ($i=0; $i!=5; $i++){
                      echo "<option value=\"$i\">".$especial[$i]."</option>";
                    }
                 ?>
              </select>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="espe" type="text"
                  class="validate white-text" data-length="90">
              <label class="active white-text" for="espe">Especilidad</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="instituReg" type="text"
                  class="validate white-text" data-length="20">
              <label class="active white-text" for="ins">Instituci&oacute;n</label>
            </div>
            <div class="input-field col s12 l6 m6">
              <input value="" id="state" type="text"
                  class="validate white-text" data-length="20">
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
            <div class="input-field col s12 l6 m6">
              <input value="" id="cedula" type="text"
                  class="validate white-text" data-length="20">
              <label class="active white-text" for="cedula">C&eacute;dula profesional</label>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="alert('initSave');"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
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
    $('input#espe , input#instituReg , input#state').characterCounter();
  });
</script>
<?php include '../php/footerSession.php';?>
