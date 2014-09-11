<?php
/**
 * Página inicial de la aplicación de consulta de ejemplares en OJS
 *
 * @author David Andrés Manzano - damanzano
 * @since 2012-04-16
 *
 * @method Este aplicación se comporta como un servicio web el cual debe ser llamado a travéz de la url http://www.icesi.edu.co/revistas/consulta_ejemplares?journal=XX
 * donde XX corresponde al idenficador de la revista que se desea consultar en OJS.
 * 
 * Actualmete se cuenta con 4 revistas cuyos código se muestran a continuación:
 * 1 Estudio Gerenciales
 * 2 Revista CS
 * 3 Publicaciones Icesi
 * 4 Sistemas y telemática
 */
include_once 'Config.php';

/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/

$journal=0;
if (isset($_GET['journal']) and $_GET['journal']!=null) {
    $journal=$_GET['journal'];
}

$treeCollapsed=true;
if (isset($_GET['tc']) and $_GET['tc']!=null) {
    $treeCollapsed=$_GET['tc'];
}

$style="";
if (isset($_GET['style']) and $_GET['style']!=null) {
    $style=$_GET['style'];
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Consulta de Ejemplares</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/jquery.treeview.css" rel="stylesheet" />
        <?php if($style!=""){?>
            <link rel="stylesheet" href="css/journals/<?php echo $style; ?>.css">
        <?php } ?>
        

	<script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
    <body>
        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
        <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        <header><h1>Consulta de ejemplares</h1></header>
        <div role="main">
            
            <?php
                if($journal!=0){
            ?>
                <div id="treecontrol">
                <a href="#" title="Oculta todas las comunidades">Ocultar todo</a>
                |
                <a href="#" title="Expande todas las comunidades">Mostrar todo</a>
                </div>
                <ul id="journal" class="treeview"></ul>
            <?php
                    //include_once ("view/Treeview.php"); 
                }else{
            ?>
                <span>No ha elegido una revista para la cual quiere consultar los ejemplares </span>
            <?php
                }
            ?>
        </div>

        <!-- JavaScript at the bottom for fast page loading -->

        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
        
        <!-- Needed for the bussines scripts -->
        <script>
            var ojs="<?php echo Config::$ojs; ?>";
            var appRoute="<?php echo Config::$app_route; ?>";
            var journal=<?php echo $journal; ?>;
            var treeCollapsed=<?php echo $treeCollapsed;?>;
        </script>
        
        <!-- scripts concatenated and minified via build script -->
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
        <!-- end scripts -->

        <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
             mathiasbynens.be/notes/async-analytics-snippet -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
