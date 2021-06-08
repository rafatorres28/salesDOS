<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Product;
use controllers\ProductController;

$objProdContol=new ProductController();
$objModelProduct=new Product();
$objModelProduct->setNameProduct("Shampoo");
$objModelProduct->setProductState("50");
$objModelProduct->setProvider_idProvider(1);
$objModelProduct->setEnterprise_idEnterprise(2);
$objModelProduct->setProductType_idproductType(1);
$objModelProduct->setPrecioUnitario(40000);
echo $objProdContol->create($objModelProduct);
