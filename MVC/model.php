<?php

require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';


class Model
{
    public $string;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome, click here!";
    }

}