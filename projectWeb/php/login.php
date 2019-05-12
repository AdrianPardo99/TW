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
<div class="col-xs-12 col-md-12 col-sm-12"><h1><br><br><br><br></h1></div>
<div id="contenedor" class="row col-xs-12 col-md-12 col-sm-12">
    <div id="Login">
        <img id="avatar" src="/projectWeb/img/logo.jpg" alt="Logo escom">
        <h1>Ingrese</h1>
        <form class="col-xs-12 col-md-12 col-sm-12" action="" id="formulario" method="post">
            <!-- username -->
            <label for="Idusuario">ID-usuario</label>
            <input type="text" placeholder="Ingrese ID-usuario" name="user" id="user" maxlength="150" class="required">
            <!-- Contraseña -->
            <label for="Contraseña">Contraseña</label>
            <input type="password" placeholder="Ingrese Contraseña" name="password" id="pass" maxlength="150" class="required">
        </form>
        <form class="col-xs-12 col-md-12 col-sm-12">
          <input type="submit" name="button" id="button" value="Ingrese">
          <a href="#">Olvido su contraseña?</a><br>
          <a href="#">No tiene una cuenta?</a>
        </form>
    </div>
</div>
<br><br><br><br><br>
<?php include 'footer.php' ?>
