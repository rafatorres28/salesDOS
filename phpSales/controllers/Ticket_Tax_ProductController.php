<?php
namespace controllers;

use config\Conn;
use model\Ticket_Tax_Product;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ticket_Tax_ProductController
 *
 * @author esteb
 */
class Ticket_Tax_ProductController extends Conn{
     public function getAll() {

        $query = "SELECT ttp.idTicket_Tax_Product, ttp.dateTicketTaxProductDevolution, ttp.Tax_Product_idTax_Product, ttp.Ticket_idTicket "
                . " FROM Ticket_Tax_Product ttp ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTicket_Tax_Product = new Ticket_Tax_Product();
            $objTicket_Tax_Product->setIdTicket_Tax_Product($row[0]);
            $objTicket_Tax_Product->setTicket_Tax_ProductName($row[1]);
            $objTicket_Tax_Product->setAddress($row[2]);
            $objTicket_Tax_Product->setPhoneNumber($row[3]);

            $arrayFinal[$row[0]] = $objTicket_Tax_Product->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        
        $query = "SELECT e.idTicket_Tax_Product, e.enterpriseName, e.address, e.phoneNumber FROM Ticket_Tax_Product e WHERE idTicket_Tax_Product = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTicket_Tax_Product = new Ticket_Tax_Product();
            $objTicket_Tax_Product->setIdTicket_Tax_Product($row[0]);
            $objTicket_Tax_Product->setTicket_Tax_ProductName($row[1]);
            $objTicket_Tax_Product->setAddress($row[2]);
            $objTicket_Tax_Product->setPhoneNumber($row[3]);

            $arrayFinal[$row[0]] = $objTicket_Tax_Product->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Ticket_Tax_Product WHERE idTicket_Tax_Product = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Ticket_Tax_Product $objTicket_Tax_ProductModel){
        $name= $objTicket_Tax_ProductModel->getTicket_Tax_ProductName();
        $address = $objTicket_Tax_ProductModel->getAddress();
        $phoneN= $objTicket_Tax_ProductModel->getPhoneNumber();
        $link = $this->conn();
        $query = "INSERT INTO Ticket_Tax_Product(enterpriseName, address, phoneNumber) VALUES ('$name' , '$address' , '$phoneN' ) ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Ticket_Tax_Product $objTicket_Tax_ProductModel){
        $name= $objTicket_Tax_ProductModel->getTicket_Tax_ProductName();
        $address = $objTicket_Tax_ProductModel->getAddress();
        $phoneN= $objTicket_Tax_ProductModel->getPhoneNumber();
        $id = $objTicket_Tax_ProductModel->getIdTicket_Tax_Product();
        $link = $this->conn();
        $query = "UPDATE Ticket_Tax_Product SET enterpriseName= '$name' , address = '$address', phoneNumber= '$phoneN' WHERE idTicket_Tax_Product = $id ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
