<?php


class Application
{
    private $DB;

    public function __construct()
    {
        $DB = DB::instance();
    }
}


?>