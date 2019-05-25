<?php include '../php/headerSession.php';
  $coun=1;
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
        <center><span class="card-title white-text col s12 l12 m12">Productos acad&eacute;micos relevantes en los &uacute;ltimos cinco (5) a&ntilde;os, relacionados con el PE</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <div id="fomulario8">
            <div class="r-group">
              <form class="col s12 m12 l12 white-text" action="#" method="post">
                <div id="type_container">
                  <div class="input-field col s12 l12 m12">
                    <textarea id="desc" class="materialize-textarea white-text" data-pattern-id="desc++"  name="desc" data-length="200" maxlength="200" required></textarea>
                    <label for="desc" class="white-text">Descripci&oacute;n del producto acad&eacute;mico</label>
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
          <div class="col s12 m12 l12">
            <br>
          </div>
          <form class="col s12 l12 m12" action="#" method="post">
            <div class="col s12 l6 m6">
              <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
            </div>
          </form>
    </div>
  </div>
</div>
<script>
  $('#fomulario8').repeater({
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
    $(document).ready(function() {
      $('textarea#desc , textarea#desc1 , textarea#desc2').characterCounter();
    });
</script>
<?php include '../php/footerSession.php';?>
