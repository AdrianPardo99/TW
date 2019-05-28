<ul class="nav nav-justified right hide-on-med-and-down " id="nav-mobile">
<?php
    if ($var == 'onsession') {
      echo "<li><a href=\"/projectWeb/php/cerrarsesion.php\">Cerrar Sesi&oacute;n</a></li>
            
            <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul></div></nav>
            <ul class=\"sidenav\" id=\"mobile-demo\">
              <li><a href=\"/projectWeb/php/cerrarsesion.php\">Cerrar Sesi&oacute;n</a></li>
              
              <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul>";
    }
?>
</header>
    <br><br><br>
<script>
$(document).ready(function(){
   $('.sidenav').sidenav();
 });
</script>
