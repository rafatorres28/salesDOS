<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\PersonController;

$objPersContol = new PersonController();
echo $objPersContol->getAll();

