<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\Tax_ProductController;

$objTaxProdControl = new Tax_ProductController();
echo $objTaxProdControl->delete(2);

