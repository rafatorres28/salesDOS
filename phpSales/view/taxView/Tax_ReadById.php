<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\TaxController;

$objTaxControl = new TaxController();
echo $objTaxProdControl->getById(1);

