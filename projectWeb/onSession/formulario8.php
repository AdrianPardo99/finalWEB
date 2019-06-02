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
        <center><span class="card-title white-text col s12 l12 m12">Productos acad&eacute;micos relevantes en los &uacute;ltimos cinco (5) a&ntilde;os, relacionados con el PE</span> </center>
      </div>
      <div style="border-radius: 20px;" class="card-action">
        <div class="row">
          <form class="col s12 m12 l12 white-text" action="#" method="post">
            <div id="type_container">
              <div class="input-field col s12 l12 m12">
                <textarea id="desc" class="materialize-textarea white-text" data-length="200" maxlength="200" required></textarea>
                <label for="desc" class="white-text">Descripci&oacute;n del producto acad&eacute;mico</label>
              </div>
              <div class="col s12 l12 m12">
                <a class="add-type btn-flat light-blue darken-2 waves-effect waves-purple white-text" href="javascript: void(0)" tiitle="Click to add more"><i class="fas fa-plus"></i></a>
              </div>
            </div>
          </form>
          <form class="col s12 m12 l12 white-text" action="#" method="post">
            <div id="type-container" class="hide">
              <div class="type-row" id="">
                <div class="input-field col s12 l12 m12">
                  <textarea id="desc" class="materialize-textarea white-text" data-length="200"  maxlength="200" required></textarea>
                  <label for="desc" class="white-text">Descripci&oacute;n del producto acad&eacute;mico</label>
                </div>
                <div class="col s12 l12 m12">
                  <a class="remove-type btn-flat light-blue darken-2 waves-effect waves-purple white-text" targetDiv="" data-id="0" href="javascript: void(0)"><i class="fas fa-ban"></i></a>
                </div>
              </div>
            </div>
          </form>
          <div class="col s12 m12 l12">
            <br>
          </div>
          <form class="col s12 l12 m12" action="#" method="post">
            <div class="row">
              <div class="col s12 l6 m6">
                <span onclick="alert('initSave');"><a id="saveReg" href="#" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="far fa-save"></i></a></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    jQuery(document).ready(function () {
      console.log("Aqui")
        var doc = $(document);
        jQuery('a.add-type').die('click').live('click', function (e) {
            e.preventDefault();
            var content = jQuery('#type-container .type-row'),
                element = null;
            for (var i = 0; i < 1; i++) {
                element = content.clone();
                var type_div = 'teams_' + jQuery.now();
                element.attr('id', type_div);
                element.find('.remove-type').attr('targetDiv', type_div);
                element.appendTo('#type_container');
            }
        });
        jQuery(".remove-type").die('click').live('click', function (e) {
            var didConfirm = confirm("Are you sure You want to delete");
            if (didConfirm == true) {
                var id = jQuery(this).attr('data-id');
                var targetDiv = jQuery(this).attr('targetDiv');
                //if (id == 0) {
                //var trID = jQuery(this).parents("tr").attr('id');
                jQuery('#' + targetDiv).remove();
                // }
                return true;
            } else {
                return false;
            }
        });
    });
    $(document).ready(function() {
        $('textarea#desc').characterCounter();
      });
</script>
<?php include '../php/footerSession.php';
        }else{
        header("location:../php/login.php");
    }
?>
