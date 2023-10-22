<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa



// Class Autoloaders

spl_autoload_register(function ($className) {
    // Autoloading logic for App/Library
    // Do not try include if docent exists
    if(file_exists(__DIR__ . '/App/Library/' . $className . '.php')){
            include __DIR__ .'/App/Library/' . $className . '.php';
    } 
});

spl_autoload_register(function ($className) {
    // Autoloading logic for App/Core
    // Do not try include if docent exists
    if(file_exists(__DIR__ . '/App/Core/' . $className . '.php')) {
            include __DIR__ . '/App/Core/' . $className . '.php';
    }
});


// PHP session system start
session_start();


// Call application setup system
require_once './App/Bootstrap.php';

// Call Router now thats its scafolded up in bootstrap like db and template system
$GLOBALS['Router']->execute();

?>