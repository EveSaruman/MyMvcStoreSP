<?php
namespace views;
class HomeView
{
    function __construct($products)
    {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../public/css/style.css">
            <title>Главная страница</title>
        </head>
        <body>
        <?php

        include "./templates/header.html";
        $this->banner();
        $this->catalog($products);
        include "./templates/footer.html";
        ?>

        </body>
        </html>
        <?php
    }

    function catalog($products)
    {
     
        include "./views/catalog.php";
       
    }
}