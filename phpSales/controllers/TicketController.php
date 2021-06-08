<?php
namespace controllers;

use config\Conn;
use model\Ticket;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TicketController
 *
 * @author esteb
 */
class TicketController extends Conn{
    public function getAll() {

        $query = "SELECT tk.idTicket, tk.ticketDate, tk.Person_idPerson FROM Ticket tk ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTicket = new Ticket();
            $objTicket->setIdTicket($row[0]);
            $objTicket->setTicketDate($row[1]);
            $objTicket->setPerson_idPerson($row[2]);

            $arrayFinal[$row[0]] = $objTicket->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        
        $query = "SELECT tk.idTicket, tk.ticketDate, tk.Person_idPerson FROM Ticket tk WHERE idTicket = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTicket = new Ticket();
            $objTicket->setIdTicket($row[0]);
            $objTicket->setTicketDate($row[1]);
            $objTicket->setPerson_idPerson($row[2]);

            $arrayFinal[$row[0]] = $objTicket->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Ticket WHERE idTicket = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Ticket $objTicketModel){
        $tickDate= $objTicketModel->getTicketDate();
        $personId = $objTicketModel->getPerson_idPerson();
        $link = $this->conn();
        $query = "INSERT INTO Ticket(ticketDate, Person_idPerson) VALUES ('$tickDate' , '$personId') ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Ticket $objTicketModel){
        $tickDate= $objTicketModel->getTicketDate();
        $personId = $objTicketModel->getPerson_idPerson();
        $id = $objTicketModel->getIdTicket();
        $link = $this->conn();
        $query = "UPDATE Ticket SET ticketDate = '$tickDate' , Person_idPerson = $personId WHERE idTicket = $id ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
