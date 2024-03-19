<?php

namespace models;

class ProductModel
{
    protected $connect;
    function __construct(){
        $this->connect= \config\DBConnect::getInstance()->getConnect();
    }
  
    function getProduct($data){

        $query = $this->connect->query("
            SELECT * 
            FROM Products 
            JOIN Categories ON Products.id_category = Categories.id_category
            WHERE Products.ID = $data
        ");
        
        $answer = array();

        if($query->num_rows) {
            while ($row = $query->fetch_assoc()) {
                $answer = $row;
            }
        }
        return $answer;
    }
}