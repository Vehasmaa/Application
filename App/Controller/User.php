<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

class Main
{

    /*
    * All user actions in this controller
    *
    */
    public function __construct()
    {
        require_once __DIR__.'/../Model/UserModel.php';
        $this->model = new UserSModel();

        require_once __DIR__.'/../View/View.php';

        $this->view = new View();
    }

    public function index()
    {   
        // Generate login form in buffer
        $this->buffer = "";

        // Call model to generate login form
        $this->buffer = $this->model->getForm();

        // Feed said buffer to template
        $view->render([ 'title' => 'Login','content' => "<h1>Loginform</h1>".$this->buffer]);

    }

    public function process()
    {
        $this->model->login();

        if(isset($_SESSION['logoin']) && $_SESSION['logoin'] == true)
        {
            $view->render([ 'title' => 'Login Success','content' => "<h1>Login Succes</h1><p>Login succesful.</p>"]);

        } else {
            $view->render([ 'title' => 'Login error','content' => "<h1>Login Error</h1><p>Wrong username or password.</p>"]);

        }

        exit();
        // $view->render([ 'title' => 'Tietokanta testi','content' => "<h1>Database</h1>".$model->getData()]);
    }


}
?>