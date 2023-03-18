<?php
class Template
{
    private string $tmpTemplate;

    public function __construct()
    {
        $this->tmpTemplate = "";
    }

    public function setTemplate($name)
    {
        if(file_exists(__DIR__.'/../../Template/'.$name.'.html'))
        {
            $this->tmpTemplate = file_get_contents(__DIR__.'/../../Template/'.$name.'.html');
            return true;
        }
        return false;
    }

    public function setField(string $fieldName, $fieldContent)
    {
        $this->tmpTemplate = str_replace('{{'.$fieldName.'}}',$fieldContent,$this->tmpTemplate);
    }

    private function clearFields()
    {
        $this->tmpTemplate = preg_replace('/{{[a-zA-Z]*}}/','',$this->tmpTemplate);
    }

    public function getView()
    {
        $this->clearFields();
        echo $this->tmpTemplate;
    }
}

?>