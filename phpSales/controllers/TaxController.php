<?php
namespace controllers;

use config\Conn;
use model\Tax;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TaxController
 *
 * @author esteb
 */
class TaxController extends Conn{
    public function getAll() {

        $query = "SELECT t.idTax, t.taxName, t.porcentajeUnitario FROM Tax t ";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTax = new Tax();
            $objTax->setIdTax($row[0]);
            $objTax->setTaxName($row[1]);
            $objTax->setPorcentajeUnitario($row[2]);

            $arrayFinal[$row[0]] = $objTax->toString();
        }
        return json_encode($arrayFinal);
    }

    public function getById($id){
        
        $query = "SELECT t.idTax, t.taxName, t.porcentajeUnitario FROM Tax t WHERE idTax = $id";
        $resultado = mysqli_query($this->conn(), $query);
        $arrayFinal = array();
        while ($row = mysqli_fetch_array($resultado,MYSQLI_NUM)) {
            $objTax = new Tax();
            $objTax->setIdTax($row[0]);
            $objTax->setTaxName($row[1]);
            $objTax->setPorcentajeUnitario($row[2]);

            $arrayFinal[$row[0]] = $objTax->toString();
        }
        return json_encode($arrayFinal);
    }
    public function delete($id) {
        $link = $this->conn();
        $query = "DELETE FROM Tax WHERE idTax = $id";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("True");
        }else{
            return json_encode("False");
        }
        
    }
      public function create(Tax $objTaxModel){
        $name= $objTaxModel->getTaxName();
        $porcentaje= $objTaxModel->getPorcentajeUnitario();
        $link = $this->conn();
        $query = "INSERT INTO Tax(taxName, porcentajeUnitario) VALUES "
                . " ('$name', '$porcentaje') ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
    public function update(Tax $objTaxModel){
        $name= $objTaxModel->getTaxName();
        $porcentaje= $objTaxModel->getPorcentajeUnitario();
        $id = $objTaxModel->getIdTax();
        $link = $this->conn();
        $query = "UPDATE Tax SET taxName= '$name', porcentajeUnitario = '$porcentaje' WHERE idTax = $id ";
        mysqli_query($link, $query);
        if(mysqli_affected_rows($link)==1){
            return json_encode("Se ha realizado el registro con exito, filas afectadas 1");
        }else{ 
            return json_encode("No se ha realizado ningun registro, filas afectadas 0 ");
        }
    }
}
