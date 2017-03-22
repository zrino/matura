<?php

    class Kviz extends Application
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {

            CONTENT::set("TEMPLATE_PAGE","index");
            loadView("kviz","index");
        }

    }


?>