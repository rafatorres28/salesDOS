<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\ProductTypeController;

$objProdTypeControl = new ProductTypeController();
echo $objProdTypeControl->getById("1");

