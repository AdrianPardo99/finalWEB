<ul id="dropdown1" class="dropdown-content">
  <li><a href="/projectWeb/onSession/">Home</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario6.php">Formaci&oacute;n</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario1.php">Capacitaci&oacute;n</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario7.php">Actualizaci&oacute;n Disciplinar</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario2.php">Gesti&oacute;n acad&eacute;mica</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario8.php">Productos acad&eacute;micos</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario3.php">Experiencia no acad&eacute;mica</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario9.php">Experiencia ingenieril</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario4.php">Logros no acad&eacute;micos</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario10.php">Membres&iacute;a</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario5.php">Premios recibidos</a></li>
  <li class="divider"></li>
  <li><a href="/projectWeb/onSession/formulario11.php">Participaci&oacute;n PE</a></li>
</ul>

<ul class="navbar-fixed nav nav-justified right hide-on-med-and-down" id="nav-mobile">
<?php
    if ($var == 'onsession') {
      echo "<li><a class=\"dropdown-trigger dropdown-button\" href=\"#\" data-target=\"dropdown1\">Formularios<i class=\"material-icons right\"></i></a></li>
            <li><a href=\"/projectWeb/php/cerrarsesion.php\">Cerrar Sesi&oacute;n</a></li>
            <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul></div></nav>
            <ul id=\"dropdown2\" class=\"dropdown-content\">
              <li><a href=\"/projectWeb/onSession/\">Home</a></li>
              <li><a href=\"/projectWeb/onSession/formulario6.php\">Formaci&oacute;n</a></li>
            </ul>
            <ul class=\"sidenav nav-extended\" id=\"mobile-demo\">
              <li> <a href=\"/projectWeb/onSession/formularios.php\">Formularios</a></li>
              <li><a href=\"/projectWeb/php/cerrarsesion.php\">Cerrar Sesi&oacute;n</a></li
              <li><a href=\"#\" class=\"descHeader black-text\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul>";
    }
    /*<ul id=\"dropdown3\" class=\"dropdown-content\">
    <li><a href=\"/projectWeb/onSession/formulario1.php\">Capacitaci&oacute;n</a></li>
    <li><a href=\"/projectWeb/onSession/formulario7.php\">Actualizaci&oacute;n Disciplinar</a></li>
    <li><a href=\"/projectWeb/onSession/formulario2.php\">Gesti&oacute;n acad&eacute;mica</a></li>
    <li><a href=\"/projectWeb/onSession/formulario8.php\">Productos acad&eacute;micos</a></li>
    <li><a href=\"/projectWeb/onSession/formulario3.php\">Experiencia no acad&eacute;mica</a></li>
    <li><a href=\"/projectWeb/onSession/formulario9.php\">Experiencia ingenieril</a></li>
    <li><a href=\"/projectWeb/onSession/formulario4.php\">Logros no acad&eacute;micos</a></li>
    <li><a href=\"/projectWeb/onSession/formulario10.php\">Membres&iacute;a</a></li>
    <li><a href=\"/projectWeb/onSession/formulario5.php\">Premios recibidos</a></li>
    <li><a href=\"/projectWeb/onSession/formulario11.php\">Participaci&oacute;n PE</a></li>
    </ul>*/
?>
  </div>
</nav>
</header>
    <br><br><br>
<script>
$(document).ready(function(){
   $('.sidenav').sidenav();
   $(".dropdown-trigger").dropdown();
   $(".dropdown-trigger2").dropdown();
 });
</script>
