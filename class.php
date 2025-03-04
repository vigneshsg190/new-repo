<?php

class vehicle{
    public $model;
    public $price;

    function myfunction(){
        echo "the model is $this->model <br>";
        echo "the price is $this->price<br>";
    }
}

$obj=new vehicle();
$obj->model="Nissan";
$obj->price="200000";
$obj->myfunction();