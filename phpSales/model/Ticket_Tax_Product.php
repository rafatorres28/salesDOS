<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Ticket_Tax_Product
 *
 * @author esteb
 */
class Ticket_Tax_Product {
    private $idTicket_Tax_Product;
    private $dateTicketTaxProductDevolution;
    private $Tax_Product_idTax_Product;
    private $Ticket_idTicket;
    
    public function getIdTicket_Tax_Product() {
        return $this->idTicket_Tax_Product;
    }

    public function getDateTicketTaxProductDevolution() {
        return $this->dateTicketTaxProductDevolution;
    }

    public function getTax_Product_idTax_Product() {
        return $this->Tax_Product_idTax_Product;
    }

    public function getTicket_idTicket() {
        return $this->Ticket_idTicket;
    }

    public function setIdTicket_Tax_Product($idTicket_Tax_Product): void {
        $this->idTicket_Tax_Product = $idTicket_Tax_Product;
    }

    public function setDateTicketTaxProductDevolution($dateTicketTaxProductDevolution): void {
        $this->dateTicketTaxProductDevolution = $dateTicketTaxProductDevolution;
    }

    public function setTax_Product_idTax_Product($Tax_Product_idTax_Product): void {
        $this->Tax_Product_idTax_Product = $Tax_Product_idTax_Product;
    }

    public function setTicket_idTicket($Ticket_idTicket): void {
        $this->Ticket_idTicket = $Ticket_idTicket;
    }

    public function toString(){
        $arrayR = array("idTicket_Tax_Product"=> $this->getIdTicket_Tax_Product(),
            "dateTicketTaxProductDevolution"=> $this->getDateTicketTaxProductDevolution(),
            "Tax_Product_idTax_Product"=> $this->getTax_Product_idTax_Product(),
            "Ticket_idTicket"=> $this->getTicket_idTicket());
        return $arrayR;
    }
}
