<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\ProductType;
use controllers\ProductTypeController;

$objProdTypeControl=new ProductTypeController();
$objModelProductType=new ProductType();
$objModelProductType->setIdproductType(2);
$objModelProductType->setNameProductType("Aseo Personal");
echo $objProdTypeControl->update($objModelProductType);

