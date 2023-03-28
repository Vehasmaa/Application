<?php
class Model
{
    public function __construct()
    {
        $this->viewTable = array();

    }

    public function getData()
    {
        $this->viewTable['title'] = 'View example';
        $this->viewTable['content'] = 'Something text here, from Model';

        return $this->viewTable;
    }

}

?>