<?php 

	function dd($x)
	{
		echo "<pre>";
		print_r($x);
		echo "</pre>";
	}

	function error404()
    {
        echo "ERROR 404";
    }

    function loadView($module,$file)
    {
        $INC_DAT=BASEDIR."/modules/".$module ."/".$module.".View.".$file.".php";
        if(file_exists($INC_DAT))
        {
            include($INC_DAT);
        }

    }

    function setTemplate($file)
    {
        $INC_DAT = TEMPLATEROOT . "/Template.".strtolower($file).".php";
        if(file_exists($INC_DAT))
        {
            include($INC_DAT);
        }
        else
            echo "can't find template";
    }

    function token($string)
    {
        return hash("md5",$string);
    }

    function POST($key)
    {
        if(isset($_POST[$key]))
            return $_POST[$key];
        return "";
    }
    function GET($key)
    {
        if(isset($_GET[$key]))
            return $_GET[$key];
        return "";
    }

    function in($val,$type="t")
    {
        switch ($type)
        {
            case "t":
                return "('".$val."')";
        }
        return $val;
    }


?>