<?php

class testController
{
    public function __construct()
    {

    }

    public function indexAction()
    {
        $GLOBALS['Template']->setTemplate("Template");
        $GLOBALS['Template']->setField("Title","Test page about templates");

        $GLOBALS['Template']->setField("Content",$newPath. "Explode results: ".implode(',',$newPath2));

        $GLOBALS['Template']->getView();
    }
}

?>