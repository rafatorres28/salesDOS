<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Tax_Product;
use controllers\Tax_ProductController;

$objTaxProdControl=new Tax_ProductController();
$objModelTaxProd=new Tax_Product();
$objModelTaxProd->setDateInit("2021/02/04");
$objModelTaxProd->setProduct_idProduct("4");
$objModelTaxProd->setTax_idTax("5");
echo $objTaxProdControl ->create($objModelTaxProd);

