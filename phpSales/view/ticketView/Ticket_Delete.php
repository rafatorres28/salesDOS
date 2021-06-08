<?php
require_once '../../config/cors.php';
require_once '../../config/loader.php';
use controllers\TicketController;

$objTickControl = new TicketController();
echo $objTickControl->delete(2);

