<?php
class Main
{
    public function __construct()
    {
        
    }

    public function index()
    {   
        require_once __DIR__.'/../Model/Model.php';
        $model = new Model();
        //$model->getData();
        
        require_once __DIR__.'/../View/View.php';

        $view = new View();
        $view->render($model->getData());

    }



}
?>