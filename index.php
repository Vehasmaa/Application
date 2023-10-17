<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa

// PHP session system start
session_start();

// Call application setup system
require_once './App/Bootstrap.php';

// Call Router now thats its scafolded up in bootstrap like db and template system
$GLOBALS['Router']->execute();

?>