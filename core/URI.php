<?php

    class URI
    {
        private static $instance = NULL;
        private static $params = array();

        public function __construct()
        {
            $fullpath = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
            self::$params = explode("/",$fullpath);
        }

        public static function get($key)
        {

            if($key >= count(self::$params))
                return "";
            return self::$params[(int)$key];
        }

        public static function modul()
        {
            if(self::get(2) != "")
            {
                return self::get(2);
            }
            return "";
        }
        public static function action()
        {
            if(self::get(3) != "")
            {
                return self::get("3");
            }
            return "index";
        }

        public static function instance()
        {
            if(!self::$instance)
            {
                self::$instance = new URI();
            }
            return self::$instance;
        }
    }

?>