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
        <center><span class="card-title white-text col s12 l12 m12">Experiencia en dise&ntilde;o ingenieril</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <div id="fomulario9">
            <div class="r-group">
              <form class="col s12 m12 l12 white-text" action="#" method="post">
                <div id="type_container">
                  <div class="input-field col s12 l6 m6">
                    <label for="org" class="active white-text">Organismo</label>
                    <input value="" id="org" type="text" data-pattern-id="org++"
                      class="validate white-text" data-length="90" maxlength="90" required>
                  </div>
                  <div class="input-field col s12 l6 m6">
                    <label for="year" class="active white-text">A&ntilde;o</label  >
                  <input value="" id="year" type="text" data-pattern-id="year++"
                      class="validate white-text" data-length="90" maxlength="90" required>
                  </div>
                  <div class="input-field col s12 l6 m6">
                    <label for="experience" class="active white-text">Nivel de experiencia</label>
                    <input value="" id="experience" type="text" data-pattern-id="experience++"
                      class="validate white-text" data-length="90" maxlength="90" required>
                  </div>
                </div>
              </form>
              <div class="col m10 l10 s9"></div>
              <div class="col m2 l2 s3">
                <!-- Add a remove button for the item. If one didn't exist, it would be added to overall group -->
                <button class="r-btnRemove btn btn-flat light-blue darken-2 waves-effect waves-purple white-text"><i class="fas fa-ban"></i></button>
              </div>
            </div>
            <div class="col m10 l10 s9"></div>
            <div class="col m2 l2 s3">
              <a class="r-btnAdd btn btn-flat light-blue darken-2 waves-effect waves-purple white-text"><i class="fas fa-plus"></i></a>
            </div>
          </div>
          <form class="col s12 l12 m12" action="#" method="post">
              <div class="col s12 l6 m6">
                <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
    function valid(){
        var org = $("#org").val();
        var ano = $("#year").val();
        var exp = $("#experience").val();
        var Textos = /[A-Za-zÁÉÍÓÚñáéíóúÑ\']+/;
        if (org == "" || ano == "" || exp == "" ){
            alert("Todos los campos deben estar llenos");
            return false;
        }
        if (org.length >90 || ano.length >90 || exp.length >90){
            alert("Cadenas demaciado grandes");
            return false;
        }
    }
    $('#fomulario9').repeater({
      btnAddClass: 'r-btnAdd',
      btnRemoveClass: 'r-btnRemove',
      groupClass: 'r-group',
      minItems: 1,
      maxItems: 0,
      startingIndex: 0,
      showMinItemsOnLoad: true,
      reindexOnDelete: true,
      repeatMode: 'append',
      animation: 'fade',
      animationSpeed: 400,
      animationEasing: 'swing',
      clearValues: true
    });
    function initSave(){
      l=document.getElementById('saveReg');
      console.log("Saving data");
    }
    $(document).ready(function() {
        $('input#org , input#year , input#experience').characterCounter();
      });
</script>
<?php include '../php/footerSession.php';?>
