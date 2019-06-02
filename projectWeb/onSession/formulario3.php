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
        <center><span class="card-title white-text col s12 l12 m12">Experiencia Profesional (No Academica)</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" action="#" method="post">
            <div class="input-field col s12 l6 m6">
              <input value="" id="actividadPuesto" type="text"
                class="validate white-text" data-length="90" maxlength="90" required>
                <label class="active white-text" for="actividadPuesto">Actividad o Puesto</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="Org" type="text"
                    class="validate white-text" data-length="90" maxlength="90" required>
                <label class="active white-text" for="Org">Organizaci&oacute;n</label>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="datePrin">
                  <label for="FEDe" class="white-text">De:</label>
                  <input type="text" id="de" class="datepicker white-text" placeholder="Ingrese la Fecha" required>
                </section>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="dateNext">
                  <label for="FA" class="white-text">A:</label>
                  <input type="text" id="a" class="datepicker white-text" placeholder="Ingrese la Fecha" required>
                </section>
              </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
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
     function valid(){
        var act = $("#actividadPuesto").val();
        var ins = $("#Org").val();
        var de = $("#de").val();
        var ah = $("#a").val();

        var Textos = /[A-Za-zÁÉÍÓÚñáéíóúÑ\']+/;

        if (act == "" || ins == "" || de == "" || ah == ""  ){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (act.length >90 || ins.length >90 ){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }
        if (!Textos.test(act) || !Textos.test(ins) ) {
            M.toast({html: 'No deben incluir numeros', classes: 'rounded'});
            return false;
        }
    }
$(document).ready(function() {
    $('input#actividadPuesto , input#Org').characterCounter();
  });
</script>
<?php include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }
?>
