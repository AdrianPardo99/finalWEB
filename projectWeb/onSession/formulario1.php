<?php
    include '../php/headerSession.php';
    $var = "onsession";
    include '../php/onsesionfilenav.php';
    session_start();
    if($_SESSION["ok"] == 1){
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
        <center><span class="card-title white-text col s12 l12 m12">Capacitaci&oacute;n</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="row">
              <div class="input-field col s12 l6 m6">
                <input value="" id="typeCap" type="text"
                    class="validate white-text" data-length="90" maxlength="90" required placeholder="Tipo de Capacitaci&oacute;n :">
                <label class="active white-text" for="cap">Tipo de Capacitaci&oacute;n</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="instituReg" type="text"
                    class="validate white-text" data-length="20" maxlength="20" required placeholder="Instituci&oacute;n :">
                <label class="active white-text" for="ins">Instituci&oacute;n</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="state" type="text"
                    class="validate white-text" data-length="20" maxlength="20" required placeholder="Pa&iacute;s :">
                <label class="active white-text" for="state">Pa&iacute;s</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <label class="active white-text">A&ntilde;o</label>
                <select style="border: none; border-bottom: 1px solid #fff;  background: black; " class="browser-default white-text" name="year" id="year">
                  <?php
                      for ($i=1980; $i!=2020; $i++){
                        echo "<option style=\"color:white;\" value=\"$i\">$i</option>";
                      }
                   ?>
                </select>
              </div>
              <div class="col s12 l12 m12">

              </div>
              <div class="input-field col s12 l6 m6">
                <label class="active white-text">Horas</label>
                <select style="border: none; border-bottom: 1px solid #fff;  background: black; " class="browser-default white-text" name="hours" id="hours">
                  <?php
                      for ($i=1; $i!=381; $i++){
                        echo "<option style=\"color:white;\" value=\"$i\">$i</option>";
                      }
                   ?>
                </select>
              </div>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
              </div>
              <div class="col s12 l6 l6">
                <a id="addAnotherReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Agregrar otro</a><br>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    function valid(){
        var cap = $("#typeCap").val();
        var ins = $("#instituReg").val();
        var pais = $("#state").val();
        var ano = $("#year").val();
        var horas = $("#hours").val();


        var Textos = /[A-Za-zÁÉÍÓÚñáéíóúÑ\']+/;

        if (cap == "" || ins == "" || pais == "" || ano == "" || horas == "" ){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (cap.length >90 || ins.length >20 || pais.length >20 ){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }
        if (!Textos.test(cap) || !Textos.test(ins) || !Textos.test(pais) ) {
            M.toast({html: 'No deben incluir numeros', classes: 'rounded'});
            return false;
        }
    }
$(document).ready(function() {
    $('input#typeCap , input#instituReg , input#state').characterCounter();
  });
</script>
<?php include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }

?>
