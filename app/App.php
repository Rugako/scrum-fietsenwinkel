<?php

class App
{

    public function __construct()
    {
        $this->includes();
        $this->init();
    }


    private function includes()
    {
        require_once __DIR__ . "/config/Config.php";
        require_once __DIR__ . "/database/Database.php";
        require_once __DIR__ . "/pageing/Pageing.php";
    }


    private function init()
    {
        session_start();
        new Database();
        new Pageing();
    }


}

?>