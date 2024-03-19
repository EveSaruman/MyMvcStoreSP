<?php

namespace views;

class ProductView
{
    function __construct($item)
    {
        ?>
        <!doctype html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="../public/css/style.css">
            <link rel="stylesheet" href="../public/css/product.css">
            <title><?= $item['name'] ?></title>
        </head>
        <body>
        <div class="container">
            <?php

            include "./templates/header.html";
            ?>
            <div class="box product-box">
            <?
            $this->card($item);
            ?>
            </div>
            <?
            include "./templates/footer.html";
            ?>
        </div>

        <script src="../public/js/jquery-3.3.1.min.js"></script>
        <script src="../public/js/product.js"></script>
        </body>
        </html>
        <?php
    }

    function card($item)
    {
       ?>        
       <h3 class="card__title"><?= $item['name'] ?></h3>
       <?
        }
}