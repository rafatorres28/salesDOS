<?php

require_once '../../config/cors.php';
require_once '../../config/loader.php';
use model\Ticket;
use controllers\TicketController;

$objTickControl=new TicketController();
$objModelTicket=new Ticket();
$objModelTicket->setIdTicket(2);
$objModelTicket->setTicketDate("2021-06-10");
$objModelTicket->setPerson_idPerson("5");
echo $objTickControl->update($objModelTicket);

