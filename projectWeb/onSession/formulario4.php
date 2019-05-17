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
        <center><span class="card-title white-text col s12 l12 m12">Logros profesionales
            (no acad&eacute;micos) ultimos 5 a&ntilde;os <br>
            Incluir los datos relevantes, tales como: titulo, autor(es), nombre del logro, relevancia, d&oacute;nde se realiz&oacute;, etc.
          </span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col l12 s12 m12 white-text" action="#" method="post">
            <div class="input-field col s12 l12 m12">
              <textarea id="LogrosPer" class="materialize-textarea white-text" data-length="200"></textarea>
              <label for="LogrosPer" class="white-text">Logros Personales</label>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="alert('initSave');"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
              </div>
              <div class="col s12 l6 l6">
                <a id="Next" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-arrow-right"></i></a><br>
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
        $('textarea#LogrosPer').characterCounter();
      });
</script>
<?php include '../php/footerSession.php';?>
