<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Product
 *
 * @author esteb
 */
class Product {
    private $idProduct;
    private $nameProduct;
    private $productState;
    private $Provider_idProvider;
    private $Enterprise_idEnterprise;
    private $productType_idproductType;
    private $precioUnitario;


    public function getIdProduct() {
        return $this->idProduct;
    }

    public function getNameProduct() {
        return $this->nameProduct;
    }

    public function getProductState() {
        return $this->productState;
    }

    public function getProvider_idProvider() {
        return $this->Provider_idProvider;
    }

    public function getEnterprise_idEnterprise() {
        return $this->Enterprise_idEnterprise;
    }

    public function getProductType_idproductType() {
        return $this->productType_idproductType;
    }

    public function setIdProduct($idProduct): void {
        $this->idProduct = $idProduct;
    }

    public function setNameProduct($nameProduct): void {
        $this->nameProduct = $nameProduct;
    }

    public function setProductState($productState): void {
        $this->productState = $productState;
    }

    public function setProvider_idProvider($Provider_idProvider): void {
        $this->Provider_idProvider = $Provider_idProvider;
    }

    public function setEnterprise_idEnterprise($Enterprise_idEnterprise): void {
        $this->Enterprise_idEnterprise = $Enterprise_idEnterprise;
    }

    public function setProductType_idproductType($productType_idproductType): void {
        $this->productType_idproductType = $productType_idproductType;
    }
    
    public function getPrecioUnitario() {
        return $this->precioUnitario;
    }

    public function setPrecioUnitario($precioUnitario): void {
        $this->precioUnitario = $precioUnitario;
    }

    
    public function toString(){
        $arrayR = array("idProduct"=> $this->getIdProduct(),
            "nameProduct"=> $this->getNameProduct(),
            "productState"=> $this->getProductState(),
            "Provider_idProvider"=> $this->getProvider_idProvider(),
            "Enterprise_idEnterprise"=> $this->getEnterprise_idEnterprise(),
            "productType_idproductType"=> $this->getProductType_idproductType(),
            "precioUnitario"=> $this->getPrecioUnitario());
        return $arrayR;
    }
}
