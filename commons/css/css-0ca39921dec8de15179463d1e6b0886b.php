<?php 
ob_start ("ob_gzhandler");
header("Content-type: text/css; charset= UTF-8");
header("Cache-Control: must-revalidate");
$expires_time = 1440;
$offset = 60 * $expires_time ;
$ExpStr = "Expires: " . 
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);
                ?>

/*** commons.css ***/

root { display: block;}#biblio_apps{ }#app_info, .app_info{padding: 5px;}#app_info span, .app_info span{text-align: justify;}#app_form{width: 100%;}#app_results, .app_results{width: 100%;}.app_navigation{width: 100%;}.app_navigation table, .app_navigation td{border: 0px;text-align: center;margin: auto;height: 12px;}.app_navigation img{margin: auto;}.app_navlinks{width: 100%;max-width: 100% !important;}.app_navigation table.app_navlinks > td{text-align: left;}.app_navigation table.app_navlinks > td + td{text-align: center;}.app_navigation table.app_navlinks > td + td + td{text-align: right;}.app_navlink{cursor: pointer;}.app_navlink_active{font-weight: bold;font-size: 18px;cursor: pointer;}.loader{text-align: center;}label.error{color:#ff0000;font-weight: bold;display: block;font-weight: bold;}.subtitulo{margin-top: 15px;width: 100%;font-weight: bold;text-align: center;}.resultitem{border-bottom: 1px solid #ccc;padding: 5px;}.authors{width: 100%;display: block;}.copies{width: 100%;display: block;}.journal{border: 1px solid #ccc;width: 100%;display: block;overflow: hidden;}.journal_image{margin: 0;padding: 0;width: 25%;display: block;float: left;text-align: center;}.journal_image > div{width: 100%;height: 50px;min-height: 50px !important;display: block;}.journal_info{margin: 0;padding: 0 0 0 5px;width: 70%;float: left;display: block;}.journal_info_title{width: 100%;display: block;}.journal_info_issn{width: 100%;display: block;}.journal_info_emitions{width: 100%;display: block;}.map{border: 1px solid #ccc;width: 100%;display: block;overflow: hidden;}.map_image{margin: 0;padding: 0;width: 40%;display: block;float: left;text-align: center;}.map_image > div{width: 100%;min-height: 50px !important;display: block;}.map_info{margin: 0;padding: 0 0 0 5px;width: 55%;float: left;display: block;}.map_info_title{width: 100%;display: block;margin: 5px 0 10px 0;}.map_info_biblio{width: 100%;display: block;text-align: justify;}.area{cursor: pointer;}.area h3 { margin: 0; padding: 0.4em; text-align: center; }#dataarea table{width: 100%;}#backarea{width: auto;text-align: right;cursor: pointer;}#backarea .ui-button-text{font-size: 80%;}#selectedarea{width: auto;text-align: left;}.areas_result{background: url(../images/open_book.jpg) no-repeat;padding: 77px 94px 55px 94px;}.areas_result .area{font-size: 0.7em;}.areas_result .area h3{} 