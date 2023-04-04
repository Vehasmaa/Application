<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

class Main
{
    public function __construct()
    {
        
    }

    public function index()
    {   
        require_once __DIR__.'/../Model/Model.php';
        $model = new Model();
        // $result = $model->getData();
        
        require_once __DIR__.'/../View/View.php';

        $view = new View();
        $view->render([ 'title' => 'Tietokanta testi','content' => "<h1>Database</h1>".$model->getData()]);

    }



}
?>