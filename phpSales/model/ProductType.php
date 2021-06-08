<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of productType
 *
 * @author esteb
 */
class ProductType {
    private $idproductType;
    private $nameProductType;
    
    public function getIdproductType() {
        return $this->idproductType;
    }

    public function getNameProductType() {
        return $this->nameProductType;
    }

    public function setIdproductType($idproductType): void {
        $this->idproductType = $idproductType;
    }

    public function setNameProductType($nameProductType): void {
        $this->nameProductType = $nameProductType;
    }

    public function toString(){
        $arrayR = array("idProductType"=> $this->getIdproductType(),
            "nameProductType"=> $this->getNameProductType());
        return $arrayR;
    }
}
