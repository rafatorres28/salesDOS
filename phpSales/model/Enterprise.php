<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace model;
/**
 * Description of Enterprise
 *
 * @author esteb
 */
class Enterprise {
    private $idEnterprise;
    private $enterpriseName;
    private $address;
    private $phoneNumber;
    
    public function getIdEnterprise() {
        return $this->idEnterprise;
    }

    public function getEnterpriseName() {
        return $this->enterpriseName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setIdEnterprise($idEnterprise): void {
        $this->idEnterprise = $idEnterprise;
    }

    public function setEnterpriseName($enterpriseName): void {
        $this->enterpriseName = $enterpriseName;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setPhoneNumber($phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }
    
    public function toString(){
        $arrayR = array("idEnterprise"=> $this->getIdEnterprise(),
            "enterpriseName"=> $this->getEnterpriseName(),
            "address"=> $this->getAddress(),
            "phoneNumber"=> $this->getPhoneNumber());
        return $arrayR;
    }

}
