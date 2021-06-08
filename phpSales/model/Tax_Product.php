<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Tax_Product
 *
 * @author esteb
 */
class Tax_Product {
    private $idTax_Product;
    private $dateInit;
    private $Product_idProduct;
    private $Tax_idTax;
    
    public function getIdTax_Product() {
        return $this->idTax_Product;
    }

    public function getDateInit() {
        return $this->dateInit;
    }

    public function getProduct_idProduct() {
        return $this->Product_idProduct;
    }

    public function getTax_idTax() {
        return $this->Tax_idTax;
    }

    public function setIdTax_Product($idTax_Product): void {
        $this->idTax_Product = $idTax_Product;
    }

    public function setDateInit($dateInit): void {
        $this->dateInit = $dateInit;
    }

    public function setProduct_idProduct($Product_idProduct): void {
        $this->Product_idProduct = $Product_idProduct;
    }

    public function setTax_idTax($Tax_idTax): void {
        $this->Tax_idTax = $Tax_idTax;
    }

    public function toString(){
        $arrayR = array("idTax_Product"=> $this->getIdTax_Product(),
            "dateInit"=> $this->getDateInit(),
            "Product_idProduct"=> $this->getProduct_idProduct(),
            "Tax_idTax"=> $this->getTax_idTax());
        return $arrayR;
    }
}
