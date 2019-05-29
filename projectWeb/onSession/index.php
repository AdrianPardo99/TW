<?php
include '../php/headerSession.php';
$var = "onsession";
include '../php/onsesionfilenav.php';
session_start();
if($_SESSION["ok"] == 1){?>

<?php
include '../php/footerSession.php';
}else{
  header("location:../php/login.php");
}?>
