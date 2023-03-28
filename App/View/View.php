<?php

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