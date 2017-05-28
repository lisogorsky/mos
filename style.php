<?php

require "scss.inc.php";

$scss = new scssc();
$scss->setFormatter("scss_formatter");

$server = new scss_server("scss", false, $scss);
$server->serve();

?>