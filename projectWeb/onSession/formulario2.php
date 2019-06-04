<?php include '../php/headerSession.php';
$var = "onsession";
include '../php/onsesionfilenav.php';
session_start();
if($_SESSION["ok"] == 1){
?>
<script>
    function valid(){
        var act = $("#activity").val();
        var ins = $("#instituReg").val();
        var de = $("#de").val();
        var ah = $("#a").val();

        var Textos = /[A-Za-zÁÉÍÓÚñáéíóúÑ\']+/;

        if (act == "" || ins == "" || de == "" || ah == ""  ){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (act.length >90 || ins.length >20 ){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }
        if (!Textos.test(act) || !Textos.test(ins) ) {
            M.toast({html: 'No deben incluir numeros', classes: 'rounded'});
            return false;
        }
        $.ajax({
                method:"post",
                url:"../sqlQuerys/form2.php",
                data:$("#forsig").serialize(),
                cache:false,
                success:function(resp){
                        var respAX = JSON.parse(resp);
                        if (respAX.resultado == 0){
                          M.toast({html: respAX.mensaje, classes: 'rounded'});
                        }else if (respAX.resultado == 1){
                          M.toast({html: respAX.mensaje, classes: 'rounded'});
                            window.location.replace("formularios.php");
                        }
                }

            });


    }
$(document).ready(function() {
    $('input#activity , input#instituReg , input#state').characterCounter();
    $('select').formSelect();

    $('.datepicker').datepicker({
                   format: 'yyyy/mm/dd',
                   minDate: new Date(1930,12,1),
                   maxDate: new Date(2090,11,31),
                    i18n:{
                        months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                        monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                        weekdays: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                        weekdaysShort:['Dom','Lun','Mar','Mier','Jue','Vie','Sab'],
                        weekdaysAbbrev:['D','L','M','M','J','V','S'],
                    }
                });
  });
</script>

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
        <center><span class="card-title white-text col s12 l12 m12">Gesti&oacute;n Acad&eacute;mica</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 l12 m12 white-text" id="forsig">
            <div class="row">
              <div class="input-field col s12 l6 m6">
                <input value="" id="activity" name="activity" type="text"
                    class="validate white-text" data-length="90" maxlength="90" required>
                <label class="active white-text" for="activity">Actividad o Puesto</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="instituReg" name="instituReg" type="text"
                    class="validate white-text" data-length="20" maxlength="20" required>
                <label class="active white-text" for="ins">Instituci&oacute;n</label>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="datePrin">
                  <label for="FEDe" class="white-text">De:</label>
                  <input type="text" id= "de" name= "de" class="datepicker white-text" placeholder="Ingrese la Fecha" required>
                </section>
              </div>
              <div class="col s12 m6 l6 black-text">
                <section id="dateNext">
                  <label for="FA" class="white-text">A:</label>
                  <input type="text" id="a" name="a" class="datepicker white-text" placeholder="Ingrese la Fecha" required>
                </section>
              </div>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
              </div>
              <div class="col s12 l6 l6">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
     include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }
?>
