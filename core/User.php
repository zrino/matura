<?php

    class User
    {
        private static $instance = NULL;
        private static $data = array();
        private static $DB =NULL;

        private function __construct()
        {
            self::$DB = DB::instance();
            parent::Application();
        }

        public static function init()
        {
            if(!self::$instance)
            {
                self::login();
                $_SESSION[COOKIE_USER] = self::$data;
            }
            self::$data = $_SESSION[COOKIE_USER];
        }

        public static function generateToken($id=Conf::KEY, $username=Conf::KEY, $grupa=Conf::KEY)
        {
            return sha1(session_id().EY.$id.$username.$grupa.md5(@$_SERVER['REMOTE_ADDR']).md5(@$_SERVER['HTTP_USER_AGENT']));
        }

        public static function login()
        {
            if(isset($_SESSION[COOKIE_USER]))
            {
                return;
            }
            if(POST("username")!="" && POST("password")!="")
            {
                $username =in(POST("username"));
                $password = in(password(POST("password")));

                $upit = "SELECT * FROM users WHERE username=$username AND password=$password LIMIT 1";
                $user = self::$DB->fetch($upit);
                if(isset($user["id"]))
                {
                    unset($user["password"]);
                    self::$data = $user;
                    $_SESSION[COOKIE_USER] = self::$data;
                }
                else
                {
                    error_404();
                    die();
                }
            }
        }

        public static function initialCheck()
        {
            if (!isset($_SESSION[COOKIE_USER]))
            {
                $_SESSION[COOKIE_USER] = self::generateToken();
                return;
            }
            else
                {
                $tmpToken = self::generateToken();
                if ($_SESSION[COOKIE_USER]["token"] == $tmpToken)
                {
                    self::$data = $_SESSION[COOKIE_USER];
                }
                else
                {
                    self::$data = array();
                    $_SESSION[Conf::AUTH] = array("token" => self::generateToken());
                }
            }
        }




    }



?>