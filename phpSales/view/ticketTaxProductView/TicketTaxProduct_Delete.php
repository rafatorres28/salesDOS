<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\Ticket_Tax_ProductController;

$objTickTaxProdControl = new Ticket_Tax_ProductController();
echo $objTickTaxProdControl->delete(2);

