<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Tax
 *
 * @author esteb
 */
class Tax {
    private $idTax;
    private $taxName;
    private $porcentajeUnitario;


    public function getIdTax() {
        return $this->idTax;
    }

    public function getTaxName() {
        return $this->taxName;
    }

    public function setIdTax($idTax): void {
        $this->idTax = $idTax;
    }

    public function setTaxName($taxName): void {
        $this->taxName = $taxName;
    }
    
    public function getPorcentajeUnitario() {
        return $this->porcentajeUnitario;
    }

    public function setPorcentajeUnitario($porcentajeUnitario): void {
        $this->porcentajeUnitario = $porcentajeUnitario;
    }

    public function toString(){
        $arrayR = array("idTax"=> $this->getIdTax(),
            "taxName"=> $this->getTaxName(),
            "porcentajeUnitario"=> $this->getPorcentajeUnitario());
        return $arrayR;
    }
}
