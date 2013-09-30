<html>
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Shared Source</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script language="Javascript" type="text/javascript" src="../edit_area/edit_area_full.js"></script>
    <script language="Javascript" type="text/javascript">
        // initialisation
        editAreaLoader.init({
            id: "example_1" // id of the textarea to transform      
            ,start_highlight: true  // if start with highlight
            ,allow_resize: "both"
            ,allow_toggle: false
            ,word_wrap: true
            ,language: "en"
            ,syntax: "php"
            ,syntax_selection_allow: "html,js,php,python,vb,xml,c,cpp,sql,basic,pas,brainfuck"  
        });
        
        
    
        
        
        // callback functions
        function my_save(id, content){
            alert("Here is the content of the EditArea '"+ id +"' as received by the save callback function:\n"+content);
        }
        
        function my_load(id){
            editAreaLoader.setValue(id, "The content is loaded from the load_callback function into EditArea");
        }
        
        function test_setSelectionRange(id){
            editAreaLoader.setSelectionRange(id, 100, 150);
        }
        
        function test_getSelectionRange(id){
            var sel =editAreaLoader.getSelectionRange(id);
            alert("start: "+sel["start"]+"\nend: "+sel["end"]); 
        }
        
        function test_setSelectedText(id){
            text= "[REPLACED SELECTION]"; 
            editAreaLoader.setSelectedText(id, text);
        }
        
        function test_getSelectedText(id){
            alert(editAreaLoader.getSelectedText(id)); 
        }
        
        function editAreaLoaded(id){
            if(id=="example_2")
            {
                open_file1();
                open_file2();
            }
        }
        
        function open_file1()
        {
            var new_file= {id: "to\\ é # € to", text: "$authors= array();\n$news= array();", syntax: 'php', title: 'beautiful title'};
            editAreaLoader.openFile('example_2', new_file);
        }
        
        function open_file2()
        {
            var new_file= {id: "Filename", text: "<a href=\"toto\">\n\tbouh\n</a>\n<!-- it's a comment -->", syntax: 'html'};
            editAreaLoader.openFile('example_2', new_file);
        }
        
        
        
        function toogle_editable(id)
        {
            editAreaLoader.execCommand(id, 'set_editable', !editAreaLoader.execCommand(id, 'is_editable'));
        }
    
    </script>
    </head>
    <body>
      <form action="insertar.php" method="get">
    <div id="bg">
      <div id="outer">
        <div id="header">
          <div id="logo">
            <h1>
              <a href="#">Shared Source</a>
            </h1>
          </div>
          <div id="nav">
           
            <br class="clear" />
          </div>
        </div>
        <div id="banner">
         <img src="images/ings.jpg" width="1000" height="150" alt="" />
        </div>
        <div id="main">
          <div id="sidebar">           
          </div>
          <div id="content">
            <div id="box1" align="center">
              
              <h2 align="center">
                <?php
include_once("conexion.php");
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);

$query="SELECT codigo FROM prueba WHERE nombre='$_REQUEST[nombre]'";
$listado = mysql_query($query) or die(mysql_error());   


while($registro = mysql_fetch_assoc($listado))
{
   echo "<textarea id=\"example_1\"  name=\"text\"  cols=\"100\" rows=\"50\">"
   .$registro['codigo'].
  "</textarea>";





  
}

?>
            <br class="clear" />
            
          </div>
    
        </div>
        <br/>
        <br/>
        <div id="footer">
          <div id="footerSidebar">
            5to Semestre
          </div>
          <div id="footerContent">
            Compartir Codigo Fuente de Programas Atraves se una Red Local sin Necesidad de Acceso a Internet.
          </div>
          <br class="clear" />
        </div>
      </div>
      <div id="copyright">
        | &copy; Ingenieria 2011 |
      </div>
    </div>
    </form>
    </body>
</html>