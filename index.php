<?php
# Micro MVC striimi projekti 18.3.2023 - 
# Author: Jurva-Markus Vehasmaa
require_once './App/Bootstrap.php';

$GLOBALS['Template']->setTemplate("Template");
$GLOBALS['Template']->setField("Title","Test page about templates");
$GLOBALS['Template']->setField("Content","<h2>Template works</h2><p>Test paragraph.</p>");

$GLOBALS['Template']->getView();
?>