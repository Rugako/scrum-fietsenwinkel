<?php

class Pageing
{

    private $page;
    private $path_pages = __DIR__ . "/../../pages";

    public function __construct()
    {
        $this->page = $_GET['page'];
        $this->buildSite();
    }


    private function buildSite()
    {
        // Header
        require_once __DIR__ . "/../../theme/base/header.php";
        // Get page
        $this->getPage();
        // Footer
        require_once __DIR__ . "/../../theme/base/footer.php";
    }

    private function getPage()
    {
        if (empty(!$this->page)) {
            if (file_exists($this->path_pages . '/' . $this->page . '.php')) {
               require_once $this->path_pages . '/'.$this->page . '.php';
            } else {
                require_once $this->path_pages . '/home.php';
            }
        } else {
            require_once $this->path_pages . '/home.php';
        }
    }

}

?>