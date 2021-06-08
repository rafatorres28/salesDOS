<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Ticket
 *
 * @author esteb
 */
class Ticket {
    private $idTicket;
    private $ticketDate;
    private $Person_idPerson;
    
    public function getIdTicket() {
        return $this->idTicket;
    }

    public function getTicketDate() {
        return $this->ticketDate;
    }

    public function getPerson_idPerson() {
        return $this->Person_idPerson;
    }

    public function setIdTicket($idTicket): void {
        $this->idTicket = $idTicket;
    }

    public function setTicketDate($ticketDate): void {
        $this->ticketDate = $ticketDate;
    }

    public function setPerson_idPerson($Person_idPerson): void {
        $this->Person_idPerson = $Person_idPerson;
    }

    public function toString(){
        $arrayR = array("idTicket"=> $this->getIdTicket(),
            "ticketDate"=> $this->getTicketDate(),
            "Person_idPerson"=> $this->getPerson_idPerson());
        return $arrayR;
    }
}
