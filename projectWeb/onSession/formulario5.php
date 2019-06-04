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
        <center><span class="card-title white-text col s12 l12 m12">
          Premios o reconocimientos recibidos <br>

        </span> <span style = "font-size: 14px;" class="card-title white-text col s12 l12 m12">Incluir los datos relevantes, nombre del premio, organismo que lo otorga, motivos por se otorga, etc.</span></center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 m12 l12 white-text" id="form5">
            <div class="input-field col s12 l12 m12">
                <textarea id="Logros" name="Logros" class="materialize-textarea white-text" data-length="600" maxlength="600" required></textarea>
              <label for="Logros" class="white-text">Premios y/o reconocimientos recibidos </label>
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
<script>
     function valid(){
        var logr = $("#Logros").val();


        if (logr == ""  ){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (logr.length >600 ){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }

         $.ajax({
                method:"post",
                url:"../sqlQuerys/form5.php",
                data:$("#form5").serialize(),
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
        $('textarea#Logros').characterCounter();
      });
</script>
<?php include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }
?>
