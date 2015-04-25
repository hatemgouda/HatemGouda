<?php

require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';


class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function clicked() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}