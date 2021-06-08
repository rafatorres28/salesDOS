<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Tax;
use controllers\TaxController;

$objTaxControl=new TaxController();
$objModelTax=new Tax();
$objModelTax->setTaxName("Iva");
$objModelTax->setPorcentajeUnitario(20);
echo $objTaxControl->create($objModelTax);

