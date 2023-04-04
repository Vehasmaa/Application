<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

// PHP session system start
session_start();

// Call application setup system
require_once './App/Bootstrap.php';

// Call router
require './App/Core/Router.php';

// Create new instance of Router, also triggers its execution throw __construct method
$router = new Router();

?>