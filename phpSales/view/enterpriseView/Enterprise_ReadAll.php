<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\EnterpriseController;

$objEnterContol = new EnterpriseController();
echo $objEnterContol->getAll();

