<?php
class Main
{
    public function __construct()
    {
        $this->views = array();

        $this->message = "<h2>Loaded</h2><p>Main controller class is loaded and running</p>";
    }

    public function index()
    {   
        $GLOBALS['Template']->setTemplate("Template");
        $GLOBALS['Template']->setField("Title","Test page about templates");

        $GLOBALS['Template']->setField("Content",$this->message);

        $GLOBALS['Template']->getView();
    }

    public function index2()
    {   
        $this->message = "<h2>Loaded 2</h2><p>Secondary function in Main class</p>";
        $GLOBALS['Template']->setTemplate("Template");
        $GLOBALS['Template']->setField("Title","Test page about templates");

        $GLOBALS['Template']->setField("Content",$this->message);

        $GLOBALS['Template']->getView();
    }

}
?>