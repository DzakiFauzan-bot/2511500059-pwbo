<?php
class app {
    public function __construct()
    {
     $url = $this -> parseURL ();
     var_dump($_GET);
    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            return $url;
        }
    }
}