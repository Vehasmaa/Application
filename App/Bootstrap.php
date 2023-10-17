<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

// Load generally needed class files
require_once __DIR__.'/Library/Template.php';
require_once __DIR__.'/Library/Database.php';
require_once __DIR__.'/Core/Router.php';

// Create instance of those classes and save it so globally available
$GLOBALS['Template'] = new Template;
$GLOBALS['Database'] = new Database;
$GLOBALS['Router'] = new Router;

?>