<?php

require_once("Conf.php");
require_once("core/DB.php");
require_once("core/Common.php");
require_once("core/Application.php");
require_once("core/Service.php");
require_once("core/URI.php");
require_once("core/Content.php");
require_once("core/User.php");

session_start();

$DB = DB::instance();
$URI = URI::instance();
$CONTENT = CONTENT::instance();
$USER = USER::init();

$S = URI::modul();
$A = URI::action();

if($S == "")
{
    $S = DEFAULT_CONTROLLER;
    $A = DEFAULT_ACTION;
}

try
{

    $INC_DAT=BASEDIR."/modules/".strtolower($S)."/".ucfirst(strtolower($S)).".php";
    if(file_exists($INC_DAT))
    {
        require_once($INC_DAT);
        $Service = new $S;

        if(method_exists($Service,$A))
        {
            ob_start();
            call_user_func(array($Service,$A));
            Content::set("CONTENT",ob_get_clean());

            if(file_exists(TEMPLATEROOT ."/".ucfirst(TEMPLATE_NAME).".".Content::get("TEMPLATE_PAGE").".php"))
            {
                require_once(TEMPLATEROOT ."/".ucfirst(TEMPLATE_NAME).".".Content::get("TEMPLATE_PAGE").".php");
            }
            //echo Content::get("CONTENT");
            //dd(TEMPLATEROOT ."/".TEMPLATE_NAME.".".Content::get("TEMPLATE_PAGE").".php");
        }
        else
        {
            error404();
            die();
        }
    }
}
catch (Exception $e)
{
    echo 'NEĆEŠ RAZBOJNIČE - controler:"'.$S.'", action:"'.$A.'"';
}







?>