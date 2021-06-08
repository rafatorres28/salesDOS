<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Tax_Product;
use controllers\Tax_ProductController;

$objTaxProdControl=new Tax_ProductController();
$objModelTaxProd=new Tax_Product();
$objModelTaxProd->setIdTax_Product(2);
$objModelTaxProd->setDateInit("2020/03/07");
$objModelTaxProd->setProduct_idProduct("4");
$objModelTaxProd->setTax_idTax("5");
echo $objTaxProdControl ->create($objModelTaxProd);

