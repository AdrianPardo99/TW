<?php
  include 'header.php';
  $var = "login";
  include 'fileNav.php';
?>
<script>
  $(function(){
    $("#button").on("click",function() {
      $("#formulario").validate({
        rules:{
          user:{required:true};/*Aqui me quede*/
        }
      });
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
        <center><span class="card-title white-text">Login</span> </center>
      </div>
      <div class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="row">
              <div class="input-field col s12 l6 m6">
                <input value="" id="user" type="text"
                    class="validate white-text" data-length="20">
                <label class="active white-text" for="user">Username</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="pass" type="password"
                    class="validate white-text" data-length="20">
                <label class="active white-text" for="pass">Password</label>
              </div>
              <div class="col s12 l6 m6">
                <span onclick="alert('initSession');"><a href="#" class="btn-flat light-blue darken-2 waves-effect waves-purple black-text">Iniciar sesion</a></span>
              </div>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 l6">
                <span onclick="alert('initResetPassword');">
                  <a href="#" class="btn-flat light-blue darken-2 waves-effect waves-purple black-text">Olvido su contraseña?</a><br>
                </span>
              </div>
              <div class="col s12 l6 l6">
                <a href="/projectWeb/php/sign.php"
                  class="btn-flat light-blue darken-2 waves-effect waves-purple black-text">No tiene una cuenta?</a>
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
    $('input#user , input#pass').characterCounter();
  });
</script>
<?php include 'footer.php' ?>
