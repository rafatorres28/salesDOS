<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\ProviderController;

$objProvControl = new ProviderController();
echo $objProvControl->getById(1);

