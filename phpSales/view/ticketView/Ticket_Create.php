<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Ticket;
use controllers\TicketController;

$objTickControl=new TicketController();
$objModelTicket=new Ticket();
$objModelTicket->setTicketDate("2021-06-01");
$objModelTicket->setPerson_idPerson("4");
echo $objTickControl ->create($objModelTicket);

