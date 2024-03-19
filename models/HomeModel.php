<?php

namespace models;

class HomeModel
{
    protected $connect;
    function __construct(){
        $this->connect= \\config\\DBConnect::getInstance()->getConnect();
    }

    function getProducts() {
        $query = $this->connect->query("select * from Products");
    
        if($query->num_rows) {
            $answer = [];
            
            while ($row = $query->fetch_assoc()) {
                $answer[] = $row;
            }
        }
    
        return $answer;
    }
    
}
