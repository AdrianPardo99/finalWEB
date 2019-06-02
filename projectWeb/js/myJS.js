$(document).ready(function(){
    $('.datepicker').datepicker({
       format: 'dd/mm/yyyy',
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
$(document).ready(function(){
  $('select').formSelect();
});
