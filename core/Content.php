<?php

    class Content
    {
        static private $instance = NULL;
        static private $values = array();

        private function __construct()
        {
        }

        public static function instance()
        {
            if(!self::$instance)
            {
                self::$instance = new Content();
            }
            return self::$instance;
        }

        public static function get($key)
        {
            if(isset(self::$values[strtolower($key)]))
                return self::$values[strtolower($key)];
            return "";
        }

        public static function set($key,$value)
        {
            self::$values[strtolower($key)] = $value;
        }



    }




?>