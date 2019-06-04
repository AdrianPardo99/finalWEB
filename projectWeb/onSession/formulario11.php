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
        <center><span class="card-title white-text col s12 l12 m12">Participaci&oacute;n PE</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 m12 l12 white-text" id="form11">
            <div class="input-field col s12 l12 m12">
                <textarea id="participatePE" name="participatePE" class="materialize-textarea white-text" data-length="200" maxlength="200" required></textarea>
              <label for="participatePE" class="white-text">Con un m&aacute;ximo de 200 palabras, rese&ntilde;e cu&aacute;l ha sido su participaci&oacute;n en actividades relevantes del PE</label>
            </div>
          </form>
          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="valid();"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
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
        var logr = $("#participatePE").val();
        if (logr == ""  ){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (logr.length >200 ){
            M.toast({html: 'Cadenas demasiado grandes', classes: 'rounded'});
            return false;
        }
		
		$.ajax({
                method:"post",
                url:"../sqlQuerys/form11.php",
                data:$("#form11").serialize(),
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
        $('textarea#participatePE').characterCounter();
      });
</script>
<?php include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }
?>
