<?php

class Car{

    public  $color;
    public $brand;
    public $model;
    public function  __construct($color,$brand,$model)
    {

        $this->brand =$brand;
        $this->color =$color;
        $this->model= $model;
    }
    public function  showMessage(){
        return "My car is" . $this->brand . " <br>And Model is  " . $this->model . "<br>and color is ".$this->color;
    }




}

$myCar = new Car("Black","BMW","2021");
echo $myCar->showMessage();







?>
