

             <?php
   
               
    include("conexion.php");

   if(isset($_REQUEST['inputName']) && !empty($_REQUEST['inputName'])&&     

    isset($_REQUEST['text']) && !empty($_REQUEST['text'])) 
    {
      $con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
      mysql_select_db($db,$con)or die("problemas al conectar la bd");



   
      mysql_query("INSERT INTO prueba(nombre,codigo,fecha,hora) 
VALUES ('$_REQUEST[inputName]','$_REQUEST[text]',curdate(),curtime())",$con);
Include("newcode.php");  
     echo "<h1> DATOS GUARDADOS EXITOSAMENTE...!!</h1>";
   }
 else
   {
    Include("newcode.php");
     echo "<h1>NO SE GUARDARON LOS DATOS</h1>";
    }

?>
  