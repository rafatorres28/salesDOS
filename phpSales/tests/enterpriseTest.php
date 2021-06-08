<?php
require_once '../config/loader.php';
require_once '../config/cors.php';
use controllers\EnterpriseController;

$obj = new EnterpriseController();
$obj -> getAll();




