<?php
$this->addRoute('home', 'HomeController@index');

function __construct()
    {
        require_once PATH_SITE.'/routes/routes.php'
    }
?>
