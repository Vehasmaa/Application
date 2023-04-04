<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

class View
{
    public function __construct()
    {

    }

    public function render($viewData)
    {
        $GLOBALS['Template']->setTemplate("Template");
        $GLOBALS['Template']->setField("Title",$viewData['title']);
        $GLOBALS['Template']->setField("Content",$viewData['content']);
        $GLOBALS['Template']->getView();
    }
}


?>