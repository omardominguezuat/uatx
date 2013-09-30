$(document).ready(function(){

  $("p").click(function(e){
    var datos=$(this).text();
    var url="showcode.php?nombre="+datos;
    $(location).attr("href",url);
                           
  });

});