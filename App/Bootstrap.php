<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa


/**
 * These requires are obsolete in way they are loaded by autoloeaders now.
 * 
 */
// // Load generally needed class files
// require_once __DIR__.'/Library/Template.php';
// require_once __DIR__.'/Library/Database.php';
// // Added prerouter here as servivice way - even if it does nothing currently
// require_once __DIR__.'/Core/Prerouter.php';
// require_once __DIR__.'/Core/Router.php';

// Lets try instanciate Template and database objects
if(class_exists('Template') && class_exists('Database'))
{
    $GLOBALS['Template'] = new Template;
}
else
{
    echo 'Primary classes missing';
    exit();
}

// Addib preroute object to be called later when it does something useful

if (class_exists('Prerouter') && class_exists('Router'))
{
    $GLOBALS['Prerouter'] = new Prerouter;
    $GLOBALS['Router'] = new Router;
} else {
    echo 'Routing classes not loaded';
    exit();
}

?>