<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\ProductController;

$objProdContol = new ProductController();
echo $objProdContol->delete(1);

