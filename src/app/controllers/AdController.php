<?php

namespace app\controllers;

use app\models\AdModel;

class AdController 
{
    protected $model;
    protected $pagination = 50;

    public function __construct()
    {
        $this->model = new AdModel;
    }

    public function indexAction($page) 
    {
        $ads =$this->model->getAll();
        $start = $page * $this->pagination;
        $end = $start + $this->pagination;
        $next = count($ads) > $end ? true : false;
        $prev = $start >= 50 ? true : false;
        $ads = array_slice($ads, $start, $end);
        $content = array(
            'ads' => $ads,
            'next' => $next,
            'prev' => $prev,
            'page' => $page
        );
        return $content;
    }
    public function create($contacts, $content) 
    {
        return $this->model->create($contacts, $content);
    }
   
}