<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Ticket_Tax_Product;
use controllers\Ticket_Tax_ProductController;

$objTickTaxProdControl=new Ticket_Tax_ProductController();
$objModelTickTaxProd=new Ticket_Tax_Product();
$objModelTickTaxProd->setTicket_idTicket();
$objModelTickTaxProd->setDateTicketTaxProductDevolution();
$objModelTickTaxProd->setTax_Product_idTax_Product();
$objModelTickTaxProd->setTicket_idTicket();
echo $objTickTaxProdControl ->create($objModelTickTaxProd);

