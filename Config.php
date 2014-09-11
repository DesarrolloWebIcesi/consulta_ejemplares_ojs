<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author 1130619373
 */
class Config{

    // Url of ojs's index file
    public static $ojs="http://localhost/<ojs_name>/index.php";
    // Base url of this aplicaction
    public static $app_route="http://localhost/<ojs_name>/<this_app_name>/";
    // Database user
    public static $bd_usuario = "<database_user>";
    // Database pass
    public static $bd_contrasena = "<database_password>";
    // Database host
    public static $bd_servidor = "<database_host>";
    // Database schema
    public static $bd_esquema = "<database_schema>";
    // Session duration
    public static $maximoInactivo = 43200; //en segundos
    // This application server path
    public static $ruta_aplicacion = "<server_path>";
    
    }

?>
