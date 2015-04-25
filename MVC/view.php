<?php

require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';


class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return '<p><a href="index.php?action=clicked">' . $this->model->string . "</a></p>";
    }
}