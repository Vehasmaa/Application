<?php

// $newPath
class Router
{
    // Router only needs this one function
    public function __construct()
    {
        $requestParameters = explode('/',$_GET['path']);
        
        $className = ucfirst(array_shift($requestParameters));
        $functionName = array_shift($requestParameters);

        $classFilePath = __DIR__."/../Controller/{$className}.php";
        // Does file even exists?
        if(!file_exists($classFilePath))
        {
            // File docent exists...
            echo "Class file not found.";
            exit;
        }
        
        // yes it exists, load it
        require $classFilePath;
        
        // Does class really exists or method is missing???
        if(!class_exists($className)) 
        {
            echo "Class not found.";
            exit;
        }
        if(!method_exists($className, $functionName))
        {
            echo "Method docent exists in class.";
            exit;
        }

        //$requestParameters = "";
        
        // Create instance of controller class
        $classInstance =  new $className();
        
        // Call controllers function
        $classInstance->$functionName($requestParameters);
    }
}

?>
