<?php

namespace app\controllers;

use app\models\AdModel;

class AdController 
{
    protected $model;

    public function __construct()
    {
        $this->model = new AdModel;
    }

    public function indexAction() 
    {
        $ads =$this->model->getAll();
        return $ads;
    }
    public function create($contacts, $content) 
    {
        return $this->model->create($contacts, $content);
    }
}