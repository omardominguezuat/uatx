$(document).ready(function(){

  $("p").click(function(e){
    var datos=$(this).text();
  
    var url="SegundaConsulta2.php?fecha="+datos;
    $(location).attr("href",url);
                           
  });

});