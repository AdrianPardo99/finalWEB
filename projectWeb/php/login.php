<?php
  include 'header.php';
  $var = "login";
  include 'fileNav.php';
?>
<script>
  $(function(){
    $("#but").click(
    function() {
        var user = $("#user").val();
        var pass = $("#pass").val();
        var patron = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,20}$/;

        if (user == "" || pass == ""){
            M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
            return false;
        }
        if (user.length > 20 ){
          M.toast({html: 'El nombre del usuario es muy grande', classes: 'rounded'});
            return false;
        }
        if (pass.length > 20 || pass.length < 8){
          M.toast({html: 'La contraseña es de una longitud incorrecta', classes: 'rounded'});
            return false;
        }
        if (!patron.test(pass)){
          M.toast({html: 'La contraseña tiene un formato invalido, debe tener al menos un numero una letra miniscula y mayuscula', classes: 'rounded'});
            return false;
        }
        $.ajax({
          method:"post",
          url:"LOG.php",
          data:$("#form").serialize(),
          cache:false,
          success:function(resp){
            var respAX = JSON.parse(resp);
            if (respAX.resultado == 0){
              M.toast({html: respAX.mensaje, classes: 'rounded'});
            }else if (respAX.resultado == 1){
              M.toast({html: respAX.mensaje, classes: 'rounded'});
            }
          }
        });
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
        <center><span class="card-title white-text">Login</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">

          <form class="col s12 l12 m12 white-text"  id="form" autocomplete="off">
            <div class="row">
              <div class="input-field col s12 l6 m6">
                <input value="" id="user" name="user" type="text"
                    class="validate white-text" data-length="20"  maxlength="20" required>
                <label class="active white-text" for="user">Username</label>
              </div>
              <div class="input-field col s12 l6 m6">
                <input value="" id="pass" name="pass" type="password"
                    class="validate white-text" data-length="20"  maxlength="20" required>
                <label class="active white-text" for="pass">Password</label>
              </div>
              <div class="col s12 l6 m6">
                <input type="submit" id="but" style="font-size:16px; color: 000;" class="btn-flat light-blue darken-2 waves-effect waves-purple white-text" value="Ingrese">
              </div>
            </div>
          </form>

          <form class="col col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 l6">
                <a href="/projectWeb/php/sign.php"
                  class="btn-flat light-blue darken-2 waves-effect waves-purple white-text">No tiene una cuenta?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('input#user , input#pass').characterCounter();
  });
</script>
<?php include 'footer.php' ?>
