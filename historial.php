<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="author" lang="en" content="All: Your name [www.url.com]; e-mail: info@url.com" />
    <meta name="copyright" lang="en" content="Webdesign: Nuvio [www.nuvio.cz]; e-mail: ahoj@nuvio.cz" />

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="css/print.css" />

    <title>Ver C&oacute;digo</title>
     <script language="Javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>
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

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="./" title="[Go to homepage]"><img src="tmp/logo.png" alt="" /></a></h1>
        <hr class="noscreen" />

        <!-- Navigation -->
        <div id="nav">
            <a href="index.php" id="nav-active">Cerrar sesi&oacuten</a> <span>|</span>
           
        </div> <!-- /nav -->

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul>
            <li id="tray-active"><a href="mainpage.php">Bienvenidos</a></li> <!-- Active page -->
            <li><a href="newcode.php">Nuevo C&oacutedigo</a></li>
            <li><a href="firstConsulta.php">C&oacutedigos Guardados</a></li>
        </ul>
        
        <!-- Search -->
        <div id="search" class="box">
            <form action="#" method="get">
                <div class="box">
                    <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" name="" value="Buscar: " /></div>
                    <div id="search-submit"><input type="image" src="design/search-submit.gif" value="OK" /></div>
                </div>
            </form>
        </div> <!-- /search -->

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Promo -->
    <div id="col-top"></div>
    <div id="col" class="box">


<form>
   
 <div id="col-browsr"></div> 


    <div id="col-text">
                      
         <?php

include_once("conexion.php");
$conexion= mysql_connect($host,$user,$pw);
mysql_select_db($db,$conexion);
if (empty($_REQUEST['ide'])){ 
      echo "Debe especificar una cadena a buscar";  
}


else{
$cadena ="SELECT codigo FROM prueba WHERE id='$_REQUEST[ide]'"; 
$tabla = mysql_query($cadena, $conexion) or die ("problema con cadena de conexion<br><b>" . mysql_error()."</b>");
$campos = mysql_num_rows($tabla);
$cadena = mysql_query($cadena, $conexion);



while ($campos = mysql_fetch_array($tabla)){
    
   echo "<textarea id=\"example_1\"  name=\"text\"  style=\"height: 350px; width: 100%;\">"
   .$campos['codigo'].
  "</textarea>";
         
   }

}

?>


     
            
        </div> <!-- /col-text -->
    
    </div> <!-- /col -->
    <div id="col-bottom"></div>

    <hr class="noscreen" />
    </form>
    
<!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right"><a href="index.php">P&aacutegina Web</a> presentada por <a href="index.php">5to Semestre de Ingenier&iacutea en Computaci&oacuten</a></p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2013 <strong>Universidad Aut&oacutenoma de Tlaxcala</strong>, All Rights Reserved &reg;</p>

    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>