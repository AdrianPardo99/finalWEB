<ul class="nav nav-justified right hide-on-med-and-down " id="nav-mobile">
<?php
    if ($var == 'index') {
      echo "<li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
            <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
            <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul></div></nav>
            <ul class=\"sidenav\" id=\"mobile-demo\">
              <li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
              <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
              <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul>";
    }elseif ($var == 'sing') {
      echo "<li><a href=\"/projectWeb/\">Home</a></li>
            <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
            <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul></div></nav>
            <ul class=\"sidenav\" id=\"mobile-demo\">
              <li><a href=\"/projectWeb/\">Home</a></li>
              <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
              <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul>";
    }elseif ($var == 'login'){
      echo "<li><a href=\"/projectWeb/\">Home</a></li>
            <li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
            <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul></div></nav>
            <ul class=\"sidenav\" id=\"mobile-demo\">
              <li><a href=\"/projectWeb/\">Home</a></li>
              <li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
              <li><a href=\"#\" class=\"descHeader\" onclick=\"M.toast({html: 'Esta aplicación fue creada con el fin de agilizar la actualización de los documentos que solicita CACEI'})\">Description</a></li>
            </ul>";
    }elseif ($var == 'description') {
      echo "<li><a href=\"/projectWeb/\">Home</a></li>
            <li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
            <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
            </ul></div></nav>
            <ul class=\"sidenav\" id=\"mobile-demo\">
              <li><a href=\"/projectWeb/\">Home</a></li>
              <li><a href=\"/projectWeb/php/sign.php\">Sing-up</a></li>
              <li><a href=\"/projectWeb/php/login.php\">Login</a></li>
            </ul>";
    }
?>
</header>
<script>
$(document).ready(function(){
   $('.sidenav').sidenav();
 });
</script>
