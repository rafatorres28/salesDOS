<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Tax;
use controllers\TaxController;

$objTaxControl=new TaxController();
$objModelTax=new Tax();
$objModelTax->setIdTax(6);
$objModelTax->setTaxName("Iva");
$objModelTax->setPorcentajeUnitario(15);
echo $objTaxControl->update($objModelTax);

